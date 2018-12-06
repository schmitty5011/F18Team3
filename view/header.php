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
            <div style="text-align: right;">
                <a id="non-undeline-links" href="<?php echo $app_path; ?>">Home&nbsp; &nbsp;</a>
                <?php
                $account_url = $app_path . 'account';
                $logout_url = $account_url . '?action=logout';
                if (isset($_SESSION['user'])) :
                    ?>
                    <a id="non-undeline-links" href="<?php echo $account_url; ?>">My Account&nbsp; &nbsp;</a>
                    <a id="non-undeline-links" href="<?php echo $logout_url; ?>">Logout&nbsp; &nbsp;</a>
                <?php else: ?>
                    <a id="non-undeline-links" href="<?php echo $account_url; ?>">Login/Register&nbsp; &nbsp;</a>
                <?php endif; ?>
                <a id="non-undeline-links" href="<?php echo $app_path . 'cart'; ?>">
                    Cart<img id="cart-logo" src="<?php echo $app_path ?>./images/shoppingCart.png" alt ='header logo'>
                </a>

            </div>
        </header>
