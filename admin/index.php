<?php
require_once('../util/main.php');
require_once('../util/secure_conn.php');
require_once('../util/valid_admin.php');
include 'view/header_admin.php';
include 'view/sidebar_admin.php';
?>

<main id="main">
    <div id="admin_div">
        <h1>Admin Menu</h1><hr><br>
        <p><a id="non-underline-links" href="product">Product Manager</a></p><br>
        <p><a id="non-underline-links" href="category">Category Manager</a></p><br>
        <p><a id="non-underline-links" href="orders">Order Manager</a></p><br>
        <p><a id="non-underline-links" href="account">Account Manager</a></p>
    </div>
</main>

<?php include 'view/footer.php'; ?>
