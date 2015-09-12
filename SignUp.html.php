<!-- 회원가입 창 -->

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		 <title>iTaxi</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
   		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>
	<body >
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
		<br><br><br>
		<div align="center">
				<h2 style="color:#34C6BE">WELCOME!</h2>
		</div>
		<br><br>
		<form  action='./php/registo.php' method='POST' align="center" class="form-horizontal">
		    <div class="form-group">
		    	  <label for="inputName" class="col-xs-4 col-md-3 control-label">이름</label>
	        <div class="col-xs-8 col-md-9">
		          <input type="text" class="form-control" id="inputName" placeholder="Name" name='name' required>
		    </div>
		    </div>
		
		    <div class="form-group">
			      <label for="inputStudentId" class="col-xs-4 col-md-3  control-label">학번</label>
		    <div class="col-xs-8 col-md-9 ">
		          <input type="tel"  onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="inputStudentId" placeholder="Student ID" name='student_no' maxlength="8" required>
		    </div>
		    </div>
		    <p class="notice">
		      	※ 사고에 대비하여 외부인 가입을 제한 중입니다.<br>본교 학생이  정보가 없다고 뜰 시, <span style="color:red">hguitaxi@gmail.com</span>로<br>문의주시면 바로 처리해드리겠습니다.<br>(대학원생분들도 위의 메일로 문의주시기 바랍니다.)  
		    </p>		
		    <div class="form-group">
		    	<label for="inputcellPhone" class="col-xs-4 col-md-3  control-label">핸드폰번호</label>
		    <div class="col-xs-8 col-md-9 ">
		        <input type="tel" onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="Phone" placeholder="Phone Number" name='cellPhone' maxlength="13" required>
		      <script>
		      	function autoHypenPhone(str){
            		str = str.replace(/[^0-9]/g, '');
            		var tmp = '';
            		if( str.length < 4){
                		return str;
            		}
            		else if(str.length < 7){
                		tmp += str.substr(0, 3);
                		tmp += '-';
                		tmp += str.substr(3);
                		return tmp;
            		}
            		else if(str.length < 11){
                		tmp += str.substr(0, 3);
                		tmp += '-';
                		tmp += str.substr(3, 3);
                		tmp += '-';
                		tmp += str.substr(6);
                		return tmp;
            		}
            		else{              
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
		      <label for="inputPassword" class="col-xs-4 col-md-3  control-label">비밀번호</label>
		      <div class="col-xs-8 col-md-9 ">
		        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='pass1' required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPasswordTwice" class="col-xs-4 col-md-3  control-label">비밀번호<br>확인</label>
		      <div class="col-xs-8 col-md-9 ">
		        <input type="password" class="form-control" id="inputPasswordTwice" placeholder="Password" name='pass2' required>
		        <input type="text" id="test" class="checkpass" readOnly>
		      </div>
		    </div>
		    <script>
		      var pass1 = document.getElementById('inputPassword');
		      var pass2 = document.getElementById('inputPasswordTwice');
		      var test = document.getElementById('test');
		       pass1.onkeyup = function(event){

               event = event || window.event;
                if(pass1.value == null || pass1.value == ""){
                test.value ="";
                }else if(pass2.value == null || pass2.value == ""){
                test.value ="";
                }
               else if( pass2.value != pass1.value)
               {
                test.style.color="red";
                test.value ="비밀번호 불일치";
               }else if( pass2.value == pass1.value)
               {
               test.style.color="green";
                test.value = "비밀번호 일치";
               }
             }
               pass2.onkeyup = function(event){

               event = event || window.event;
                if(pass2.value == null || pass2.value == ""){
                test.value ="";
                }
               else if( pass2.value != pass1.value)
               {
                test.style.color="red";
                test.value ="비밀번호 불일치";
               }else if( pass2.value == pass1.value)
               {
               test.style.color="green";
                test.value = "비밀번호 일치";
               }
             }
              
		    </script>
		   
		     <div class="form-group">
		      <label  class="col-xs-4 col-md-3  control-label">비밀번호<br>찾을시 질문</label>
		      <div class="col-xs-8 col-md-9 ">
		        <select  name="question" class="form-control">
		        	    <option value="아버지 성함은?">아버지 성함은?</option>
		                <option value="어머니 성함은?">어머니 성함은?</option>
		                <option value="초등학교 이름은?">초등학교 이름은?</option>
						<option value="제일 좋아하는 교수님 성함은?">제일 좋아하는 교수님 성함은?</option>
						<option value="제일 인상깊게 본 책의 제목은?">제일 인상깊게 본 책의 제목은?</option>
						<option value="제일 좋아하는 동물은?">제일 좋아하는 동물은?</option>
						<option value="제일 인상깊게 본 영화의 제목은?">제일 인상깊게 본 영화의 제목은?</option>
						<option value="어렸을 때 꿈은?">어렸을 때 꿈은?</option>
						<option value="제일 좋아하는 가수 이름은?">제일 좋아하는 가수 이름은?</option>
						</select>
		      </div>
		    </div>
		     <div class="form-group">
		      <label class="col-xs-4 col-md-3  control-label">대답</label>
		       <div class="col-xs-8 col-md-9">
		        <input name="answer" type="text" class="form-control"  required>
		      </div>
		    </div>
		    <br>	   
		     <div class="div_go">
                <input class="btn btn-lg btn-block" style="background-color:#34C6BE; color: #ffffff;" type="submit" value="가입하기">
			</div>
		</form>
		<div class="col-xs-12  col-md-4 col-md-offset-4 "> 
			&nbsp;
		</div>
		
	</body>
</html>