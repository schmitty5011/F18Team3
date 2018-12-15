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
                <hr>
                <!--Navigation bar added -->
                <div id="nav-div">
                    <a id="non-underline-links" href="<?php echo $app_path . 'admin'; ?>">Admin Home</a>
                    <?php
                    $account_url = $app_path . 'admin/account';
                    $logout_url = $account_url . '?action=logout';

                    if (isset($_SESSION['admin'])) :
                        ?>
                        <a id="non-underline-links" href="<?php echo $account_url; ?>">Admin Account</a> 
                        <a id="non-underline-links" href="<?php echo $logout_url; ?>">Logout </a>
                    <?php else: ?>
                        <a id="non-underline-links" href="<?php echo $account_url; ?>">Admin Login/Register</a>
                    <?php endif; ?>

                    <hr>

                </div>
            </div>
        </header>
