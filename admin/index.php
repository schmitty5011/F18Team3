<link rel="stylesheet" href="adminCss.css" type="text/css">
<?php 
    require_once('../util/main.php');
    require_once('../util/secure_conn.php');
    require_once('../util/valid_admin.php');
    include 'view/header.php';
    include 'view/sidebar_admin.php';
?>
<main> 
<!--  Original code  <p><a href="product">Product Manager</a></p>
    <p><a href="category">Category Manager</a></p>
    <p><a href="orders">Order Manager</a></p>
    <p><a href="account">Account Manager</a></p>-->
    
    <!--make the menu to a list-->
    <h2>Admin Menu</h2>
    <ul>
        <li ><a href="product">Product Manager</a></li>
        <li ><a href="category">Category Manager</a></li>
        <li ><a href="orders">Order Manager</a></li>
        <li ><a href="account">Account Manager</a></li>
    </ul>
</main>

<?php include 'view/footer.php'; ?>
