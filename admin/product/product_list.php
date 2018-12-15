<?php include '../../view/header_admin.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <div id="admin_div">
        <h1 class="top">Product Manager - List Products</h1>
        <p>To view, edit, or delete a product, select the product.</p>
        <p>To add a product, select the "Add Product" link.</p>

        <?php if (count($products) == 0) : ?>

            <p>There are no products for this category.</p>
        <?php else : ?>
            <hr><h1>
                <?php echo htmlspecialchars($current_category['categoryName']); ?>
            </h1>
            <?php foreach ($products as $product) : ?>
                <p>
                    <a href="?action=view_product&amp;product_id=<?php echo $product['productID']; ?>">
                       <?php echo htmlspecialchars($product['productName']); ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
        <hr><h1>Links</h1>
        <p><a href="index.php?action=show_add_edit_form">Add Product</a></p>
    </div>
</main>
<?php include '../../view/footer.php'; ?>