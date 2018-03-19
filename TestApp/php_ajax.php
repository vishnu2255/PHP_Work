<!DOCTYPE html>
<html>
<head>
	<title>PHP AJAX</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script type="text/javascript">
	
function fun(str)
{
  console.log(str);
// alert(str);
if(str.length == 0)
{
	document.getElementById('output').innerHTML = '';	
}
else
{

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById('output').innerHTML =this.responseText;
		}
	}

    xmlhttp.open("GET","suggest.php?q="+str,true);
    xmlhttp.send();

}

}


</script>

</head>
<body>

<div class="container">
	
	<h1>Search Users</h1>

	<form>
		Search User : <input type="text" name="name" class="form-control" onkeyup="fun(this.value)">
	
<p class="">
	Suggestions :<span id="output"></span>
</p>
</form>
	
</div>

</body>
</html>

