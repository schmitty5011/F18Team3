<aside>
    <!-- Removed links from sidebar -->
    <!--
    <h2>Links</h2>
    <ul>
        <li>
            <a href="<//?php echo $app_path . 'cart'; ?>">View Cart</a>
        </li>
            <//?php
            // Check if user is logged in and
            // display appropriate account links
            $account_url = $app_path . 'account';
            $logout_url = $account_url . '?action=logout';
            if (isset($_SESSION['user'])) :
            ?>
                <li><a href="<//?php echo $account_url; ?>">My Account </a></li>
                <li><a href="<//?php echo $logout_url; ?>">Logout</a>
            <//?php else: ?>
                <li><a href="<//?php echo $account_url; ?>">Login/Register</a></li>
            <//?php endif; ?>
        <li>
            <a href="<//?php echo $app_path; ?>">Home</a>
        </li>
    </ul>
    -->
    
    <ul>
    	<h2 style="text-align:center">Categories</h2>
        <!-- display links for all categories -->
        <?php
        require_once('model/database.php');
        require_once('model/category_db.php');

        $categories = get_categories();
        foreach ($categories as $category) :
            $name = $category['categoryName'];
            $id = $category['categoryID'];
            $url = $app_path . 'catalog?category_id=' . $id;
            ?>
            <li id= "sidebar_view">
                <a id="sidebar_a" href="<?php echo $url; ?>">
                    <?php echo htmlspecialchars($name); ?> 
                </a>

            </li>
        <?php endforeach; ?>
    </ul>
	<img style="display: block;margin-left: auto;margin-right: auto;width: 50%;" src="<?php echo $app_path ?>./images/guitarGif.gif" alt ='guitar gif' >
    <!-- Removed this temp link code 
    <h2>Temp Link</h2>
     <ul>
         <li>
    <!-- This link is for testing only.
         Remove it from a production application. -->
    <!-- <a href="<//?php echo $app_path; ?>admin">Admin</a>
 </li>        
</ul> -->
</aside>
