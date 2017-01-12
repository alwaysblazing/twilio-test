<?php
require_once "Twilio/autoload.php";
use Twilio\Rest\Client;

class Message {
    private $id = "ACa1c6b71dd7f594f72d3613dfa8eb5dba";
    private $Token = "b0698eaef840529513e599ca2f48921c";
    
    
    
    
    function sendMessage($a){
        $client = new Client($this->id, $this->Token);
        $people = array($a);
        foreach ($people as $number) {
            $sms = $client->account->messages->create(
                // the number we are sending to - Any phone number
                $number,
                array(
                    //the number I am sending the text
                    'from' => "+19182057276", 
                    
                    //the message
                    'body' => "I am testing the twilio app"
                )
            );
            return 8;
        }
    }
    
}