<?php
require 'shopify_api.php';

header("Content-Type:application/json");

$api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
$prod_obj_url = $api_url . '/admin/products.json';
$prod_img = $api_url.'/admin/products/8552474118/images.json';


$product=array("images"=>array( array ("src"=>'http://www.cconmausa.com/prdimg/0912170010_M1.jpg')));
    //array(array('src' =>'http:\/\/www.cconmausa.com\/prdimg\/0912170010_M1.jpg'));

$ch = curl_init($api_url.'/admin/products/8552474118/images.json');
$data_string = json_encode(array('product'=>$product));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'ContentLength: ' . strlen($data_string))
);

$http_response = curl_exec ($ch);
print_r($http_response);

?>
