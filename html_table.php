<?php

//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 3														  |
//====================================================================|

//**********************************************************************************//
//	Created a class to create & print a table from 									//
//  the information extracted off the CSVfile										//
//**********************************************************************************//
	
	namespace folders\html_stuff;
	
 	class html_table{
		
		// This function prints table from csv file by heading and data
		public static function prTable($records,$titles){
			if(isset($_GET['record'])){
				echo '<table border="1">';
				$i = 0;
				//creating the table to 
				foreach($records[$_GET['record']] as $key => $value){
						
					$title = $titles[$i]['varTitle'];
					
					echo'<tr><th>' . $title . '</th>';
					echo '<td>' . $value . '</td></tr>';
					$i++;
				}
				echo'</table>';
			}
		}
		// when setlinks is called these three variables will be used to get the
		// url and the increments and the college name
		public static function setLinks($url, $inc, $col){

			echo '<a href="?'.$url.'=' .$inc. '">' . $col. '</a>';
					echo'</p>';
			
		}
		public static function prTitle($colleges){
			if(empty($_GET)){
				echo '<h1 id="title"> Record of Colleges </h1>';
				
			}else{
				echo '<h1>'. $colleges .'</h1>';
			}
			
		}
	}



?>
