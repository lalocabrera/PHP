<html>
 <head></head>
 <body>
  <?php


	
			function t_list ($first_name, $last_name, $phone_number) {
				$person = array ("first_name" => "$first_name", "last_name" => "$last_name", "phone_number" => "$phone_number");
					return $person;

			}
			
			t_list("Jose", "Cabrera", "559-000-0000");
		?>
 </body>
</html>
