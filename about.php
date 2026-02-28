<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | FarmShop</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f8f9fa; color: #333; overflow-x: hidden; }
        
        /* Navbar */
        .navbar { background: white; box-shadow: 0 2px 5px rgba(0,0,0,0.05); padding: 15px 0; }
        .navbar-brand { font-weight: 700; font-size: 26px; color: #1e8b40 !important; }
        .nav-link { color: #333 !important; font-weight: 500; font-size: 15px; margin: 0 10px; }
        .nav-link:hover { color: #1e8b40 !important; }
        .cart-icon { font-size: 20px; color: #1e8b40; position: relative; }
        .cart-badge { background: #ff9800; color: white; border-radius: 50%; padding: 2px 6px; font-size: 10px; position: absolute; top: -5px; right: -10px; font-weight: bold; }

        /* About Us Content */
        .about-header { background: #1e8b40; color: white; padding: 60px 0; text-align: center; }
        .about-header h1 { font-weight: 700; margin-bottom: 10px; }
        .about-content { padding: 60px 0; background: white; }
        .about-text h2 { color: #1e8b40; font-weight: 700; margin-bottom: 20px; }
        .about-text p { color: #555; line-height: 1.8; font-size: 16px; margin-bottom: 20px; }
        .about-img { border-radius: 8px; width: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }

        /* Footer */
        .bh-footer { background: #1a1a1a; color: #fff; padding: 60px 0 20px; margin-top: 60px; }
        .bh-footer h5 { color: #fff; font-weight: 700; margin-bottom: 20px; font-size: 16px; text-transform: uppercase; letter-spacing: 1px; }
        .bh-footer ul { list-style: none; padding: 0; }
        .bh-footer ul li { margin-bottom: 12px; }
        .bh-footer ul li a { color: #aaa; text-decoration: none; transition: 0.3s; font-size: 14px; }
        .bh-footer ul li a:hover { color: #1e8b40; padding-left: 5px; }
        .bh-footer .contact-info { color: #aaa; font-size: 14px; margin-bottom: 10px; }
        .bh-footer .contact-info i { color: #1e8b40; margin-right: 10px; width: 15px; text-align: center; }
        .footer-bottom { border-top: 1px solid #333; margin-top: 40px; padding-top: 20px; text-align: center; color: #777; font-size: 13px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">FARM<span style="color: #ff9800;">SHOP</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Shop Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php" style="color: #1e8b40 !important;">About Us</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <?php if(isset($_SESSION['admin'])) { ?>
                        <a href="admin/index.php" class="nav-link text-warning mr-3" style="font-size: 13px;"><i class="fas fa-cog"></i> ADMIN</a>
                    <?php } ?>
                    <a href="login.php" class="nav-link mr-3"><i class="far fa-user"></i></a>
                    <a href="cart.php" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                            <span class="cart-badge"><?php echo count($_SESSION['cart']); ?></span>
                        <?php } ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="about-header">
        <div class="container">
            <h1>About Balaji Enterprise</h1>
            <p>Empowering the agricultural community with top-tier farming equipment, seeds, and fertilizers.</p>
        </div>
    </div>

    <section class="about-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1592982537447-6f2a6a0c5c13?q=80&w=1000&auto=format&fit=crop" alt="Farming" class="about-img">
                </div>
                <div class="col-md-6 about-text pl-md-5">
                    <h2>Our Story</h2>
                    <p>Welcome to <strong>Balaji Enterprise</strong>, your trusted partner in modern agriculture. Based in the heart of Rajkot, Gujarat, we have built our foundation on a deep respect for the farming community and a commitment to agricultural growth.</p>
                    <p>We understand that farming is more than just a job; it is a way of life. That is why we dedicate ourselves to providing only the highest quality seeds, durable machinery, and effective fertilizers. Whether you are managing a large-scale agricultural operation or nurturing a local farm, we are here to support your journey from seed to harvest.</p>
                    <a href="product.php" class="btn text-white mt-3" style="background: #1e8b40; padding: 10px 30px; font-weight: 500;">Explore Our Shop</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bh-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h3 style="font-weight: 800; color: #1e8b40; margin-bottom: 20px;">FARM<span style="color: #ff9800;">SHOP</span></h3>
                    <p style="color: #aaa; font-size: 14px; line-height: 1.6;">India's leading Agri Digital Platform, transforming the agriculture value chain from pre-harvest to post-harvest.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Shop Products</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="cart.php">Shopping Cart</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <div class="contact-info"><i class="fas fa-map-marker-alt"></i> Rajkot, Gujarat, India</div>
                    <div class="contact-info"><i class="fas fa-envelope"></i> haritramani10@gmail.com</div>
                    <div class="contact-info mt-3"><strong>Balaji Enterprise</strong></div>
                </div>
            </div>
            <div class="footer-bottom">&copy; <?php echo date("Y"); ?> Balaji Enterprise. All Rights Reserved. Student Project.</div>
        </div>
    </footer>
    
</body>
</html>