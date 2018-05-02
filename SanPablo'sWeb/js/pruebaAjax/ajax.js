$.ajax({
	data: {
		variable : "ALUMNO"
		},url: "servidor.php",
		success: function(response) {
		$("#miventana").html(response);
	}
});