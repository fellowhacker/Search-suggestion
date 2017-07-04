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
<script type="text/javascript">

	$("#name").keyup(function(){

 
		var name = $("#name").val();
		if(name == "") {
			$("#searchvalues").html("");
		}
		else {

		$.ajax( {

			url : "search.php",
			type : "POST",
			data : "name="+ name,
			success : function(data) {

				 

				$("#searchvalues").html(data).show();

			}	


		});
}
	});

</script>
</body>
</html>'
?>