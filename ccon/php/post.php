<?php
require 'shopify_api.php';

header("Content-Type:application/json");

$api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
$prod_obj_url = $api_url . '/admin/products.json';
$link = mysqli_connect('211.108.60.110', 'cconmausa_dev', '#zoq6ton', 'cconma_DEV');

if($result = mysqli_query($link, 'SELECT * FROM ez_content', MYSQLI_USE_RESULT)){

    $product = array();
    while($row = mysqli_fetch_object($result)){
        $product=array('title' =>$row->idx,
            'body_html' => $row->type,
            'vendor' => $row->isuse,
            'product_type' =>  $row->scroll,
            'variants' => array(
                array('option1' => 'Defau',
                    'price' => '100.00',
                    'sku' => 'ABC123',
                    'inventory_quantity' =>'999',
                    'inventory_management' => 'shopify',
                    'taxable' => true,
                    'requires_shjpping' => true
                )
            ));
        echo json_encode($product);

        $ch = curl_init($api_url.'/admin/products.json');
        $data_string = json_encode(array('product'=>$product));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );
        $server_output = curl_exec ($ch);
    }
}
curl_close ($ch);
?>
