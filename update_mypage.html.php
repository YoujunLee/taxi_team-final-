<!DOCTYPE html>

<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   		 <title>개인정보 수정</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
   		 <link rel="stylesheet" type="text/css" href="../css/mypage.css">
	</head>
	<body>
		
		<table class=" navi col-xs-12  col-md-4 col-md-offset-4" >	
			<tr class="row">
  			   <td class = "logo" >
      				<a  href="./조회창.html.php"><img src="./img/logo.png"></a>
  			   </td >
				<td class = "logout">
    			  <form action='./php/logout.php'>
		     	  <input class="btn1" type="submit" value="LogOut">
	              </form>
      		    </td >
      		</tr>
		</table>
		<br><br><br><br><br><br>
		<div class=" col-xs-12  col-md-4 col-md-offset-4">
		<!-- <div class="div_root"> -->
		<form  action='./php/registo_change.php' method='POST'  class="form-horizontal">

		    <div class="form-group">
		      <label for="inputName" class="control-label col-xs-4 col-md-3 ">이름</label>
		      <div class="col-xs-8 col-md-9">
		      <?php
		       include "./php/session_out.php";
               out();
		       
			   $name =  $_SESSION['name'] ;
			   echo "$name";
		      ?>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputStudentId" class="control-label col-xs-4 col-md-3 ">학번</label>
		      <div class="col-xs-8 col-md-9">
		        <?php
		         
			 	  $stu_id= $_SESSION['user_id'];
			 	  echo "$stu_id";
		        ?>
		    </div>
		    </div>
		    <br><br>
		    <div class="form-group">
		      <label for="inputcellPhone" class="control-label col-xs-4 col-md-3 ">핸드폰번호</label>
		      <div class="col-xs-8 col-md-9 ">
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
		      <label for="inputPassword" class="control-label col-xs-4 col-md-3 ">기존<br>비밀번호</label>
		      <div class="col-xs-8 col-md-9">
		        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='pass' required>
		      </div>
		    </div>
		    
			<div class="form-group">
		      <label for="inputPassword" class="control-label col-xs-4 col-md-3 ">비밀번호</label>
		      <div class="col-xs-8 col-md-9">
		        <input type="password" class="form-control" id="inputPassword1" placeholder="Re-Password" name='pass1' required>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPasswordTwice" class="control-label col-xs-4 col-md-3 ">비밀번호<br>확인</label>
		      <div class="col-xs-8 col-md-9">
		        <input type="password" class="form-control" id="inputPasswordTwice" placeholder="Re-Password" name='pass2' required>
		        <input type="text" id="test" class="checkpass" readOnly>
		      </div>
		    </div>
		    <script>
		      var pass1 = document.getElementById('inputPassword1');
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
		    <br>		   
		     <div class="div_go">
                <input class="btn btn-lg btn-block" type="submit" style="background-color:#34C6BE; color: #ffffff;" value="변경">
                <a href="./MyPage.html.php" class="btn btn-lg btn-block" style="background-color:red; color: #ffffff; opacity:0.8;" value="취소">취소</a>
			</div>
		</form>
		<!-- </div> -->
	</body>
</html>
			