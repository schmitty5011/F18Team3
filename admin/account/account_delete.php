<?php include 'view/header_admin.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <div id="admin_div">
        <h1>Delete Account</h1>
        <p>Are you sure you want to delete the account for
            <?php
            echo htmlspecialchars($last_name) . ', ' .
            htmlspecialchars($first_name) .
            ' (' . htmlspecialchars($email) . ')';
            ?>?</p>
        <form action="." method="post">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="admin_id"
                   value="<?php echo $admin_id; ?>">
            <input id="non-underline-links_admin_l" type="submit" value="Delete Account">

        </form>
        <form action="." method="post">
            <input id="non-underline-links_admin_l" type="submit" value="Cancel">
        </form>
    </div>
</main>
<?php include 'view/footer.php'; ?>