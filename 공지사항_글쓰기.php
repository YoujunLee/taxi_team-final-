<html>
	<head>
		<meta charset="utf-8">
		<title>공지사항 글쓰기</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/mypage.css">
		</head>
	<body>
		<div class="div_root">
		<br><br><br>
		<div align="center">
				<h2>글쓰기</h2>
		</div>
		<br><br><br>
		<hr/>
<<<<<<< HEAD
		<form name="myForm" method="post" action="insert.php">
		제목 : <input type="text" name="subject" size=50  maxlength=70> <br/><br/>
=======
		<form name="myForm" method="post" action="./insert.php">
		제목 : <input name="subject" type="text" size=50  maxlength=70> <br/><br/>
>>>>>>> 845f0b867a93dde6262c45efb868a10c7bedecbc
		내용 : <textarea name="memo" cols=55 rows=20  maxlength=500></textarea>
		<br/>
		<br/>
		<hr/>
		<input type="submit" value="글쓰기"/>
		</div>
	</form>
	</body>
</html>