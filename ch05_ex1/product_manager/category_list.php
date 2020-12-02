<?php include '../view/header.php'; ?>
    <div id="main">

        <h1 class="top">Category List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>&nbsp;</th>
            </tr>
            <!-- add categories table here -->
            <tbody>
			<?php if (isset($categories)) foreach ($categories as $category) : ?>
                <tr>
                    <td><?php if (isset($category)) echo $category['categoryName'] ?></td>
                    <td>
                        <form action="../product_manager" method="post">
                            <input name="action" type="hidden" value="delete_category">
                            <label>
                                <input name="category_id" type="hidden" value="<?php echo $category['categoryID']?>">
                            </label>
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
			<?php endforeach; ?>
            </tbody>

        </table>
        <br />

        <h2>Add Category</h2>
        <!-- add form for adding a category here -->
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

        <form action="../product_manager" method="post">
            <label>
                <input name="action" type="hidden" value="add_category">
                <input name="category_name" type="text">
            </label>
            <input type="submit" value="Add">
        </form>

        <p><a href="../product_manager?action=list_products">List Products</a></p>

    </div>
<?php include '../view/footer.php'; ?>