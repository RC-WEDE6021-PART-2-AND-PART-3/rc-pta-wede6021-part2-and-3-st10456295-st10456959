<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 – Page Not Found | Pastimes</title>
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
      <div class="card" style="max-width:420px; width:100%; text-align:center; padding:2.5rem 2rem;">

        <h2 style="font-family:var(--font-display); font-size:1.45rem; font-weight:600; color:var(--text-dark); margin-bottom:1.2rem; line-height:1.3;">
          Oops! We Couldn't Find<br>That Page. (404 Error)
        </h2>

        <div style="font-size:4rem; margin-bottom:1.1rem;">🧭</div>

        <p style="font-size:0.9rem; color:var(--text-mid); line-height:1.6; font-weight:500; margin-bottom:1.4rem;">
          It seems the clothing item or page you are looking for has been tucked away. Let's get you back to browsing curated second-hand treasures!
        </p>

        <div style="display:flex; align-items:center; justify-content:center; gap:0.8rem; margin-bottom:1.5rem;">
          <div style="width:64px; height:64px; background:var(--cream-dark); border-radius:var(--radius-md); border:1px solid var(--border); display:flex; align-items:center; justify-content:center; font-size:2.2rem;">🧣</div>
          <div style="font-size:2rem; color:var(--text-light);">?</div>
        </div>

        <a href="index.php" class="btn-primary" style="display:flex; align-items:center; justify-content:center; gap:0.5rem; text-decoration:none;">
          🏠 [Return to Home Page]
        </a>
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