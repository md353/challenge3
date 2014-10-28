<?php
//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 3														  |
//====================================================================|

//**********************************************************************************//
//	Created a class to create & print a table from 									//
//  the information extracted off twitter									//
//**********************************************************************************//
	
	
	class html_table{

		public static $timeline_labels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends','Listed'];

		public static function prTimeline($getfield){

				echo '<table border="1">';
				$i = 0;
				foreach(self::$timeline_labels as $label){
					$records .= '<th>' . self::$timeline_labels[$i] . '</th>';
					$i++;
				}				
					echo $records;
	
		}
		}

?>
