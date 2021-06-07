<?php

require_once("inc/functions.php");

$api_key = "7e11b1c5a237a95556f90cf080e9308a";
$shared_secret = "4e788173c35d04421ab4793044be622f";
$params = $_GET;
$hmac = $_GET['hmac'];

$params = array_diff_key($params, array('hmac => ''));
ksort($params);

$computed_hmac = has_hmac('sha256', http_build_query($parms), $shared_secret);

if (hash_equals($hmac, $computed_hmac)) {

    $query = array(
        "client_id" => $api_key,
        "client_secret" => $shared_secret,
        "code" => $parms['code']
    );

    $acess_token_url = "https://" . $params['shop'] . "/admin/oauth/acess_token";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOT_URL, $acess_token_url);
    curl_setopt($ch, CURLOT_POST, count($query));
    curl_setopt($ch, CURLOT_POSTFIELDS, http_build_query($query));
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json.decode($result, true);
    $acess_token = $result['acess_token'];

    echo $acess_token;

    healder("Location: https://" .$params['shop'] . "/admin/apps");
    exit();

}else{
    die('This request is NOT from _Shopify!');
}


