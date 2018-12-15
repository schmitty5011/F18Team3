<?php include 'view/header_admin.php'; ?>
<?php include 'view/sidebar_admin.php'; ?>
<main>
    <div id="admin_div">
        <h1>Outstanding Orders</h1><hr>
        <?php if (count($new_orders) > 0) : ?>
            <ul>
                <?php
                foreach ($new_orders as $order) :
                    $order_id = $order['orderID'];
                    $order_date = strtotime($order['orderDate']);
                    $order_date = date('M j, Y', $order_date);
                    $url = $app_path . 'admin/orders' .
                            '?action=view_order&amp;order_id=' . $order_id;
                    ?>
                    <li>
                        <a id="non-underline-links_admin" href="<?php echo $url; ?>">Order # 
                        <?php echo $order_id; ?></a> for
                            <?php echo $order['firstName'] . ' ' .
                            $order['lastName'];
                            ?> placed on
                    <?php echo $order_date; ?><hr>
                    </li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <hr><p>There are no shipped orders.</p>
        <?php endif; ?>
        <hr><h1>Shipped Orders</h1><hr>
            <?php if (count($old_orders) > 0) : ?>
            <ul>
                <?php
                foreach ($old_orders as $order) :
                    $order_id = $order['orderID'];
                    $order_date = strtotime($order['orderDate']);
                    $order_date = date('M j, Y', $order_date);
                    $url = $app_path . 'admin/orders' .
                            '?action=view_order&amp;order_id=' . $order_id;
                    ?>
                    <li>
                        <a id="non-underline-links_admin" href="<?php echo $url; ?>">Order #
                        <?php echo $order_id; ?></a> for
                    <?php echo htmlspecialchars($order['firstName']) . ' ' .
                    htmlspecialchars($order['lastName']);
                    ?> placed on
                <?php echo $order_date; ?><hr>
                    </li>
            <?php endforeach; ?>
            </ul>
<?php else: ?>
            <hr><p>There are no shipped orders.</p>
<?php endif; ?>
    </div>
</main>
<?php include 'view/footer.php'; ?>