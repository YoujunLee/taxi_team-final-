<!--택시 방 내부 -->

<?php
include "./php/session_out.php";
out();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>i-Taxi</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>

<body class="center">
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

<section>
	<div class="wrapper col-xs-12  col-md-4 col-md-offset-4">

		<!--화면에 방정보 (날짜, 시간, 도착, 출발)등을 표시합니다. -->
		<?php
		$post_id=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.

		require_once './php/db.php';
		$phone;

		for($j=0; $j<4; $j++)
			$phone[$j]=null;

		$db = new DBC;
		$db->DBI();
		$db->query = "SELECT date, time, start, arrive FROM post WHERE post_id='".$post_id."'";
		$db->DBQ();
		//방마다 20개의 포켓몬중 임의의 포켓몬이름을 넣어서 학생들 끼리 같은시간대의 택시방이여도 구별하도록 구현
		$room_name = array('피카츄', '라이츄', '파이리', '꼬부기', '버터플', '야도란', '피죤투', '또가스', '마자용', '잠만보', '리자몽', '거북왕', '메타몽', '리자드'
		,'구구', '알통몬', '갸라도스', '뮤', '이브이', '미뇽'); //20개

		$data=$db->result->fetch_row();
		srand($data[1]+$post_id);
		$count_room=rand(0,19);
		$information = "[".$data[0]." ".$data[1]." ".$data[2]." → ".$data[3]."] ";
		echo "<b><span style=font-size:23px>[&nbsp".$room_name[$count_room]."&nbsp]</span><br>".$data[0]." ".$data[1]."<br>".$data[2]." → ".$data[3]."</b>";



		$db->DBO();
		?>
	</div>
</section>

<section>
	<div class="wrapper2 col-xs-12  col-md-4 col-md-offset-4 " id="display" name="remotediv">
		<table class="table1">
			<tbody>
			<?php
			require_once './php/db.php';

			$db = new DBC;
			$db->DBI();
			$db->query = "SELECT * FROM comment WHERE post_id='".$post_id."' ORDER BY time desc ";  //방 별로 다른 commet 출력.
			$db->DBQ();

			$db2 = new DBC;
			$db2->DBI();
			while($data = $db->result->fetch_assoc())
			{
				$db2->query= "SELECT studentid FROM student_info WHERE studentid= '".$data['stu_id']."'";
				$db2->DBQ();
				$data2 = $db2->result->fetch_row() ;
				$comment_name = $data2[0];
				echo "<tr>";
				echo "<td>".$comment_name.":&nbsp;".$data['content']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<br>"."<p>".substr($data['time'],0,16)."<p>"."</td>";
				echo "</tr>";
			}
			$db->DBO();
			$db2->DBO();
			?>
			</tbody>
		</table>
	</div>
</section>

<section>

	<div >
		<?php
		$post_id2=getenv("QUERY_STRING");
		echo"<form action=./php/comment_db.php?$post_id2  method=post>";
		?>

		<input class="col-xs-9 col-md-3 col-md-offset-4" type="text" placeholder="댓글을 입력하시오(최대 100자)" name="댓글" autofocus id="content">
		<input class="col-xs-3 col-md-1 btn4" type="submit" value="댓글달기">
		</form>
	</div>
</section>

<section>
	<div class="wrapper4 col-xs-12  col-md-4 col-md-offset-4">
		<table class="table table-striped table-hover ">
			<thead class="co">

			<tr class="row">
				<th class="col-xs-2 col-md-2">No.</th>
				<th class="col-xs-4 col-md-4">Student id</th>
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
			{if($_SESSION['name']== $data['name']){$check=false;}
				?>

				<tr class="row">
					<th class="col-xs-2 col-md-2">
						<?php
						if($i==1)
							echo "방장";
						else
							echo $i; ?></th>
					<th class="col-xs-4 col-md-4"><?php echo $data['stu_id']?></th>
					<th class="col-xs-6 col-md-6"><a href="tel: <?php echo $data['cellphone']?>"><?php echo $data['cellphone']?></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="sms://<?php echo $data['cellphone']?>"><img src="./img/chat.png" width="26px" height="26px"></a></th>
				</tr>

				<?php $phone[$i-1]=$data['cellphone'];
				$i=$i+1; ?>
				<?php
			}
			if($check){
				echo "<script>history.back();</script>"; exit;}

			?>
			</tbody>
			<!-- 여기까지 바꾼코드 -->
		</table>

		<?php
		$db2 = new DBC;
		$db2->DBI();
		$db2->query = "SELECT date, time FROM room_user WHERE post_id='".$post_id."'";
		$db2->DBQ();
		$data=$db2->result->fetch_row();

		date_default_timezone_set("Asia/Seoul");
		$current_time = date("Y-m-d H:i:s");
		/*30분 구하는 코드*/
		$result=strtotime($current_time)-strtotime($data[0]." ".$data[1]);
		?>
		<a id="kakao-link-btn" onclick="javascript:;" class="btn btn-info" >
			카톡초대
		</a>

		<?php
		if($result<-600)
			echo "<a onclick=location.href='./php/delete.php?".$post_id2."' class="."'btn btn-danger'"." > 탑승취소</a>";
		else
			echo "<a onclick=location.href='#' class="."'btn btn-danger'"." > 취소불가</a>";
		?>

		<?php
		$db->DBO();
		$db2->DBO();
		?>



		<script>
			var information = '<?= $information ?>';
			var post_id = '<?= $post_id ?>';
			Kakao.init('99930094479238c325ba429e2ace07a2');
			//label과 아이택시 로고이미지와 아이택시 url을 카톡으로 보냄
			Kakao.Link.createTalkLinkButton({
				container: '#kakao-link-btn',
				label: information+'iTaxi 택시방으로 초대되었습니다. 링크를 눌러서 로그인 하시면 바로 사용하실 수 있습니다.',
				image: {
					src: 'http://itaxi.handong.edu/img/logo_big.png',
					width: '200',
					height: '100'
				},
				webButton: {
					text: 'itaxi',
					url: 'http://itaxi.handong.edu/invite.php?'+post_id
				}
			});
		</script>

		<div class="div2">
			<span>Tip:출발시간 10분전에는 취소가 불가능합니다.</span><br>
			<span>방이름이 상단에 있습니다. 사람이 많을 때 쉽게 같은 방을 찾으세요~</span>
		</div>
	</div>

</section>
</body>
</html>
