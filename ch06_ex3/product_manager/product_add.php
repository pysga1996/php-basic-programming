<?php include '../view/header.php'; ?>
<div id="main">
    <h1 class="top">Add Product</h1>
    <form action="./index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />

        <label>Category:</label>
        <select name="category_id">
        <?php if (isset($categories)) foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Code:
            <input type="input" name="code" />
        </label>
        <br />

        <label>Name:
            <input type="input" name="name" />
        </label>
        <br />

        <label>List Price:
            <input type="input" name="price" />
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br />
    </form>
    <p><a href="index.php?action=list_products">View Product List</a></p>

</div>
<?php include '../view/footer.php'; ?>