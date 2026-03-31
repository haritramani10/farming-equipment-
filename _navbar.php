<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<link rel="stylesheet" href="<?php echo str_repeat('../', substr_count($_SERVER['PHP_SELF'], '/', strlen($_SERVER['DOCUMENT_ROOT'])) - 1); ?>css/animations.css">

<nav class="fs-navbar">
    <div class="container-fluid">
        <div class="fs-nav-inner">
            <!-- Brand -->
            <a href="index.php" class="fs-brand">FARM<span>SHOP</span></a>

            <!-- Nav Links (desktop) -->
            <ul class="fs-nav-links">
                <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="product.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : ''; ?>"><i class="fas fa-store"></i> Shop</a></li>
                <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>"><i class="fas fa-leaf"></i> About Us</a></li>
            </ul>

            <!-- Actions -->
            <div class="fs-nav-actions">
                <?php if(isset($_SESSION['admin_auth'])): ?>
                    <a href="admin/index.php" class="fs-nav-icon" title="Admin Panel" style="background:#fff8e1; color:#f59e0b;">
                        <i class="fas fa-cog"></i>
                    </a>
                <?php endif; ?>

                <!-- Cart Icon -->
                <a href="shoping-cart.php" class="fs-nav-icon" title="Shopping Cart">
                    <i class="fas fa-shopping-cart"></i>
                    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                        <span class="fs-cart-badge"><?php echo count($_SESSION['cart']); ?></span>
                    <?php endif; ?>
                </a>

                <!-- User -->
                <?php if(isset($_SESSION['user_name'])): ?>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="fs-user-chip">
                            <div class="avatar"><?php echo strtoupper(substr($_SESSION['user_name'],0,1)); ?></div>
                            Hi, <?php echo htmlspecialchars(explode(' ',$_SESSION['user_name'])[0]); ?>
                        </div>
                        <a href="logout.php" class="fs-nav-icon" title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="fs-btn-login"><i class="fas fa-user"></i> Login</a>
                <?php endif; ?>

                <!-- Hamburger -->
                <button class="fs-hamburger" id="hamburgerBtn" onclick="toggleMobileNav()">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Nav Drawer -->
    <div id="mobileNav" style="display:none; background:white; border-top:1px solid #eef1ee; padding: 12px 20px;">
        <a href="index.php" style="display:block;padding:10px 0;font-weight:500;font-size:14px;border-bottom:1px solid #eef1ee;"><i class="fas fa-home mr-2" style="color:#1a7c3e;width:20px;"></i> Home</a>
        <a href="product.php" style="display:block;padding:10px 0;font-weight:500;font-size:14px;border-bottom:1px solid #eef1ee;"><i class="fas fa-store mr-2" style="color:#1a7c3e;width:20px;"></i> Shop</a>
        <a href="about.php" style="display:block;padding:10px 0;font-weight:500;font-size:14px;"><i class="fas fa-leaf mr-2" style="color:#1a7c3e;width:20px;"></i> About Us</a>
    </div>
</nav>

<script>
function toggleMobileNav() {
    var nav = document.getElementById('mobileNav');
    nav.style.display = nav.style.display === 'none' ? 'block' : 'none';
}
</script>

