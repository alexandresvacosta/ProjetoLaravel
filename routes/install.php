<?php

$shop = $_GET['shop'];
$api_key ="269a1ec67dfdd434dfc8622a0ed77768";
$scopes = "read_ordens,write_products";
$redirect_uri = "https://adfcf17a88a8.ngrok.io/_Shopify/index.php/token.php ";

$install_url = "https://" . $shop . "/admin/oauth/authorize?client_ide=" . $api_key . "&scope=" . $escopes . "&redirect_uri=" . urlencode($redirect_uri);

header("Location: " $install_url);
die();