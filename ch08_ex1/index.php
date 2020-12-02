<?php

if (isset($_POST['type'])) {
	$customer_type = $_POST['type'];
} else {
	$customer_type = '';
}

if (isset($_POST['subtotal'])) {
	$invoice_subtotal = $_POST['subtotal'];
} else {
	$invoice_subtotal = 0;
}
switch (strtoupper($customer_type)) {
	case 'R':
		// discount percent if customer type is R
		if ($invoice_subtotal < 100)
			$discount_percent = .0;
		else if ($invoice_subtotal >= 250 && $invoice_subtotal < 500)
			$discount_percent = .25;
		else if ($invoice_subtotal >= 500)
			$discount_percent = .30;
		break;
	case 'C':
		// discount percent if customer type is C
		$discount_percent = .20;
		break;
	case 'T':
		// discount percent if customer type is T
		if ($invoice_subtotal < 500)
			$discount_percent = .40;
		else $discount_percent = .50;
		break;
	default:
		$discount_percent = .10;
}

$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';