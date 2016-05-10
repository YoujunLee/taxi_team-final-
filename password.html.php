<!-- 비밀번호 찾기 창 -->

<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   		 <title>비밀번호 찾기</title>
   		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   		 <link rel="stylesheet" type="text/css" href="../css/box.css">
   		 <link rel="stylesheet" type="text/css" href="./css/mypage.css">
	</head>

	<body  >
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
				<form action='./php/find.php' method='POST'>
			<thead>
			<tr>
				<td colspan=2>
					<h2 style="color:#34C6BE">비밀번호 찾기</h2>
					문의 : hguitaxi@gmail.com
				</td>
			</tr>
			</thead>

			<tbody>
				<tr>
					
					<label for=""inputName">
					<td class="col-md-3">
						<b>이름</b>
					</td>
					<td>
						<input type="text" class="form-control" id="inputName" placeholder="Name" name='name' required>
					</td>
					</label>
				</tr>

				<tr>
					<label for=""inputStudentId">
					<td>
						<b>학번</b>
					</td>
					<td>
						<input type="text"  onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="inputStudentId" placeholder="Student ID" name='student_no' maxlength="8" required>
					</td>
					</label>
				</tr>

				<tr>
					<label for="inputcellPhone">
						<td>
							<b>핸드폰번호</b>
						</td>
						<td>
							<input type="text" onKeyPress="if ((event.keyCode<46)||(event.keyCode>57)||(event.keyCode==47)) event.returnValue=false;" class="form-control" id="Phone" placeholder="Phone Number" name='cellPhone' maxlength="13" required>
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
						</td>
					</label>
				</tr>

				<tr>
					<label for="question">
						<td>
							<b>질문</b>
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
					<label for="answer">
						<td>
							<b>답변</b>
						</td>
						<td>
							<input name="answer" type="text" class="form-control"  required>
						</td>
					</label>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">
						<input class="btn btn-lg btn-block" style="background-color:#34C6BE; color: #ffffff;" type="submit" value="찾기">
					</td>
				</tr>
				
			</tfoot>
				</form>
			</table>
			</div>
	</body>
</html>