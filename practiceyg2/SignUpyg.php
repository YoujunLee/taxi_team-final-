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
		        <input type="text" class="form-control" id="inputName" placeholder="Name" name='name' required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputStudentId" class="col-lg-2 control-label">학번</label>
		      <div class="col-lg-10">
		        <input type="text"  onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="inputStudentId" placeholder="Student ID" name='student_no' maxlength="8" required>
		      </div>
		    </div>
		    <br><br>
		    <div class="form-group">
		      <label for="inputcellPhone" class="col-lg-2 control-label">핸드폰번호</label>
		      <div class="col-lg-10">
		        <input type="text" onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="Phone" placeholder="Phone Number" name='cellPhone' maxlength="13" required>
		      <script>
		       function autoHypenPhone(str){
            str = str.replace(/[^0-9]/g, '');
            var tmp = '';
            if( str.length < 4){
                return str;
            }else if(str.length < 7){
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3);
                return tmp;
            }else if(str.length < 11){
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 3);
                tmp += '-';
                tmp += str.substr(6);
                return tmp;
            }else{              
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 4);
                tmp += '-';
                tmp += str.substr(7);
                return tmp;
            }
            return str;
        }

     var Phone = document.getElementById('Phone');
     
     Phone.onkeyup = function(event){
        event = event || window.event;
        var _val = this.value.trim();
        this.value = autoHypenPhone(_val) ;
}
</script> 
		      </div>
		    </div>
			<div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">비밀번호</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='pass1' required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPasswordTwice" class="col-lg-2 control-label">비밀번호 확인</label>
		      <div class="col-lg-10">
		        <input type="password" class="form-control" id="inputPasswordTwice" placeholder="Password" name='pass2' required>
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