<!--Mainpage do bagulho -->
<html>    
<head>
	<style>
		.arrowbtn {
		  -webkit-border-radius: 19;
		  -moz-border-radius: 19;
		  border-radius: 19px;
		  text-shadow: 1px 1px 3px #666666;
		  -webkit-box-shadow: 0px 1px 3px #666666;
		  -moz-box-shadow: 0px 1px 3px #666666;
		  box-shadow: 0px 1px 3px #666666;
		  font-family: Arial;
		  color: #ffffff;
		  font-size: 33px;
		  background: #8D6E65;
		  padding: 4px 13px 4px 13px;
		  border: solid #1f628d 0px;
		  text-decoration: none;
		}
		
		.arrowbtn:hover {
		  background: #008CBA;
		  background-image: -webkit-linear-gradient(top, #008CBA, #007095);
		  background-image: -moz-linear-gradient(top, #008CBA, #007095);
		  background-image: -ms-linear-gradient(top, #008CBA, #007095);
		  background-image: -o-linear-gradient(top, #008CBA, #007095);
		  background-image: linear-gradient(to bottom, #008CBA, #007095);
		  text-decoration: none;
		}
		
		#resultbox {
			visibility: hidden;
		}
		
		#category {
			background-color: #8D6E65;
			font-style: bold;
			color: white;
			font-size: 20px;
		}
	</style>
<script language="javascript"> 
function move(tbFrom, tbTo) 
{
 var arrFrom = new Array(); var arrTo = new Array(); 
 var arrLU = new Array();
 var i;
 for (i = 0; i < tbTo.options.length; i++) 
 {
  arrLU[tbTo.options[i].text] = tbTo.options[i].value;
  arrTo[i] = tbTo.options[i].text;
 }
 var fLength = 0;
 var tLength = arrTo.length;
 for(i = 0; i < tbFrom.options.length; i++) 
 {
  arrLU[tbFrom.options[i].text] = tbFrom.options[i].value;
  if (tbFrom.options[i].selected && tbFrom.options[i].value != "") 
  {
   arrTo[tLength] = tbFrom.options[i].text;
   tLength++;
  }
  else 
  {
   arrFrom[fLength] = tbFrom.options[i].text;
   fLength++;
  }
}

tbFrom.length = 0;
tbTo.length = 0;
var ii;

for(ii = 0; ii < arrFrom.length; ii++) 
{
  var no = new Option();
  no.value = arrLU[arrFrom[ii]];
  no.text = arrFrom[ii];
  tbFrom[ii] = no;
}

for(ii = 0; ii < arrTo.length; ii++) 
{
 var no = new Option();
 no.value = arrLU[arrTo[ii]];
 no.text = arrTo[ii];
 tbTo[ii] = no;
}
}
	function randomize(elements){
		var foo = Math.floor(Math.random() * elements.options.length);
		var chosencategory = elements.options[foo];
		var xmlhttp= new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("resultbox").style.visibility = "visible";
		    document.getElementById("category").innerHTML=chosencategory.innerHTML;
		    document.getElementById("teste").innerHTML=xmlhttp.responseText;
		    }
		}
		xmlhttp.open("POST","./", true);
		xmlhttp.setRequestHeader("category", chosencategory.value.toString());
		xmlhttp.send();
	}
</script>
</head>

<body>
	<br>
<form name="combo_box">
<table align="center" style="width: 80%;  border: solid #1f628d 0px;">
	<tr  style="">
		<td style="width:40%; text-align:center; background:#8D6E65; color:#FFFFFF; border-radius: 9px;">Categorias Disponíveis</td>
		<td style="width:6%"></td>
		<td></td>
		<td style="width:40%; text-align:center; background:#8D6E65; color:#FFFFFF; border-radius: 9px;">Categorias Selecionadas</td>
	</tr>
	<tr><td style="width:40%">
<select multiple size="10" name="FromLB" style="width:100%">
 <?php foreach($categories as $category): ?>
		<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
  <?php endforeach;?> 
</select>
</td>
<td style="width: 6%"></td>
<td>
<input type="button" class="arrowbtn" onClick="move(this.form.FromLB,this.form.ToLB)" value="->"><br /><br />
<input type="button" class="arrowbtn" onClick="move(this.form.ToLB,this.form.FromLB)" value="<-">
</td>
<td style="width:40%">
<select multiple size="10" name="ToLB" style="width:100%">
</select>
</td></tr></table>
<div align="center">
<button onClick="randomize(this.form.ToLB)" type="button" style="text-align:center">Play!</button>
</div>
</form><div id="resultbox">
<h3><table style="width:60%; border: solid #1f628d 0px;" align="center"><div align="center"><tr><td id="category" colspan="3" style="text-align: center"></td></tr><tr id="teste"></tr></div></table></h3>
</div>
</body>
</html> 

