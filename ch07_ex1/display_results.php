<?php
	// get the data from the form
	$email = $_POST['email'];
	
	// get the rest of the data for the form
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	
	if (isset($_POST['phone'])) {
		$phone_number = $_POST['phone'];
	}
	
	if (isset($_POST['heard_from'])) {
		$heard_from = $_POST['heard_from'];
	} else {
		$heard_from = 'unknown';
    }
	
	$wants_updates = isset($_POST['wants_updates']) ? 'yes' : 'no';
	
	$contact_via = $_POST['contact_via'];
	
	$comments = $_POST['comments'];
	
	// for the heard_from radio buttons,
	// display a value of 'Unknown' if the user doesn't select a radio button
	
	// for the wants_updates check box,
	// display a value of 'Yes' or 'No'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
<div id="content">
    <h1>Account Information</h1>

    <label>Email Address:</label>
    <span><?php echo htmlspecialchars($email); ?></span><br />

    <label>Password:</label>
    <span><!-- add PHP code here--><?php if (isset($password)) echo htmlspecialchars($password) ?></span><br />

    <label>Phone Number:</label>
    <span><?php if (isset($phone_number)) echo htmlspecialchars($phone_number) ?></span><br />

    <label>Heard From:</label>
    <span><?php echo htmlspecialchars($heard_from) ?></span><br />

    <label>Send Updates:</label>
    <span><?php if (isset($wants_updates)) echo htmlspecialchars($wants_updates) ?></span><br />

    <label>Contact Via:</label>
    <span><?php if (isset($contact_via)) echo htmlspecialchars($contact_via) ?></span><br /><br />

    <span>Comments:</span><br />
    <span><?php if (isset($comments)) echo htmlspecialchars($comments) ?></span><br />

    <p>&nbsp;</p>
</div>
</body>
</html>