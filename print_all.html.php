<!--
 총학생회 요청에 의해 여태까지 모든 정보 출력하는페이지
 -->
<!-- 택시 전체 조회 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php

    require_once './php/config.php';

    date_default_timezone_set("Asia/Seoul");
    $current_time2 = date("Y-m-d");
    $current_time3 = date("H:i:s");

    $db3= new DBC;
    $db3->DBI();
    $db3->query = "delete from room_user where stu_id=0"; // 가끔씩 학번이 0으로 나타나는 경우가 있어서 조회할경우 매번 삭제 (설명서 향후 개발 5번에 설명있음)
    $db3->DBQ();

    $db = new DBC;
    $db->DBI();
    $db->query = "select start, arrive, date, time,population,post_id from post ORDER BY date, time";
    $db->DBQ();
    $num = $db->result->num_rows;

    if($num<=0)
    {
        echo "<script>
		   		var result=confirm('조회되는 방이 없습니다. 방을 만드시겠습니까?');
		   		if(result)
		   			location.replace('../make_room.html.php');
		   		else
		   		   location.replace('./print_all.html.php');
		   	  </script>";
        exit;
    }

    $db2 = new DBC;
    $db2->DBI();
    ?>

    <title>i-Taxi</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/index2.css">
    <link rel="stylesheet" type="text/css" href="./css/index3.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- 날짜 입력 칸 클릭시 달력 뜨는 javascript-->
    <script>
        $(function() {
            $( ".datepicker" ).datepicker( {
                dateFormat:"yy/mm/dd"
            });
        });
    </script>
</head>

<body class="center">
<script>  window.setTimeout('window.location.reload()',100000); </script>
<table class="navi col-xs-12  col-md-4 col-md-offset-4" >
    <tr class="row">
        <td class = "logo" >
            <a onclick="location.href='./main.html.php'">
                <img src="./img/logo.png">
            </a>
        </td>
        <td class = "logout1">
            <a onclick="history.back(-1)">
                <img src="./img/back.png" width="25px" height="25px">
            </a>
        </td>
        <td class = "logout">
            <a  onclick="location.href='./php/logout.php'">
                <img src="./img/power.png" width="30px" height="30px">
            </a>
        </td>
    </tr>
</table>

<section >
    <div class="padding col-xs-12 col-md-4 col-md-offset-4">
        <table class="table3 table-striped table-hover">
            <tr class="row">
                <th style="font-size:20px">[전체조회]</th>
                <td style="text-align:right">
                    <form action="./php/search.php" method="post">
                        <input type="text" name="search_date" style="width:35%;" placeholder="날짜 조회" class="datepicker" ><!-- 날짜 조회로 검색시에 -->
                        <input type="submit"  class="btn btn-default" value="조회" >
                    </form>
                </td>
            </tr>
        </table>
    </div>
</section>

<section>
    <div class="padding col-xs-12 col-md-4 col-md-offset-4">
        <table class="table3 table-striped table-hover ">

            <thead>
            <tr class="row">
                <th class="col-xs-3 col-md-3">시간</th>
                <th class="col-xs-7 col-md-7">장소 <span class="padding" style="font-size: 10px">(출발지→도착지)</span></th>
                <th class="col-xs-2 col-md-2" style="text-align:center">상태</th>
            </tr>
            </thead>

            <tbody>
            <?php
            //10개씩 방조회가 되고 그외는 다음페이지로 넘어가게 구성
            $page = 1;
            if(isset($_GET["page"]))
                $page = $_GET["page"];
            $count = 0;
            $page_number =  $page*10 -10;
            $check = false;
            $num = $db->result->num_rows;

            date_default_timezone_set("Asia/Seoul");
            $current_time = date("Y-m-d H:i:s");

            while($data = $db->result->fetch_row())
            {
                if($page_number==$count)
                    if($page_number++<$page*10)//페이지넘버당 방 10개 출력
                    {
                        $check2 = false;
                        $db2->query = "select post_id, stu_id from room_user where post_id = '".$data[5]."'";
                        $db2->DBQ();
                        $num2 = $db2->result->num_rows;

                        ?>

                        <tr <?php if($check2==false)
                            {
                            if($check2==false&&$num2==$data[4])//인원수 full 일때(방에 못들어감)
                            {?>onclick="location.href='#'"<?php }
                            else if($current_time>$data[2]." ".$data[3])//시간 지났을 때(방에 못들어감)
                            {?>onclick="location.href='#'"<?php }
                            else//방에 참여할 때
                            {?>onclick="location.href='./php/get_in_question.php?post_id=<?php echo $data[5]; ?>'"<?php }
                            }
                            else if($check2==true)//이미 방에 참여했을 때(바로 들어감)
                            {?>onclick="location.href='./Room.html.php?<?php echo $data[5]; ?>'"<?php } ?>>
                            <?php
                            echo "<td class="."'row'".">";?>
                            <td class="col-xs-3 col-md-3"><?php echo $data[2]; ?> <br> <?php echo substr($data[3],0,2)." : ".substr($data[3],3,2); ?><?php if($check2==true) echo " &nbsp;☆"; ?>
                                <?php
                                echo " <td class="."'col-xs-7 col-md-7'".">".$data[0]."<br>"."&nbsp;&nbsp;"." →&nbsp;&nbsp;".$data[1]."</th>";

                                if($current_time>$data[2]." ".$data[3])
                                    echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a onclick=location.href='#' class='btn btn-info1'>탑승<br>".$num2."/".$data[4]."</a></th>";
                                else if($check2==true)
                                    echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a onclick=location.href='#' class='btn btn-info1'>탑승<br>".$num2."/".$data[4]."</a></th>";
                                else if($num2==$data[4])
                                    echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a onclick=location.href='#' class='btn btn-danger1'>FULL<br>".$num2."/".$data[4]."</a></th>";
                                else
                                    echo " <th class="."'col-xs-2 col-md-2'"." style="."'text-align:center'"."><a onclick=location.href='#' class='btn btn-info1'>탑승<br>".$num2."/".$data[4]."</a></th>";
                                ?>
                        </tr>
                        <?php
                    }
                    else
                        break;
                $count++;
            }

            $db->DBO();
            $db2->DBO();
            ?>
            </tbody>
        </table>
    </div>
</section >
<!-- Page 넘기는 장치-->
<div class="col-xs-12 col-md-4 col-md-offset-4">
    <ul class="pagination pagination-lg">
        <?php
        $number;
        if($page>1)
            echo "<li><a onclick=location.href='./print_all.html.php'>«</a></li>";

        if($page>1)
            echo "<li><a onclick=location.href='./print_all.html.php?page=".($page-1)."'><</a></li>";

        for($number=floor((($page-1)/3))*3+1;$number<floor((($page-1)/3))*3+4;$number++){
            if($number<=floor((($num-1)/10))+1){
                if($number!=$page)
                    echo"<li><a onclick=location.href='./print_all.html.php?page=".($number)."'>".$number."</a></li>";
                else
                    echo"<li class='active'><a onclick=location.href='./print_all.html.php?page=".($number)."'>".$number."</a></li>";
            }
        }

        if($page<floor((($num-1)/10))+1)
            echo "<li><a onclick=location.href='./print_all.html.php?page=".($page+1)."'>></a></li>";

        if($page<floor((($num-1)/10)+1))
            echo "<li><a onclick=location.href='./print_all.html.php?page=".floor(((($num-1)/10)+1))."'>»</a></li>";
        ?>
    </ul>
    <div class="div2">
        사용자 급증에 따라 최근 출발 순서대로 출력<br>
        및 시간 지난 방은 조회되지 않음!!
    </div>

</div>
</body>
</html>