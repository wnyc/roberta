<?php 

$command = $_POST['command'];
$topic = $_POST['text'];
$token = $_POST['token'];


if($token != 'b2qnTszbpPysOTqdBoZ8sO9C'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}


$stories = "http://api.wnyc.org/api/v1/list/stories/tags/".$topic;

$response_array = json_decode($stories, TRUE);

if($stories === FALSE){
  # isitup.org could not be reached 
  $reply = "Ironically, isitup could not be reached.";
} else {
    # Run all the other tests to see which status we received.
    $reply = "This works.";
}

?>