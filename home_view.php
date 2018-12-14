<?php include 'view/header.php'; ?>
<?php include 'view/sidebar.php'; ?>
<main>
	<div>
    <h1 id="hfont">Featured products</h1>
    <p id="pfont">We have a great selection of musical instruments including
        guitars, basses, and drums. And we're constantly adding more to give
        you the best selection possible!
    </p>
    </div>
    <hr>
    <table>
        <?php
        foreach ($products as $product) :
            // Get product data
            $list_price = $product['listPrice'];
            $discount_percent = $product['discountPercent'];
            $description = $product['description'];

            // Calculate unit price
            $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
            $unit_price = $list_price - $discount_amount;

            // Get first paragraph of description
            $description_with_tags = add_tags($description);
            $i = strpos($description_with_tags, "</p>");
            $first_paragraph = substr($description_with_tags, 3, $i - 3);
            ?>
            <tr>
                <td class="product_image_column" >
                    <img id="product_image_logo" src="images/<?php echo htmlspecialchars($product['productCode']); ?>_m.png"
                         alt="&nbsp;">
                </td>
                <td id="product_desc">
                    <p>
                        <b>
                            <!--<a href="catalog?product_id=<?php echo
            $product['productID'];
            ?>">
                                <?//php echo htmlspecialchars($product['productName']); ?>
                            </a>-->
    <?php echo htmlspecialchars($product['productName']); ?> 
                        </b>
                        <img style="display: inline;width: 30px;height:30px" src="<?php echo $app_path ?>./images/sale.gif" alt ='sale gif'>
                    </p>
                    <p style="color: red">
                        <b><i>Your price:</i></b>
                        $<?php echo number_format($unit_price, 2); ?>
                    </p>
                    <p>
                           <?php echo $first_paragraph; ?>
                        <a style="color: blue;" href="catalog?product_id=<?php echo
                       $product['productID'];
                       ?>"> <br>Click here for details!
                        </a>
                    </p>
                </td>
            </tr>
<?php endforeach; ?>
    </table>
</main>
<?php include 'view/footer.php'; ?>