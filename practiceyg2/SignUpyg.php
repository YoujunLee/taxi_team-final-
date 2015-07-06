<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
   		 <title>회원가입</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
	</head>
	<body>
	
		<div class="div_root">
		<br><br><br><br>
		<div align="center">
				<h2>회원가입</h2>
		</div>
  		<br><br><br>
		<form  action='./registo.php' method='POST' align="center" class="form-horizontal">

		    <div class="form-group">
		      <label for="inputName" class="col-lg-2 control-label">이름</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputName" placeholder="Name" name='name'>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputStudentId" class="col-lg-2 control-label">학번</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputStudentId" placeholder="Student ID" name='student_no'>
		      </div>
		    </div>
		    <br><br>
		    <div class="form-group">
		      <label for="inputId" class="col-lg-2 control-label">아이디</label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" id="inputId" placeholder="Id" name='id'>
		      </div>
		    </div>
			<div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">비밀번호</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='pass1'>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPasswordTwice" class="col-lg-2 control-label">비밀번호 확인</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" id="inputPasswordTwice" placeholder="Password" name='pass2'>
		      </div>
		    </div>
		    <br>
		   
		     <div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" value="가입하기">
			</div>

		</form>
		</div>
	</body>
</html>