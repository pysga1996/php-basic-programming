<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p>Error message: <?php if (isset($error_message)) {
		    echo $error_message;
	    } ?></p>
    <p>&nbsp;</p>
</div><!-- end main -->
<?php include '../view/footer.php'; ?>