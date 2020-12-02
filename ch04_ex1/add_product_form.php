<?php
	require('database.php');
	$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
	$categories = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<div id="page">
    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label for="categories">Category:</label>
            <select id="categories" name="category_id">
				<?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
						<?php echo $category['categoryName']; ?>
                    </option>
				<?php endforeach; ?>
            </select>
            <br />

            <label>Code:</label>
            <label for="code">
                <input id="code" type="text" name="code" />
            </label>
            <br />

            <label>Name:</label>
            <label for="name">
                <input id="name" type="text" name="name" />
            </label>
            <br />

            <label>List Price:</label>
            <label for="price">
                <input id="price" type="text" name="price" />
            </label>
            <br />

            <label>&nbsp;</label>
            <input type="submit" value="Add Product" />
            <br />
        </form>
        <p><a href="index.php">View Product List</a></p>
    </div><!-- end main -->

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.
        </p>
    </div>

</div><!-- end page -->
</body>
</html>