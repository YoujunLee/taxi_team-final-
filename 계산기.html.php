<HTML>
<HEAD>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="../css/search.css">  
<scRIPT LANGUAGE=JAVAscRIPT>
function hab(num1,num2)
{
 sum = num1 / num2;
 return sum ;
}
function run()
{
 var n1, n2;
 n1=eval(document.frm1.input1.value);
 n2=eval(document.frm1.input2.value);
 result = hab( n1 , n2 );
 document.frm1.input3.value=result;
}
</scRIPT>
</HEAD>
<BODY class = "center">
</br></br></br>
<h1>divide taxi fare</h1>
<form name="frm1">
<table class = "center1">
<tr>
<td>
<input type="text" size=10 name="input1"> 
</td>
<td>
<h3>&nbsp; / </h3>
</td>
<td>
<div class="col-lg-10">
     <select class="form-control" id="select" name="input2" >
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
        </div>
</td>
<td>
 <input type="button" name="btn1" value="=" onclick=run()>
</td>
<td>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size=10 name="input3">
</td>
</tr>


</table>
    </form>
  

  
 
 

 


</BODY>
</HTML>