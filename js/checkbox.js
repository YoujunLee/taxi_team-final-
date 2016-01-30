/* check box 클릭시 직접입력 창으로 변경 되는 js*/

function checkbox_start(chb)
{
	if(chb.checked==true){
		$("<input type=\"text\" id=\"txt\" name=\"room_start\" class=\"form-control\" placeholder=\"직접입력\" >").replaceAll("#starter");
	}
	else{
		$("<select id=\"start\" size=\"1\" name=\"room_start\" class=\"form-control\">"+
					"<option value=\"한동대학교 택시 승강장\" selected>한동대 택시승강장</option>"+
					"<option value=\"양덕 하나로마트\">양덕 하나로마트</option>"+
					"<option value=\"E1\">E1 주유소</option>"+
					"<option value=\"장흥초\">장흥초</option>"+
					"<option value=\"북부해수욕장\">북부해수욕장</option>"+
					"<option value=\"고속버스터미널\">고속터미널</option>"+
					"<option value=\"시외버스터미널\">시외버스터미널</option>"+
					"<option value=\"육거리\">육거리</option>"+
					"<option value=\"포항역(KTX)\">포항역(EYDIA 앞)</option>"+
					"</select>").replaceAll("#txt");
	}
}

function checkbox_arrive(chb)
{
	if(chb.checked==true){
		document.getElementById("txt1").style.display="block";
		document.getElementById("arrive").style.display="none";
	}
	else{
		document.getElementById("txt1").style.display="none";
		document.getElementById("arrive").style.display="block";
	}
}
