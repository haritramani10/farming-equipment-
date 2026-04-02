<footer class="fs-footer">
    <div class="container">
        <div class="row">
            <!-- Brand col --> 
            <div class="col-md-4 mb-5">
                <div class="footer-brand">FARM<span>SHOP</span></div>
                <p class="footer-desc">India's leading Agri Digital Platform, transforming the agriculture value chain from pre-harvest to post-harvest leveraging science, data, and technology.</p>
                <div class="footer-social">
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h6 class="footer-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-chevron-right mr-1" style="font-size:10px;"></i> Home</a></li>
                    <li><a href="product.php"><i class="fas fa-chevron-right mr-1" style="font-size:10px;"></i> Shop</a></li>
                    <li><a href="about.php"><i class="fas fa-chevron-right mr-1" style="font-size:10px;"></i> About Us</a></li>
                    <li><a href="shoping-cart.php"><i class="fas fa-chevron-right mr-1" style="font-size:10px;"></i> Cart</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-heading">Categories</h6>
                <ul class="footer-links">
                    <li><a href="product.php?category=Seeds"><i class="fas fa-seedling mr-1" style="font-size:10px;color:#22a852;"></i> Seeds</a></li>
                    <li><a href="product.php?category=Fertilizer"><i class="fas fa-flask mr-1" style="font-size:10px;color:#22a852;"></i> Fertilizers</a></li>
                    <li><a href="product.php?category=Equipment %26 Tools"><i class="fas fa-tools mr-1" style="font-size:10px;color:#22a852;"></i> Equipment & Tools</a></li>
                    <li><a href="product.php?category=Crop Care"><i class="fas fa-leaf mr-1" style="font-size:10px;color:#22a852;"></i> Crop Care</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3 mb-4">
                <h6 class="footer-heading">Contact Us</h6>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Rajkot, Gujarat, India — 360001</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>haritramani10@gmail.com</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+91 97125 10688</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-clock"></i>
                    <span>Mon–Sat: 9:00 AM – 6:00 PM</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            &copy; <?php echo date('Y'); ?> <strong style="color:rgba(255,255,255,0.6);">Balaji Enterprise</strong> — FarmShop. All Rights Reserved. &nbsp;|&nbsp; Designed with <i class="fas fa-heart" style="color:#ef4444;"></i> for Indian Farmers
        </div>
    </div>
</footer>

<!-- ── Page Loader ───────────────────────── -->
<div id="page-loader">
    <div class="loader-brand">FARM<span>SHOP</span></div>
    <div class="loader-bar"><div class="loader-bar-fill"></div></div>
</div>

<!-- ── Page Transition Overlay ───────────── -->
<div id="page-transition"></div>

<!-- ── Scroll To Top Button ──────────────── -->
<button id="scrollTopBtn" title="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- ── Animations JS ─────────────────────── -->
<script src="<?php echo str_repeat('../', substr_count($_SERVER['PHP_SELF'], '/', strlen($_SERVER['DOCUMENT_ROOT'])) - 1); ?>js/animations.js"></script>

