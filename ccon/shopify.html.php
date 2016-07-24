<?php
    require './php/shopify_api.php';
    require './php/database.php';
    $api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
    $shop_obj_url = $api_url . '/admin/shop.json';
    $shop_content = @file_get_contents( $shop_obj_url );
    $shop_json = json_decode( $shop_content, true );
    $shop = $shop_json['shop'];

    $prod_obj_url = $api_url . '/admin/products.json';
    echo $o;
    $product=array('title' =>' 왜 안되지',
        'body_html' => '주식회사',
        'vendor' => '이유준',
        'product_type' => '회사',
        'variants' => array(
            array('option1' => 'Default',
                'price' => '100.00',
                'sku' => 'ABC123',
                'inventory_quantity' =>'999',
                'inventory_management' => 'shopify',
                'taxable' => true,
                'requires_shjpping' => true
            )
        ));

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
    curl_close ($ch);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopify Test</title>
</head>
<body>
    Shopify store name: <?php echo $shop['name'];?> <br>
    Shopify store name: <?php echo $shop['shop_owner'];?>
</body>
</html>