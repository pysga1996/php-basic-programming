<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Date Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
        <h1>Date Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data"/>

        <label>Invoice Date:
            <input type="text" name="invoice_date" value="<?php echo htmlspecialchars($invoice_date_s); ?>"/>
        </label>
        <br />

        <label>Due Date:
            <input type="text" name="due_date" value="<?php echo htmlspecialchars($due_date_s); ?>"/>
        </label>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />

        </form>
        <h2>Message:</h2>
        <?php if (isset($message) && !empty($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php else : ?>
        <table cellspacing="5px">
            <tr>
                <td>Invoice date:</td>
                <td><?php if (isset($invoice_date_f)) echo $invoice_date_f; ?></td>
            </tr>
            <tr>
                <td>Due date:</td>
                <td><?php if (isset($due_date_f)) echo $due_date_f; ?></td>
            </tr>
            <tr>
                <td>Current date:</td>
                <td><?php if (isset($current_date_f)) echo $current_date_f; ?></td>
            </tr>
            <tr>
                <td>Current time:</td>
                <td><?php if (isset($current_time_f)) echo $current_time_f; ?></td>
            </tr>
            <tr>
                <td>Due date message:</td>
                <td><?php if (isset($due_date_message)) echo $due_date_message; ?></td>
            </tr>
        </table>
        <?php endif; ?>

    </div>
</body>
</html>