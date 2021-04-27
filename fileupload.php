<?php

?>

<html>
<head>
	<script>
registerting();
				function registerting()
				{
					jQuery.ajax({
						type: "POST",
						url:"insert.php",
						data: {companyregister:"regi", imgfile:document.forms["register"]["imgfile"].value,},  
						success:function(data) {
						alert(data);
						}
					});
	</script>
</head>
<body>

</body>
</html>