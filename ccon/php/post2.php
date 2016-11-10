<?php
header("Content-Type:application/json");

$link = mysqli_connect('211.108.60.110', 'cconmausa_dev', '#zoq6ton', 'cconma_DEV');
//$link1 = mysqli_connect('211.108.60.110', 'cconmausa_dev', '#zoq6ton', 'cconma_DEV');
$api_url = 'https://a68a232e3c3e4b669d1d3f9e91e0d403:ed2915c40d19c72aeb0b97dc5439d1e8@cconmausa.myshopify.com';
$count = 0; //for the test

$prod_obj_url = $api_url . '/admin/products.json';
$prod_count_url = $api_url.'/admin/products/count.json';

/*CCONMA DB에서 추출해서 products.json으로 migration*/
if($result = mysqli_query($link, 'SELECT * FROM ez_product', MYSQLI_USE_RESULT)){
    while($row = mysqli_fetch_object($result)){

        if($count>2)
            break;

        $count++;

        /*모든 문자값들은 euc-kr에서 UTF-8로 변환 후 migration 진행*/
       // $title = mb_convert_encoding($row->prdname, "UTF-8", "euc-kr");
        //$company = mb_convert_encoding($row->prdcom, "UTF-8", "euc-kr");
        echo "<1>".$title, "<2>".$company, "<3>".$row->ptype, "<4>".$row->sellprice, "<5>".$row->prdcode, "<6>".$row->stock;
        $product=array('title' =>'가나다라' ,
            'body_html' => 'default',
            'vendor' =>'1',
            'product_type' => '1',
            //"images"=>array( array ("src"=>'http://www.cconmausa.com/prdimg/'.$row->prdcode.'_M1.jpg')),
            'variants' => array(
                array('option2' => 'Defau',
                    'price' => '1',
                    'sku' => '1',
                    'inventory_quantity' => '1',
                    'inventory_management' => 'shopify',
                    'taxable' => true,
                    'requires_shipping' => true
                )
            ));

        $ch = curl_init($api_url.'/admin/products.json');
        $data_string = json_encode(array('product'=>$product));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'ContentLength: ' . strlen($data_string))
        );

        /*http response를 받아 그 중 shopify용 id값을 받는다.*/
        $http_response = curl_exec ($ch);
    /*    print_r($http_response);
        $response = json_decode($http_response, true);
        $response_id = $response['product'];
        $id= $response_id['id'];
        $cur_date =  date("Y-m-d H:i:s",time());
        echo $cur_date;

        /*DB에 저장한다 ($id = shopify id / $row->prdcode = cconma id)*/
     //   mysqli_query($link, "insert into ez_shopify_id values ('".$id."','".$row->prdcode."')", MYSQLI_USE_RESULT);
    }
}

curl_close ($ch);
?>
