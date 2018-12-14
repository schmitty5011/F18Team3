<!DOCTYPE html>
<html>

    <!-- the head section -->
    <head>
        <link rel="shortcut icon" href="<?php echo $app_path ?>./images/siteLogo.png" />
        <title>My Guitar Shop</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $app_path ?>main.css">
    </head>

    <body>
        <header>
            <div id="header-div">
                <img id="header-img" src="<?php echo $app_path ?>./images/siteLogo.png" alt ='header logo' >
                <span id="header-span">
                    My Guitar Shop
                </span>
                <span id="header-span2">
                    "The Amazon of musical instruments"!
                </span>
            </div>
            <hr>
            <!--Navigation bar added -->
            <div id="nav-div">
                <a id="non-underline-links" href="<?php echo $app_path; ?>">Home</a>
                <a id="non-underline-links" href="/612_HW_5/admin/account">Admin Login</a>
                <?php
                $account_url = $app_path . 'account';
                $logout_url = $account_url . '?action=logout';
                if (isset($_SESSION['user'])) :
                    ?>
                    <a id="non-underline-links" href="<?php echo $account_url; ?>">My Account</a> 
                    <a id="non-underline-links" href="<?php echo $logout_url; ?>">Logout </a>
                <?php else: ?>
                    <a id="non-underline-links" href="<?php echo $account_url; ?>">Login/Register</a>
                <?php endif; ?>
                <a id="non-underline-links" href="<?php echo $app_path . 'cart'; ?>">
                    <img id="cart-logo" src="<?php echo $app_path ?>./images/shoppingCart.png" alt ='header logo'>
                </a>

            </div>
        </header>
