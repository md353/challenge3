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

		public static function prTimeline($getfield, $string){

				echo '<table border="1"><tr>';
				$i = 0;
				foreach(self::$timeline_labels as $label){					
					echo '<th>' . self::$timeline_labels[$i] . '</th>';
					$i++;
				}
					foreach($string as $items){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $items['created_at'] . '</td>';
					$tbl .= '<td>' . $items['text'] . '</td>';
					$tbl .= '<td>' . $items['user']['name'] . '</td>';
					$tbl .= '<td>' . $items['user']['screen_name'] . '</td>';
					$tbl .= '<td>' . $items['user']['followers_count'] . '</td>';
					$tbl .= '<td>' . $items['user']['friends_count'] . '</td>';
					$tbl .= '<td>' . $items['user']['listed_count'] . '</td>';
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
	
		}
		}

?>
