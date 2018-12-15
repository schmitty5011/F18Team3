<?php include 'view/header_admin.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <div id="admin_div">
        <h1>Category Manager</h1>
        <table id="category_table">
            <?php foreach ($categories as $category) : ?>
                <tr>
                <form action="." method="post" >
                    <td>
                        <input type="text" name="name"
                               value="<?php echo htmlspecialchars($category['categoryName']); ?>">
                    </td>
                    <td>
                        <input type="hidden" name="action" value="update_category">
                        <input type="hidden" name="category_id"
                               value="<?php echo $category['categoryID']; ?>">
                        <input id="non-underline-links_admin" type="submit" value="Update">
                    </td>
                </form>
                <td>
                    <?php if ($category['productCount'] == 0) : ?>
                        <form action="." method="post" >
                            <input type="hidden" name="action" value="delete_category">
                            <input type="hidden" name="category_id"
                                   value="<?php echo $category['categoryID']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    <?php endif; ?>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Add Category</h2>
        <form action="." method="post" id="add_category_form" >
            <input type="hidden" name="action" value="add_category">
            <input type="text" name="name">
            <input id="non-underline-links_admin" type="submit" value="Add">
        </form>
    </div>
</main>
<?php include 'view/footer.php'; ?>