<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>403 – Access Denied | Pastimes</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="topbar">
    <a href="index.php" class="topbar-logo"><span class="hanger">🪝</span> Pastimes</a>
    <nav class="topbar-nav"><a href="#">Home</a><a href="shop.php">Shop</a></nav>
    <div class="topbar-right">
      <div class="topbar-user">
        <div class="avatar">👩🏾</div>
        <div>
          <div style="font-weight:600; font-size:0.9rem;">Thandi K.</div>
          <div style="font-size:0.75rem; color:var(--text-light);">Administrator</div>
        </div>
        <span style="font-size:0.8rem; color:var(--text-light);">▾</span>
      </div>
    </div>
  </header>

  <div class="dashboard-layout">
    <aside class="sidebar">
      <a href="shop.php"           class="sidebar-link"><span class="icon">⊞</span> Shop All</a>
      <a href="#"                  class="sidebar-link"><span class="icon">🏷</span> Brands <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">📐</span> Size <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">®</span> Price Range <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">👔</span> Menswear <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">👗</span> Womenswear <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">⌚</span> Vintage <span style="margin-left:auto;font-size:.75rem;">▾</span></a>
      <a href="#"                  class="sidebar-link"><span class="icon">🛡</span> Verification Portal</a>
      <a href="#"                  class="sidebar-link"><span class="icon">⚙</span> Settings</a>
      <a href="admin_listings.php" class="sidebar-link active"><span class="icon">⊞</span> Admin: Manage</a>
      <a href="admin_dashboard.php" class="sidebar-link"><span class="icon">🏠</span> Admin: Dashboard</a>
    </aside>

    <main class="main-content" style="display:flex; align-items:center; justify-content:center; min-height:70vh;">
      <div class="card" style="max-width:440px; width:100%; text-align:center; padding:2.5rem 2rem;">

        <h2 style="font-family:var(--font-display); font-size:1.4rem; font-weight:600; color:var(--text-dark); margin-bottom:1.3rem; line-height:1.35;">
          Access Denied. Sorry, but you<br>can't access this area. (403 Error)
        </h2>

        <!-- LOCK ICON -->
        <div style="margin:0 auto 1.3rem; width:90px; height:90px; background:var(--teal-dark); border-radius:var(--radius-lg); display:flex; align-items:center; justify-content:center; position:relative;">
          <span style="font-size:3rem;">🔒</span>
          <span style="position:absolute; bottom:-6px; right:-6px; font-size:1.4rem;">🪝</span>
        </div>

        <p style="font-size:0.9rem; color:var(--text-mid); line-height:1.65; margin-bottom:1.5rem;">
          <strong>Thandi</strong>, as an Administrator, you have many tools, but some pastimes are currently restricted. Don't worry, it's nothing personal. Let's return to where things are open. 🖐
        </p>

        <div style="display:flex; flex-direction:column; gap:0.7rem; margin-bottom:1.1rem;">
          <a href="admin_dashboard.php" class="btn-primary" style="display:block; text-align:center; text-decoration:none;">
            [Return to Admin Dashboard]
          </a>
          <a href="index.php" class="btn-primary" style="display:block; text-align:center; text-decoration:none; background:var(--cream-dark); color:var(--text-dark); border:1.5px solid var(--border);" onmouseover="this.style.background='var(--border)'" onmouseout="this.style.background='var(--cream-dark)'">
            [Return to Home Page]
          </a>
        </div>

        <a href="#" style="font-size:0.87rem; color:var(--teal); text-decoration:underline; font-weight:500;">
          Request Access
        </a>
        <span style="font-size:0.82rem; color:var(--text-light);">
          (phone verified required, from &lt;Image-0&gt;)
        </span>

      </div>
    </main>
  </div>

  <footer>
    <div class="footer-links">
      <a href="#">About Pastimes</a><a href="#">How to Sell</a><a href="#">Contact Us</a><a href="#">FAQ</a>
    </div>
    <div class="footer-socials"><a href="#">f</a><a href="#">𝕏</a><a href="#">ig</a><a href="#">in</a></div>
  </footer>
</body>
</html>