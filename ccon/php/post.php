<?php
require 'shopify_api.php';

header("Content-Type:application/json");

$api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
$prod_obj_url = $api_url . '/admin/products.json';
$prod_count_url = $api_url.'/admin/products/count.json';
$prod_img = $api_url.'/admin/products/image.json';

$prod_content = @file_get_contents($prod_obj_url);
$count_content = @file_get_contents($prod_count_url);


$prod_json = json_decode($prod_content, true);
$count_json = json_decode($count_content, true);

$prod=$prod_json['products'];

echo $count_json['count'];

?>
