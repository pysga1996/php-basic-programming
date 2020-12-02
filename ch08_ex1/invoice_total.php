<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Invoice Total Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div id="content">
    <h1>Invoice Total Calculator</h1>
    <p>Enter the values below and click "Calculate".</p>
    <form action="." method="post">
        <div id="data" >
            <label>Customer Type:
                <input type="text" name="type" value="<?php if (isset($customer_type)) echo $customer_type; ?>"/>
            </label>
            <br />

            <label>Invoice Subtotal:
                <input type="text" name="subtotal" value="<?php if (isset($invoice_subtotal)) echo $invoice_subtotal; ?>"/>
            </label>
            <br />

            <label>Discount Percent:
                <input type="text" disabled="disabled" value="<?php if (isset($percent)) echo $percent; ?>" />%
            </label>
            <br />

            <label>Discount Amount:
                <input type="text" disabled="disabled" value="<?php if (isset($discount)) echo $discount; ?>" />
            </label>
            <br />

            <label>Invoice Total:
                <input type="text" disabled="disabled" value="<?php if (isset($total)) echo $total; ?>" />
            </label>
            <br />
        </div>
        <div id="buttons" >
            <label>&nbsp;</label>
            <input type="submit" value="Calculate" id="calculate_button" /><br />
        </div>
    </form>

</div>
</body>
</html>