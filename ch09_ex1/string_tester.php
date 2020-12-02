<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
        <h1>String Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data"/>

        <label>Name:
            <input type="text" name="name" value="<?php if (isset($name)) echo htmlspecialchars($name); ?>"/>
        </label>
        <br />

        <label>E-Mail:
            <input type="text" name="email" value="<?php if (isset($email)) echo htmlspecialchars($email); ?>"/>
        </label>
        <br />

        <label>Phone Number:
            <input type="text" name="phone" value="<?php if (isset($phone)) echo htmlspecialchars($phone); ?>"/>
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />

        </form>

        <h2>Message:</h2>
        <p><?php if (isset($message)) echo nl2br(htmlspecialchars($message)); ?></p>

    </div>
</body>
</html>