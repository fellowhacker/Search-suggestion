 <?php echo '
<html>
<head>
	<title>Auto Search</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
  
</head>
<body>

	<h1>AUTO SEARCH</h1>
	<div class="auto">
	<input type="text" name="name" id="name" placeholder="Search here" required autocomplete="off" width="300px">
	 <div id="searchvalues" style="width: 300px"></div>
	</div>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script src="index.js"></script>
<script type="text/javascript">

function append(data) {

	$("#name").val(data);
	$("#searchvalues").hide();

}

</script>
</body>
</html>'
?>
