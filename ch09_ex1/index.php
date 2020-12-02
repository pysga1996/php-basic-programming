<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
	    if (empty($name)) {
	    	$message = 'You must enter a name.';
	    	break;
	    }
        // 2. display the name with only the first letter capitalized
		$name = strtolower($name);
	    $name = ucwords($name);
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
	    if (empty($email)) {
		    $message = 'You must enter an email address.';
		    break;
	    }
        // 2. make sure the email address has at least one @ sign and one dot character
	    else if (strpos($email, '@') === false) {
		    $message = 'The email address must contain an @ sign.';
		    break;
	    } else if (strpos($email, '@') === false) {
		    $message = 'The email address must contain a dot character.';
		    break;
	    }

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
	    $phone = str_replace('-', '', $phone);
	    $phone = str_replace('(', '', $phone);
	    $phone = str_replace(')', '', $phone);
	    $phone = str_replace(' ', '', $phone);
	    if (strlen($phone) < 7) {
		    $message = 'The phone number must contain at least seven digits.';
		    break;
	    }
        // 2. format the phone number like this 123-4567 or this 123-456-7890
		if (strlen($phone) === 7) {
			$part1 = substr($phone, 0, 3);
			$part2 = substr($phone, 3);
			$phone = $part1 . '-' . $part2;
		} else {
			$part1 = substr($phone, 0, 3);
			$part2 = substr($phone, 3, 3);
			$part3 = substr($phone, 6);
			$phone = $part1 . '-' . $part2 . '-' . $part3;
		}
        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "Hello $name,\n" .
	        "Thank you for entering this data:\n" .
	        "Name: $name,\n" .
	        "Email: $email,\n" .
            "Phone: $phone.";
        break;
}
include 'string_tester.php';