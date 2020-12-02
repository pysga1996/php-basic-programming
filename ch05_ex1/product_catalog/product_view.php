<?php include '../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
        <h1>Categories</h1>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php if(isset($categories)) foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="content">
        <h1><?php if (isset($name)) echo $name; ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php if (isset($image_filename)) echo $image_filename; ?>"
                    alt="<?php if (isset($image_alt)) echo $image_alt; ?>" />
            </p>
        </div>

        <div id="right_column">
            <p><b>List Price:</b> $<?php if (isset($list_price)) echo $list_price; ?></p>
            <p><b>Discount:</b> <?php if (isset($discount_percent)) echo $discount_percent; ?>%</p>
            <p><b>Your Price:</b> $<?php if (isset($unit_price)) echo $unit_price; ?>
                 (You save $<?php if (isset($discount_amount)) echo $discount_amount; ?>)</p>
            <form action="<?php echo '../cart' ?>" method="post">
                <input type="hidden" name="action" value="add" />
                <input type="hidden" name="product_id" value="<?php if (isset($product_id)) echo $product_id; ?>" />
                <b>Quantity:</b>
                <label for="quantity"></label><input id="quantity" type="text" name="quantity" value="1" size="2" />
                <br /><br />
                <input type="submit" value="Add to Cart" />
            </form>
        </div>
    </div>
</div>
<?php include '../view/footer.php'; ?>