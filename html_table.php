<?php
//====================================================================|
//	Michael De La Cruz 												  |
//	IS218															  |
//	Challenge 3														  |
//====================================================================|

//**********************************************************************************//
//	Created a class to create & print a table from 									//
//  the information extracted off twitter											//
//**********************************************************************************//
	
	
	class html_table{

		public static $timeline_labels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];
		public static $followers_labels = ['Name','Screen name'];
		public static $Hometimeline_labels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];
		public static $post_labels = ['Posted On','Post','Screen Name'];
		
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
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
	
		}
		
		public static function prFollowerlist($string){
			echo '<table border = "1"><tr>';
				echo '<th> Names </th>';
				echo '<th> Screen Names </th>';
				foreach($string['users'] as $item){
					$tbl = '<tr><td>' . $item['name'] . '</td>';
					$tbl .= '<td>' . $item['screen_name'] . '</td>';
					$tbl .= '</tr>';
				}
				$tbl .= '</table>';
				echo $tbl;			
		}
		public static function prHometimeline($getfield, $string){

				echo '<table border="1"><tr>';
				$i = 0;
				foreach(self::$Hometimeline_labels as $label){					
					echo '<th>' . self::$Hometimeline_labels[$i] . '</th>';
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
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
	
		}		
		
				public static function prPoststatus($string){
				if (!empty($string))
    		{
    			//$postfields = array('status' => 'Using PHP program to tweet!!');
    			echo '<h3> posting works!! </h3>';
    			echo '<h3> posting Tweet!! </h3>';
			}

		}
		}
?>
