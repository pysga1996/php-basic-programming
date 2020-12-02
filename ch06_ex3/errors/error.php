<?php include '../view/header.php'; ?>
<div id="main">
    <h1 class="top">Error</h1>
    <p><?php if (isset($error)) echo $error; ?></p>
</div>
<?php include '../view/footer.php'; ?>