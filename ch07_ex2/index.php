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
                <select name="investment">
                    <?php for ($v = 10000; $v <= 50000; $v += 10000) : ?>
                        <option value="<?php echo $v ?>"><?php echo $v ?></option>
                    <?php endfor; ?>
                </select>
            </label>
            <br />

            <label>Yearly Interest Rate:
                <select name="interest_rate">
		            <?php for ($v = 4; $v <= 12; $v += 0.5) : ?>
                        <option value="<?php echo $v ?>"><?php echo $v ?></option>
		            <?php endfor; ?>
                </select>
            </label>
            <br />

            <label>Number of Years:
                <input type="text" name="years" value="<?php if (isset($years)) echo $years; ?>"/>
            </label>
            <br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>