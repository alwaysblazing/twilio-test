<?php
require_once "Twilio/autoload.php";
use Twilio\Rest\Client;

$id = "ACa1c6b71dd7f594f72d3613dfa8eb5dba";
$Token = "b0698eaef840529513e599ca2f48921c";

$client = new Client($id, $Token);

$people = array(
    "+19184064567" => "Abdiel Oluyomi",
);

foreach ($people as $number => $name) {
    $sms = $client->account->messages->create(
        // the number we are sending to - Any phone number
        $number,
        array(
               //the number I am sending the text
                'from' => "+19182057276", 
                
                //the message
                'body' => "Hey $name, Monkey Party at 6PM. Bring Bananas!"
            )
    );

        // Display a confirmation message on the screen
        echo "Sent message to $name";
}