<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
		
			echo '<p>POSTGRESQL DATABASE </p>'; 
			include("config.php");
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_conn, "select * from product;");
			#var_dump(pg_fetch_all($result));

		# merge 02 php tag
			include("db_display.php");
			display_table($result);
			pg_close();
		?>
		

	</body>

</html>
