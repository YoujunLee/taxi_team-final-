<?php

    $api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
    $shop_obj_url = $api_url . '/admin/shop.json';
    $shop_content = @file_get_contents( $shop_obj_url );
    $shop_json = json_decode( $shop_content, true );
    $shop = $shop_json['shop'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopify Test</title>
</head>
<body>
    Shopify store name: <?php echo $shop['name'];?> <br>
    Shopify store name: <?php echo $shop['timezone'];?>
</body>
</html>