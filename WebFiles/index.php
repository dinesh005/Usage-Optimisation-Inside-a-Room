<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
</head>
<body>
<div id="show"></div>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js">
		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

setInterval(function (){

	$('#show').load('index2.php')
},4000);
});

	
	</script>
</body>

</html>
