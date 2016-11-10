<?php
$baseUrl = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com/admin/';
echo "1";
$product =
    array('title' => 'My New Product',
        'body_html' => 'My New Product Description',
        'vendor'=> 'My Product Vendor',
        'product_type'=> 'My Product Type',
        'variants' => array(
            array('option1' => 'Default',
                'price' => '100.00',
                'sku' => 'ABC123',
                'inventory_quantity'=> '999',
                'inventory_management' => 'shopify',
                'taxable' => true,
                'requires_shipping' => true
            )
        )
    );
$ch = curl_init($baseUrl.'products.json'); //set the url
$data_string = json_encode(array('product'=>$product)); //encode the product as json
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  //specify this as a POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //set the POST string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //specify return value as string
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
); //specify that this is a JSON call
$server_output = curl_exec ($ch); //get server output if you wish to error handle / debug
curl_close ($ch); //close the connection
  ?>