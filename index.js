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