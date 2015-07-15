<?php
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>i-Taxi</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>
<body class="center">
	<div class = "col-xs-12  col-md-6 col-md-offset-3 padding">
<nav class="navbar navbar-inverse" style="
    margin-bottom: 0px;
">
<a class="navbar-brand" href="./index.php"><img class="imgpa" src="./img/logo.png"></a>
<ul class="nav navbar-nav navbar-right right">
        <li><a href="./php/logout.php">LogOut</a></li>
      </ul>
      </nav>
</div>

<section>
	<div class="wrapper col-xs-12  col-md-6 col-md-offset-3">
	
	<?php 
  	    $post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
		
		require_once './php/db.php';

		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT date, time, start, arrive FROM post WHERE post_id='".$post_id."'";
		$db->DBQ();
		
		$data=$db->result->fetch_row();
		echo $data[0]." ".$data[1]."<br>".$data[2]." → ".$data[3];
		
		$db->DBO();
	?>
	
	</div>
  </section>
  <section>
    <div class="wrapper2 col-xs-12  col-md-6 col-md-offset-3">

	<?php
		require_once './php/db.php';
		
		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT * FROM comment WHERE post_id='".$post_id."'";  //방 별로 다른 commet 출력. 
		$db->DBQ();
		
		$db2 = new DBC;
		$db2->DBI();
		echo "<hr>";
		while($data = $db->result->fetch_assoc())
		{   
			$db2->query= "SELECT name FROM student_info WHERE studentid= '".$data['stu_id']."'";
		    $db2->DBQ();   
			$data2 = $db2->result->fetch_row() ;
			$comment_name = $data2[0];
			echo $comment_name.":   &nbsp;".$data['content']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<br>"."<p>".substr($data['time'],0,16)."<p>"."<hr>";
		}		
		$db->DBO();
		$db2->DBO();
	?>
	</div>
  </section>
  
  <section>
  	
  	
  	<?php
  	$post_id2=getenv("QUERY_STRING");
  	echo"<form action=./php/comment_db.php?$post_id2  method=post>";
  	?>
  	
  	<input class="col-xs-9 col-md-5 col-md-offset-3" type="text" placeholder="댓글을 입력하시오(최대 100자)" name="댓글" id="content">
  	<input class="col-xs-3 col-md-1" type="submit" value="의견쓰기">
  	
	</form>
	
	</section>
	<section>
<div class="wrapper4 col-xs-12  col-md-6 col-md-offset-3 padding">
<table class="table table-striped table-hover ">
  <thead class="co">
    <tr class="row">
      <th class="col-xs-2 col-md-2">No.</th>
      <th class="col-xs-4 col-md-4">Name</th>
      <th class="col-xs-6 col-md-6">Phone</th>
    </tr>
  </thead>
  <!-- 바꾼 코드. -->
  <tbody>
  	<?php
		require_once './php/db.php';
		$check = true;
		
		$db = new DBC;
		$db->DBI();
		
		
		$db->query = "SELECT * FROM room_user WHERE post_id='".$post_id."'";
		$db->DBQ();
		$i = 1;
  	while($data = $db->result->fetch_assoc())
	{if($_SESSION['name']== $data['name']){
	  $check=false;}
		?>
    <tr class="row">
      <th class="col-xs-2 col-md-2"><?php echo $i?></th>
      <th class="col-xs-4 col-md-4"><?php echo $data['name']?></th>
      <th class="col-xs-6 col-md-6"><?php echo $data['cellphone']?></th>
    </tr>
    <?php
    $i=$i+1;
	?>
	
    <?php
   
   }
	 if($check){
	echo "<script>location.replace('./search_result.html.php');</script>";
   exit;}
	?>
	
   </tbody>
   <!-- 여기까지 바꾼코드 -->
</table>
</div>
</section>
<section>

<div class="col-xs-4 col-md-4"></div>
<div class="col-xs-4 col-md-4">
 
 <a href="./php/delete.php?<?php echo $post_id2; ?>" class="btn btn-danger" >
 
 탑승취소</a>
 <br>
  <a id="kakao-link-btn" href="javascript:;">
      <img src="http://dn.api1.kage.kakao.co.kr/14/dn/btqa9B90G1b/GESkkYjKCwJdYOkLvIBKZ0/o.jpg" width="50" height="50">
   </a>
</div>

<div class="col-xs-4 col-md-4"></div>

</div>

</section>



    <script>
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('99930094479238c325ba429e2ace07a2');

    // 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createTalkLinkButton({
      container: '#kakao-link-btn',
      label: '한동대학교 택시 카풀 서비스입니다.',
      image: {
        src: 'http://52.27.102.99/img/logo_big.png',
        width: '300',
        height: '200'
      },
      webButton: {
        text: 'itaxi',
        url: 'http://52.27.102.99/' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
      }
    });
    </script>
</body>
</html>
