<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Product</h1>
    <form action="../product_manager" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />

        <label>Category:</label>
        <label for="category">
            <select id="category" name="category_id">
            <?php if (isset($categories)) foreach ( $categories as $category ) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </label>
        <br />

        <label>Code:</label>
        <label>
            <input type="text" name="code" />
        </label>
        <br />

        <label>Name:</label>
        <label>
            <input type="text" name="name" />
        </label>
        <br />

        <label>List Price:</label>
        <label>
            <input type="text" name="price" />
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br />  <br />
    </form>
    <p><a href="../product_manager?action=list_products">View Product List</a></p>

</div>
<?php include '../view/footer.php'; ?>