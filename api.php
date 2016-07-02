<?php 
 
 
 	if(isset($_REQUEST['API'])) {
		 	if($_REQUEST['API'] == "AFIOB854" )	 { 
				header('Content-Type: application/json; charset=utf8'); 
				echo $_GET['callback'].'({"user":[{ "name": "piyal", "image": "https://farm8.staticflickr.com/7272/27413057661_f7f3d1292c_s.jpg","description": "web developer."}, { "name": "piyal2", "image": "https://farm8.staticflickr.com/7418/27483827295_e9785d838a_s.jpg","description": "web developer."}]});';	
			}
	}
	

?>
 
