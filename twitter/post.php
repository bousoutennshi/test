<?php

require_once("./lib/twitteroauth.php");

$consumer_key = "Fo6kGWmURmdKUvnXNFXg";

$consumer_secret = "Qt5PWmzN9ZRBRvhCblTbvYWCyFtsdRYEbq1cb9GHjJ4";

$access_token = "83531350-U1cwDlSIiM8dAGCTBiYig67HoFkXzsGNEqwp56Wrk";

$access_token_secret = "yDcsqRjezSK87SNUmDdz0KtPab2Trg08gsmkxjxtV4";

$to = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$req = $to->OAuthRequest("http://api.twitter.com/1/statuses/update.xml","POST",array("status"=>"post.phpに改名"));

header("Content-Type: application/xml");
echo $req;

?>
