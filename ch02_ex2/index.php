<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
<div id="content">
    <?php
    $investment = 0;
    $interest_rate = 0;
    $years = 0;
    ?>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label for="investment">Investment Amount:</label>
            <input id="investment" type="text" name="investment" value="<?php echo $investment; ?>"/><br/>

            <label for="interest_rate">Yearly Interest Rate:</label>
            <input id="interest_rate" type="text" name="interest_rate" value="<?php echo $interest_rate; ?>"/><br/>

            <label for="years">Number of Years:</label>
            <input id="years" type="text" name="years" value="<?php echo $years; ?>"/><br/>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
</div>
</body>
</html>