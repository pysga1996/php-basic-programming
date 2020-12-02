<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:
                <input type="text" name="investment"
                       value="<?php if (isset($investment)) echo $investment; ?>"/><br />
            </label>


            <label>Yearly Interest Rate:
                <input type="text" name="interest_rate"
                       value="<?php if (isset($interest_rate)) echo $interest_rate; ?>"/><br />
            </label>


            <label>Number of Years:
                <input type="text" name="years"
                       value="<?php if (isset($years)) echo $years; ?>"/><br />
            </label>

        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>