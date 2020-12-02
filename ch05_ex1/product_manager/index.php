<?php
	session_start();
	require('../model/database.php');
	require('../model/product_db.php');
	require('../model/category_db.php');

	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'list_products';
	}
	
	switch ($action) {
		case 'list_products':
			// Get the current category ID

			if (!isset($category_id)) {
				if (isset($_GET[''])) {
					$category_id = $_GET['category_id'];
				} else {
					$category_id = 1;
				}
			}
			
			// Get product and category data
			$category_name = get_category_name($category_id);
			$categories = get_categories();
			$products = get_products_by_category($category_id);
			
			// Display the product list
			include('product_list.php');
			break;
		case 'delete_product':
			// Get the IDs
			$product_id = $_POST['product_id'];
			$category_id = $_POST['category_id'];
			
			// Delete the product
			delete_product($product_id);
			
			$_SESSION['message'] = 'Product removed successfully';
			
			// Display the Product List page for the current category
			header("Location: ../product_manager?category_id=$category_id");
			break;
		case 'show_add_form':
			$categories = get_categories();
			include('product_add.php');
			break;
		case 'add_product':
			$category_id = $_POST['category_id'];
			$code = $_POST['code'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			
			// Validate the inputs
			if (empty($code) || empty($name) || empty($price)) {
				$error = "Invalid product data. Check all fields and try again.";
				include('../errors/error.php');
			} else {
				add_product($category_id, $code, $name, $price);
				$_SESSION['message'] = 'Product added successfully';
				
				// Display the Product List page for the current category
				header("Location: ../product_manager?category_id=$category_id");
			}
			break;
		case 'list_categories':
			$categories = get_categories();
			include('category_list.php');
			break;

		case 'add_category':
			$category_name = $_POST['category_name'];

			// add category
			if (empty($category_name)) {
				$error = 'Failed to add category.';
				include('../errors/error.php');
			} else {
				add_category($category_name);
				$_SESSION['message'] = 'Category added successfully';
				header('Location: ../product_manager?action=list_categories');
				$category_name = get_category_name($category_id);
			}
			break;
		case 'delete_category':
			$category_id = $_POST['category_id'];

			// delete category
			delete_category($category_id);
			$_SESSION['message'] = 'Category removed successfully';
			header('Location: ../product_manager?action=list_categories');
			break;
		default:
			// Get the current category ID
			if (!isset($category_id)) {
				if (isset($_GET['category_id'])) {
					$category_id = $_GET['category_id'];
				} else {
					$category_id = 1;
				}
			}
			
			// Get product and category data
			$category_name = get_category_name($category_id);
			$categories = get_categories();
			$products = get_products_by_category($category_id);
			
			// Display the product list
			include('product_list.php');
			break;
	}