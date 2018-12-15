<?php include 'view/header_admin.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <div id="admin_div">
        <h1>Admin Login</h1>
        <form action="." method="post" id="login_form">
            <input type="hidden" name="action" value="login">

            <label>E-Mail:</label>
            <input type="text" name="email"
                   value="<?php echo htmlspecialchars($email); ?>" size="30">
            <?php echo $fields->getField('email')->getHTML(); ?><br>

            <label>Password:</label>
            <input type="password" name="password" size="30">
            <?php echo $fields->getField('password')->getHTML(); ?><br>


            <input  id="non-underline-links_admin" type="submit" value="Login">
            <?php if (!empty($password_message)) : ?>         
                <span class="error">
                    <?php echo htmlspecialchars($password_message); ?>
                </span><br>
            <?php endif; ?>
        </form>
    </div>
</main>
<?php include 'view/footer.php'; ?>