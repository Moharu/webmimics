<!--Mainpage do bagulho -->
<html>    
<head>
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
		var chosencategory = elements.options[foo].value.toString();
		var xmlhttp= new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    document.getElementById("teste").innerHTML=xmlhttp.responseText;
		    }
		}
		xmlhttp.open("POST","./", true);
		xmlhttp.setRequestHeader("category", chosencategory);
		xmlhttp.send();
	}
</script>
</head>

<body>
<form name="combo_box">
<table>
	<tr><td style="width:450px">
<select multiple size="10" name="FromLB" style="width:450px">
 <?php foreach($categories as $category): ?>
		<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
  <?php endforeach;?> 
</select>
</td>
<td style="width:100px">
<input type="button" onClick="move(this.form.FromLB,this.form.ToLB)" value="->"><br />
<input type="button" onClick="move(this.form.ToLB,this.form.FromLB)" value="<-">
</td>
<td style="width:450px">
<select multiple size="10" name="ToLB" style="width:450px">
</select>
</td></tr></table>
<div align="center">
<button onClick="randomize(this.form.ToLB)" type="button">Play!</button>
</div>
</form>
<h3><table style="width:60%" align="center"><div align="center"><tr id="teste"></tr></div></table></h3>
</body>
</html> 

