

<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<title> Leopard :: Create Projcet </title>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css"
			href = "bootstrap.min.css"/>

	</head>
	<body>
          <script type="text/javascript" src="./nicEdit.js"></script>
<script type="text/javascript">
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
    <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://itaxi.handong.edu/ymg_soft/">Leopard Funding</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                        <!-- 프로젝트 찾기 버튼 -->
                <li><a href="#">Find Project <span class="sr-only">(current)</span></a></li>
                        <!-- 프로젝트 생성 버튼 -->
                
                        <!-- 마이페이지 버튼 -->
<?php

session_start();


if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 
}
else{
     echo "<li><a href="."'./create.php'".">Open Project</a></li> ";
     echo "<li><a href="."'./mypage_openPrj.php'".">My Page</a></li> ";
}

?>
                        

                        <!-- 마이페이지 드롭다운버튼 -->
                        <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Page <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
                </li> -->
              </ul>

                    <!-- Search 기능 -->
              <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Searching Project">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
              </form> -->

                    <!-- 회원가입 버튼 -->
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./join.html" target="under">Sign up</a></li>
                    </ul>

                    <!-- 로그인 버튼 -->
                    <?php




if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_pw'])) {
 session_unset('user_id');
 session_unset('user_pw');
 echo "<ul class="."'nav navbar-nav navbar-right'".">
                <li><a href="."'./login.html'"." target="."'under'".">Login</a></li>
              </ul>";
}
else{
     echo "<ul class="."'nav navbar-nav navbar-right'".">
                <li><a href="."'./php/logout.php'".">Logout</a></li>
              </ul>";
}

?>
              

            </div>
          </div>
        </nav>


<div  style="margin-left:10%; margin-right:10em; margin-bottom:10%">
  <h3 style="margin-top:4em">Open project </h3>
		<form class="form-horizontal"  action="./php/create.php"  method="post">
		  <fieldset>
		    <h4 style="margin-top:3em; padding-bottom:10px">  </h4>
		   
             <div class="form-group">
             <label for="select" class="col-lg-2 control-label">Type</label>
                <div class="col-lg-10">
                    <select class="form-control" name="type" id="select" required style="width:200px; float:left">
                        <option>기부나눔</option>
                        <option>10만원 프로젝트</option>
                        <option>공동구매</option>
                    </select>
                </div>
                 </div>


            <div class="form-group">
              
		      <label for="inputEmail" class="col-lg-2 control-label"> Title</label>
          <div class="col-lg-10">
		        <input type="text" name="title" class="form-control" required  id="inputDefault" style="width:600px">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label"> Project Manager</label>
		      <div class="col-lg-10">
		        <input type="text" name="manager" class="form-control" required  id="inputDefault" style="width:200px">
		      </div>
		    </div>
        <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label" >Content</label>
      <div class="col-lg-10" >
        <textarea class="form-control" name="content" rows="20" id="textArea"   style="width:600px"></textarea>
      </div>
    </div>

		    <div class="form-group" >
     			<label for="select" class="col-lg-2 control-label">Due Date</label>
     			<div class="col-lg-10">
       				<select class="form-control" name="year" id="select" required style="width:100px; float:left">
        				<option>2015</option>
                        <option>2016</option>
        			</select>
                    <div style="width:10px; float:left">&nbsp; </div>
       				<select class="form-control" name="month" id="select" required style="width:100px; float:left">
        				<option>1</option>
        				<option>2</option>
        				<option>3</option>
        				<option>4</option>
        				<option>5</option>
        				<option>6</option>
        				<option>7</option>
        				<option>8</option>
        				<option>9</option>
        				<option>10</option>
        				<option>11</option>
                        <option>12</option>
        			</select>
                    <div style="width:10px; float:left">&nbsp; </div>
                    <select class="form-control" name="day" id="select" required style="width:100px">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
    			</div>
                <label for="select" class="col-lg-2 control-label">Price</label>
                <div class="col-lg-10">

                       <input type="tel" id="price" name="price" onkeyup="getNumber(this)" onchange="getNumber(this)" placeholder="ex) 10,000" class="form-control" required style="width:200px; float:left" maxlength="8">
                <script type="text/javascript">
                var rgx1 = /\D/g;  
                var rgx2 = /(\d+)(\d{3})/; 
                function getNumber(obj){
    
                 var num01;
                 var num02;
                 num01 = obj.value;
                 num02 = num01.replace(rgx1,"");
                 num01 = setComma(num02);
                 obj.value =  num01;
                 }

                 function setComma(inNum){
     
                 var outNum;
                 outNum = inNum; 
                 while (rgx2.test(outNum)) {
                 outNum = outNum.replace(rgx2, '$1' + ',' + '$2');
                 }
                 return outNum;
                }
                </script>
                </div>

    		</div>
		</fieldset>
        <div align="right" style="margin-right:30%; margin-bottom:5%"><input type="submit" value="Register"class="btn btn-primary"></div>
        </div>
		</form>
     


	</body>
</html>
