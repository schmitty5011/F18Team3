<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>
<main>
    <h1><?php echo htmlspecialchars($category_name); ?></h1>
    <?php if (count($products) == 0) : ?>
        <p>There are no products in this category.</p>
        <?php
    else:
        foreach ($products as $product) :
            $image_filename = $product['productCode'] . '_m.png';
            $image_path = $app_path . 'images/' . $image_filename;
            $image_alt = 'Image filename: ' . $image_filename;
            ?>
            <table id="category_table">
                <tr> 
                    <td>
                        <img id="catalog-image" src="<?php echo $image_path; ?>"
                             alt="<?php echo $image_alt; ?>" />
                    </td>
                    <td>
                        <a  href="<?php echo '?product_id=' . $product['productID']; ?>">
                            <?php echo htmlspecialchars($product['productName']); ?>
                        </a>
                    </td>
                </tr>
            </table>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
<?php
include '../view/footer.php';
