<?php include '../../view/header_admin.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<?php if (!isset($product_order_count)) {
    $product_order_count = 0;
} ?>
<main>
    <div id="admin_div">
        <h1>Product Manager - View Product</h1><hr>

        <!-- display product -->
<?php include '../../view/product.php'; ?>

        <!-- display buttons -->
        <br>
        <div id="edit_and_delete_buttons">
            <form action="." method="post" id="edit_button_form" >
                <input type="hidden" name="action" value="show_add_edit_form">
                <input type="hidden" name="product_id"
                       value="<?php echo $product['productID']; ?>">
                <input type="hidden" name="category_id"
                       value="<?php echo $product['categoryID']; ?>">

                <input id="non-underline-links_admin_l" type="submit" value="Edit Product">

            </form>

<?php if ($product_order_count == 0) { ?>
                <form action="." method="post" id="delete_button_form" >
                    <input id="non-underline-links_admin_l"  type="hidden" name="action" value="delete_product">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input id="non-underline-links_admin_l"  type="submit" value="Delete Product">
                    <hr>
                </form>
<?php  } ?>
        </div>
        <div id="image_manager">
            <h1>Image Manager</h1><hr>
            <form action="." method="post" enctype="multipart/form-data" id="upload_image_form">
                <input type="hidden" name="action" value="upload_image">
                <input id="non-underline-links_admin_xl" type="file" name="file1"><br>
                <input type="hidden" name="product_id"
                       value="<?php echo $product['productID']; ?>">
                <input id= "non-underline-links_admin_l" type="submit" value="Upload Image">
            </form>
            <p><a href="../../images/<?php echo $product['productCode']; ?>.png">
                    View large image</a></p>
            <p><a href="../../images/<?php echo $product['productCode']; ?>_s.png">
                    View small image</a></p>
        </div>
    </div>
</main>
<?php include '../../view/footer.php'; ?>