<?php include '../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
        <ul class="nav">
            <!-- display links for all categories -->
            <?php if (isset($categories)) foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div id="content">
        <h1 class="top"><?php if (isset($category_name)) echo $category_name; ?></h1>
        <?php if (isset($products) && count((array) $products) == 0) : ?>
            <p>There are no products in this category.</p>
        <?php else: ?>
        <ul class="nav">
            <?php if (isset($products)) foreach ($products as $product) : ?>
            <li>
                <a href="?action=view_product&product_id=<?php
                          echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php include '../view/footer.php'; ?>