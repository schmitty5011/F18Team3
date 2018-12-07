<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<main>
    <div id="login_form">
    <h1>Login</h1>
    <form action="." method="post" id="login_form">
        <input type="hidden" name="action" value="login">
        
        <label>E-Mail:</label>
        <input type="text" name="email"
               value="<?php echo htmlspecialchars($email); ?>" size="30">
        <?php echo $fields->getField('email')->getHTML(); ?><br>

        <label>Password:</label>
        <input type="password" name="password" size="30">
        <?php echo $fields->getField('password')->getHTML(); ?><br>


        <input  id="non-underline-links"  type="submit" value="Login">
        <?php if (!empty($password_message)) : ?>         
        <span class="error"><?php echo htmlspecialchars($password_message); ?></span><br>
        <?php endif; ?>
    </form>
    
    <div style="text-align: left; border: solid 2px white; margin-top: 5px; padding:5px">
    <h1>Register</h1>
    <form action="." method="post">
        <input type="hidden" name="action" value="view_register">
        <input  id="non-underline-links"  type="submit" value="Register">
    </form>
    </div>
    </div>
</main>
<?php include '../view/footer.php'; ?>
