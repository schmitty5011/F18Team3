<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<main>
    <h1><?php echo htmlspecialchars($category_name); ?></h1>
    <?php if (count($products) == 0) : ?>
        <p>There are no products in this category.</p>
        <?php
    else:

        foreach (array_chunk($products, 2) as $product) {
            ?>
            <table id="table-catalog">
                <?php
                foreach ($product as $item) {
                    $image_filename = $item['productCode'] . '_m.png';
                    $image_path = $app_path . 'images/' . $image_filename;
                    $image_alt = 'Image filename: ' . $image_filename;
                    ?>
                    <td id="product_image_col">

                        <img id="catalog-image" src='<?php echo $image_path; ?>'
                             alt="<?php echo $image_alt; ?>" />
                        <a  style="display:block" href="<?php echo '?product_id=' . $item['productID']; ?>">

            <?php echo htmlspecialchars($item['productName']) . ' (Click for details)'; ?>   
                        </a>
                        <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
                            <input type="hidden" name="action" value="add" />
                            <input type="hidden" name="product_id" value="<?php echo $item['productID']; ?>" /> 
                            <b >Quantity:</b>&nbsp;
                            <input type="text" name="quantity" value="1" size="2" />
                            <input id = "non-underline-links" type="submit" value="Add to Cart" />
                        </form>
                    </td>
            <?php } ?>
            </table>
    <?php };
endif; ?>
</main>
<?php
include '../view/footer.php';
?>