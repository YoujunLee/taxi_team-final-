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

		<div class="form-group col-xs-12  col-md-4 col-md-offset-4">

		<table class="table">

			<thead>
			<!-- 메일주소 -->
			<tr>
					<td colspan=2>
						<h2 style="color:#34C6BE">WELCOME!</h2>
						문의 : hguitaxi@gmail.com
					</td>
			</tr>
			</thead>	
			<tbody>
				<tr>
				<form action='./php/registo.php' method='POST'> <!-- 모든 정보 기입시에 registo.php로 post형태로 데이터 넘어감	 -->
					<label for="inputName">
					<!-- 이름 -->
					<td class="col-md-3">
						<b>이름</b>
					</td>
					<td class="col-md-9">
						<input type="text" class="form-control" id="inputName" placeholder="Name" name='name' required>
					</td>
					</label>
				</tr>
				
				<tr>
					<label for="inputStudentId">
						<!-- 학번 -->
						<td>
							<b>학번</b>
						</td>
						<td>
							 <input type="tel"  onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="inputStudentId" placeholder="Student ID" name='student_no' maxlength="8" required><!-- 학번 특성상 숫자만 쓸 수 있고 8자리까지 쓸 수 있게 만듬 -->
						</td>
					</label>
				</tr>
				
				<tr>
					<label for="inputcellPhone">
						<td>
							<b>핸드폰번호</b>
						</td>
						<td>
							 <input type="tel" onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="Phone" placeholder="Phone Number" name='cellPhone' maxlength="13" required>
		       				 <!-- 전화번호 - 처리 -->
		      				<script>
		      					function autoHypenPhone(str)
								{
									str = str.replace(/[^0-9]/g, '');<!-- 숫자 외의 문자가 들어올경우 없앰 -->
									var tmp = '';
									<!-- 전화번호의 경우 숫자 중간중간에 - 가 들어가도록 코드를 짬 -->
									if( str.length < 4)
										return str;  
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
								
								var Phone = document.getElementById('Phone'); <!-- 전화번호 받는 input 태그의 아이디를 Phone으로 지정해서 사용자가 쓴 문자를 받아옴 -->
								     			
								Phone.onkeyup = function(event){
								   	event = event || window.event;
								   	var _val = this.value.trim();
								 	this.value = autoHypenPhone(_val) ;<!-- 전화번호 입력란에 문자를 쓸 때 마다 작동 -->
								}
		      				</script>
						</td>
					</label>
				</tr>
				<!-- 비밀번호 -->
				<tr>
					<label for="inputPassword">
						<td>
							<b>비밀번호</b>
						</td>
						<td>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name='pass1' required>
						</td>
					</label>
				</tr>
				
				<tr>
					<label for="inputPasswordTwice">
						<td>
							<b>비밀번호 확인</b>
						</td>
						<td>
							<input type="password" class="form-control" id="inputPasswordTwice" placeholder="Re:Password" name='pass2' required>
							<input type="text" id="test" class="checkpass" readOnly>
						</td>
					</label>
				</tr>
				
		    			  <!-- 비밀번호 확인-->
		    			  <script>
							  //비밀번호를 입력란에 쓴 비밀번호와 비밀번호를 재확인하는 입력란에 쓴 비밀번호가 일치하는지 체크한다.
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
               				else if( pass2.value != pass1.value){
                				test.style.color="red";
                				test.value ="비밀번호 불일치";
               				}else if( pass2.value == pass1.value){
               					test.style.color="green";
                				test.value = "비밀번호 일치";
               				}
             				}
               				pass2.onkeyup = function(event){
							//비밀번호가 일치하는지 불일치 하는지 비밀번호 입력란에 문자를 쓸 때마다 텍스트가 뜨게끔 구현
               				event = event || window.event;
                			if(pass2.value == null || pass2.value == ""){
                				test.value ="";
                			}
               				else if( pass2.value != pass1.value){
                				test.style.color="red";	
                				test.value ="비밀번호 불일치";
               				}else if( pass2.value == pass1.value){
               					test.style.color="green";
                				test.value = "비밀번호 일치";
               				}
             				}
		    			</script>
				
				<tr>
					<label>
						<!-- 비밀번호 찾는 질문 과 답 -->
						<td>
							<b>비밀번호 찾을시 <br> 질문</b>
						</td>
						<td>
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
						</td>
					</label>
				</tr>
				
				<tr>
					<label>
						<td>
							<b>대답</b>
						</td>
						<td>
							<input name="answer" placeholder="Answer" type="text" class="form-control"  required>
						</td>
					</label>
				</tr>
				</tbody>
				<tfoot>
				<tr>
					<td colspan=2>
						   <input class="btn btn-lg btn-block" style="background-color:#34C6BE; color: #ffffff;" type="submit" value="가입하기">
					</td>
				</tr>
				</form>
				</tfoot>
			</table>
			</div>
		
		
	</body>
</html>