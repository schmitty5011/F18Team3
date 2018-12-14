<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <h1 class="top">Product Manager - List Products</h1>
    <p>To view, edit, or delete a product, select the product.</p>
    <p>To add a product, select the "Add Product" link.</p>
    <?php if (count($products) == 0) : ?>
        <p>There are no products for this category.</p>
    <?php else : ?>
        <h1>
            <?php echo htmlspecialchars($current_category['categoryName']); ?>
        </h1>
            <?php foreach ($products as $product) : ?>
        <ul>
            <li><a href="?action=view_product&amp;product_id=<?php
                          echo $product['productID']; ?>">
                    <?php echo htmlspecialchars($product['productName']); ?>
                </a></li>
        </ul>
            <?php endforeach; ?>
    <?php endif; ?>

    <h1>Links</h1>
    <ul><li><a href="index.php?action=show_add_edit_form">Add Product</a></li></ul>

</main>
<?php include '../../view/footer.php'; ?>