 <?php
// footer.php — include at the bottom of every page
// Automatically shows correct links based on session role
$isAdmin  = isset($_SESSION['admin']);
$isUser   = isset($_SESSION['user']);
$isSeller = $isUser && ($_SESSION['user']['role'] ?? '') === 'seller' && ($_SESSION['user']['sellerStatus'] ?? '') === 'approved';
?>
<footer style="background:var(--teal-dark); color:rgba(255,255,255,0.85); padding:2.8rem 2rem 1.4rem; margin-top:auto;">
  <div style="max-width:1200px; margin:0 auto;">

    <!-- TOP ROW -->
    <div style="display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:2rem; margin-bottom:2rem;">

      <!-- BRAND COL -->
      <div>
        <div style="font-family:var(--font-display); font-size:1.6rem; color:#fff; margin-bottom:0.6rem;">
          🪝 Pastimes
        </div>
        <p style="font-size:0.85rem; line-height:1.65; color:rgba(255,255,255,0.6); max-width:260px; margin-bottom:1rem;">
          Pre-loved fashion, loved again. Discover unique second-hand clothing from verified sellers across South Africa.
        </p>
        <!-- SOCIALS -->
        <div style="display:flex; gap:0.7rem;">
          <?php foreach(['f','𝕏','ig','in'] as $s): ?>
            <a href="#" style="width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.9rem;text-decoration:none;transition:background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.25)'" onmouseout="this.style.background='rgba(255,255,255,0.12)'"><?= $s ?></a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- SHOP COL -->
      <div>
        <div style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:rgba(255,255,255,0.5);margin-bottom:0.9rem;">Shop</div>
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $shopLinks = [
            ['href'=>'shop.php',                    'label'=>'All Clothing'],
            ['href'=>'shop.php?gender=Men',          'label'=>'👔 Menswear'],
            ['href'=>'shop.php?gender=Women',        'label'=>'👗 Womenswear'],
            ['href'=>'shop.php?gender=Unisex',       'label'=>'✨ Unisex'],
            ['href'=>'shop.php?brand=Nike',          'label'=>'Nike'],
            ['href'=>'shop.php?brand=Zara',          'label'=>'Zara'],
            ['href'=>'shop.php?brand=Gucci',         'label'=>'Gucci'],
            ['href'=>'shop.php?brand=Burberry',      'label'=>'Burberry'],
          ];
          foreach ($shopLinks as $l): ?>
            <a href="<?= $l['href'] ?>" style="font-size:0.87rem;color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'"><?= $l['label'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- ACCOUNT COL -->
      <div>
        <div style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:rgba(255,255,255,0.5);margin-bottom:0.9rem;">Account</div>
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <?php if ($isAdmin): ?>
            <?php
            $accountLinks = [
              ['href'=>'admin_dashboard.php', 'label'=>'Admin Dashboard'],
              ['href'=>'admin_users.php',     'label'=>'Manage Users'],
              ['href'=>'admin_listings.php',  'label'=>'Manage Listings'],
              ['href'=>'admin_clothes.php',   'label'=>'Manage Clothing'],
              ['href'=>'messages.php',        'label'=>'Messages'],
              ['href'=>'logout.php?admin=1',  'label'=>'Logout'],
            ];
            ?>
          <?php elseif ($isUser): ?>
            <?php
            $accountLinks = [
              ['href'=>'buyer_dashboard.php', 'label'=>'My Dashboard'],
              ['href'=>'order_history.php',   'label'=>'Order History'],
              ['href'=>'wishlist.php',        'label'=>'Wishlist'],
              ['href'=>'cart.php',            'label'=>'Shopping Cart'],
              ['href'=>'messages.php',        'label'=>'Messages'],
              ['href'=>'logout.php',          'label'=>'Logout'],
            ];
            if ($isSeller) {
              array_splice($accountLinks, 1, 0, [['href'=>'seller_dashboard.php','label'=>'Seller Dashboard']]);
            }
            ?>
          <?php else: ?>
            <?php
            $accountLinks = [
              ['href'=>'login.php',    'label'=>'Login'],
              ['href'=>'register.php', 'label'=>'Register'],
              ['href'=>'register.php', 'label'=>'Register as Seller'],
              ['href'=>'cart.php',     'label'=>'Shopping Cart'],
            ];
            ?>
          <?php endif; ?>
          <?php foreach ($accountLinks as $l): ?>
            <a href="<?= $l['href'] ?>" style="font-size:0.87rem;color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'"><?= $l['label'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- HELP COL -->
      <div>
        <div style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:rgba(255,255,255,0.5);margin-bottom:0.9rem;">Help &amp; Info</div>
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $helpLinks = [
            ['href'=>'messages.php',  'label'=>'Contact Us'],
            ['href'=>'#',             'label'=>'How It Works'],
            ['href'=>'#',             'label'=>'Shipping Info'],
            ['href'=>'#',             'label'=>'Returns Policy'],
            ['href'=>'#',             'label'=>'FAQ'],
            ['href'=>'#',             'label'=>'Seller Guide'],
            ['href'=>'#',             'label'=>'Privacy Policy'],
          ];
          foreach ($helpLinks as $l): ?>
            <a href="<?= $l['href'] ?>" style="font-size:0.87rem;color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'"><?= $l['label'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <!-- DIVIDER -->
    <div style="border-top:1px solid rgba(255,255,255,0.12); margin-bottom:1.1rem;"></div>

    <!-- BOTTOM ROW -->
    <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:0.8rem;">
      <p style="font-size:0.78rem;color:rgba(255,255,255,0.4);margin:0;">
        &copy; <?= date('Y') ?> Pastimes. All rights reserved. &nbsp;·&nbsp; Pre-loved fashion marketplace — South Africa 🇿🇦
      </p>
      <div style="display:flex;gap:1.2rem;flex-wrap:wrap;">
        <?php foreach(['Privacy Policy','Terms of Use','Cookie Policy'] as $p): ?>
          <a href="#" style="font-size:0.78rem;color:rgba(255,255,255,0.4);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.4)'"><?= $p ?></a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</footer>