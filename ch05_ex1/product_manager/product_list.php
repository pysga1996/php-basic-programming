<?php include '../view/header.php'; ?>
 
<div id="main">

    <h1>Product List</h1>

    <div id="sidebar">
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <ul class="nav">
        <?php if (isset($categories)) foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <div id="content">
        <!-- display a table of products -->
        <h2><?php if (isset($category_name)) echo $category_name; ?></h2>
		<?php if (isset($_SESSION['message'])) : ?>
            <span id="message"><?php echo $_SESSION['message'] ?></span>
            <script type="text/javascript">
                const message = setTimeout(() => {
                    document.getElementById('message').style.display = 'none';
                    clearTimeout(message);
					<?php unset($_SESSION['message']) ?>
                }, 1500);
            </script>
		<?php endif; ?>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php if (isset($products)) foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="../product_manager" method="post">
                    <input type="hidden" name="action"
                           value="delete_product" />
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>" />
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>
        <p><a href="?action=list_categories">List Categories</a></p>
    </div>

</div>
<?php include '../view/footer.php'; ?>