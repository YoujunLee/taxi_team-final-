<?php
require 'shopify_api.php';

header("Content-Type:application/json");

$api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
$prod_obj_url = $api_url . '/admin/products.json';

$product=0;
$id = $_POST['id'];

$ch = curl_init($api_url.'/admin/products/'.$id.'.json');
$data_string = json_encode(array('product'=>$product));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$server_output = curl_exec ($ch);

curl_close ($ch);
?>
