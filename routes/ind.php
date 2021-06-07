<?php
require_once( "inc/funcions.php" );
$shop_url = $_GET['shop'];
$access_token = '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';

header('location: install.php?shop=' .$shop_url);
exit();
?>
