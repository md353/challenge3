<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL | E_STRICT);
//set_error_handler('myHandlerForMinorErrors', E_NOTICE | E_STRICT);	
error_reporting( error_reporting() & ~E_NOTICE );
require('html_table.php');
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "Delacruz1021";}
if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {
	echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();
}
// $content = $connection->get('statuses/user_timeline', array('screen_name' => 'Delacruz1021'));
html_table::prTimeline($getfield);
										  
?>										  

