<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
//set_error_handler('myHandlerForMinorErrors', E_NOTICE | E_STRICT);	
//error_reporting( error_reporting() & ~E_NOTICE );
require('html_table.php');
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2800677829-kY3elqM71dH7MJNvZfJzhBOoS4MPf6A387Vy8AV",
    'oauth_access_token_secret' => "hbLL7ihvw3A6KKHmKjUyHuFSaRrjeRf4dnmbBgwZKfamb",
    'consumer_key' => "Wt0LSGqyHhHK4U5ATSP3PdFD4",
    'consumer_secret' => "JSJjyPOIL3E9AZXssCHiVW2rX68n1rkjd2EuRfXrmDR6yIXRBE"
);

$url = "https://api.twitter.com/1.1/followers/list.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}else {$user  = "Delacruz1021";
		}
	if (isset($_GET['count'])) {
			$user = $_GET['count'];
	}else {$count = 20;
			}
$getfield = "?screen_name=Delacruz1021";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest(),$assoc = TRUE);
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

//status timeline
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}else {$user  = "Delacruz1021";
		}
	if (isset($_GET['count'])) {
			$user = $_GET['count'];
	}else {$count = 20;
			}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest(),$assoc = TRUE);
	
	
	
html_table::prFollowerlist($string);
html_table::prTimeline($getfield, $string);
										  
?>										  