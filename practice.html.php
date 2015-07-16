<?php
// 받는 사람이 여럿일 경우 , 로 늘려준다.
$to  = 'gt136@naver.com'; // note the comma

 
// 제목
$subject = 'Birthday Reminders for August';
 
// 내용
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';
 
// HTML 내용을 메일로 보낼때는 Content-type을 설정해야한다
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=euc-kr' . "\r\n";
 
// 추가 header
 
// 받는사람 표시
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
 
// 보내는사람
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
 
// 참조
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
 
// 숨은참조
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
 
// 메일 보내기
mail($to, $subject, $message, $headers);
?>