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
            <div style="background: #000; border: solid 2px #66ff33;">
                <img src="<?php echo $app_path ?>./images/siteLogo.png" alt ='header logo' style = "vertical-align:middle;width:78px;height:68px;">
                <span style="letter-spacing: 2px;font-size: 50px; color: #66ff33; font-family: American Typewriter, serif; vertical-align:middle; margin-left: 10px">
                    My Guitar Shop
                </span>
                <span style="font-style: italic;font-size: 20px; color: #ff9900; font-family: Optima, sans-serif; vertical-align:middle; margin-left: 10px">
                    "The Amazon of musical instruments"!
                </span>
            </div>
            <hr>
            <!--Navigation bar added -->
            <div style="text-align: right;">
                <a style="text-decoration: none" href="<?php echo $app_path; ?>">Home&nbsp; &nbsp;</a>
                <?php
                $account_url = $app_path . 'account';
                $logout_url = $account_url . '?action=logout';
                if (isset($_SESSION['user'])) :
                    ?>
                    <a style="text-decoration: none" href="<?php echo $account_url; ?>">My Account&nbsp; &nbsp;</a>
                    <a style="text-decoration: none" href="<?php echo $logout_url; ?>">Logout&nbsp; &nbsp;</a>
                <?php else: ?>
                    <a style="text-decoration: none" href="<?php echo $account_url; ?>">Login/Register&nbsp; &nbsp;</a>
                <?php endif; ?>
                <a style="text-decoration: none;" href="<?php echo $app_path . 'cart'; ?>">
                    Cart<img src="<?php echo $app_path ?>./images/shoppingCart.png" alt ='header logo' style = "margin-right: 2px;padding: 1px; vertical-align:middle;width:25px;height:25px;">

                </a>

            </div>
        </header>
