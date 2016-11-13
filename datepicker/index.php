<html>
<head>
	<title>Datepicker</title>
<link rel="stylesheet" media="screen" href="css/datepicker.css" type="text/css" />
<style type="text/css">
body {
	font-size: 12px;
}
</style>
<script type="text/javascript" src="js/jquery-pack.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.js"></script>
<script type="text/javascript">
$(document).ready(function() { 
		$(".tglJQuery").datepicker({
		dateFormat		:"yy-mm-dd",
		showOptions		:{direction:"up"},
		changeMonth: true,
		changeYear: true
		});	
		var birthDate = new Date(1970, 01, 01);
		$(".tglJQueryBirth").datepicker({
		dateFormat		:"yy-mm-dd",
		showOptions		:{direction:"up"},
		changeMonth: true,
		changeYear: true,
		defaultDate: birthDate,
		yearRange: '1930:2003'
		});	
		$(".tglJQueryPast").datepicker({
		dateFormat		:"yy-mm-dd",
		showOptions		:{direction:"up"},
		changeMonth: true,
		changeYear: true,
		maxDate: 'Y'
		//minDate: -7, maxDate: +30
		});
		$(".tglJQueryFuture").datepicker({
		dateFormat		:"yy-mm-dd",
		showOptions		:{direction:"up"},
		changeMonth: true,
		changeYear: true,
		minDate: 'Y'
		});
});
</script>
</head>
<body>
<input type="text" class="tglJQuery"> 
</body>
</html>