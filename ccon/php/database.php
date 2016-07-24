<?php
	header("Content-Type:application/json");

	$link = mysqli_connect('211.108.60.110', 'cconmausa_dev', '#zoq6ton', 'cconma_DEV');
    static $o;
	if($result = mysqli_query($link, 'SELECT * FROM ez_content', MYSQLI_USE_RESULT)){
        $o = array();
        while($row = mysqli_fetch_object($result)){
            $t = new stdClass();
            $variants = new stdClass();

            $t->id = $row->idx;
            $t->title = $row->type;
            $t->body_html = $row->isuse;
            $t->vendor = $row->scroll;

            $o[] = $t;
            unset($t);

        }
    }else{
        $o = array(0=>'empty');
    }
echo json_encode($o);
?>