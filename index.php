<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function getData(str){
	$.ajax({
		type:'post',
		url:'ajax.php',
		data:{"sending":str},
		success: function(data){
			document.getElementById("out").innerHTML = data;
		}
	});
}
</script>
</head>
<body>
	<button onclick="getData('Hello!');">Click me!</button>
	<div id="out"></div>
</body>
</html>
