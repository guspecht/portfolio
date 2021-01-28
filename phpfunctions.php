<?php

use GuzzleHttp\Psr7\Response;

function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    // get request to the API to get information about the IP
function callAPIipDetail($ip){
    $cURLConnection = curl_init();

    curl_setopt($cURLConnection, CURLOPT_URL, 'http://ip-api.com/php/' . $ip);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $ipDetails = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = unserialize($ipDetails);
    // $jsonArrayResponse = json_encode($jsonArrayResponse);
    // $jsonArrayResponse = json_decode($jsonArrayResponse);

    return $jsonArrayResponse;
}
    
function addVisitor() {
     // path to the file
     $fileLocation = "./files/visitors.json";
     // in case the file does not exist it will create one. (w+)
     $openFile = fopen($fileLocation, "r+");
 
     $contactFile = file_get_contents($fileLocation);
     // get the json file and make it a php array with all the information
     $visitors = json_decode($contactFile);
     
     // checking contacts for the first time., if it is null create an empty array
     if($visitors == null){
         $visitors = [];
     }
 
     // Get info
 
     // function imported from phpfunctions.php
     // getting the user IP
     $ip = getUserIpAddr();
     // Get Date
     $date = date("Y-m-d h:i:s",time());
     //get IP detail
     $ipDetails = callAPIipDetail($ip);


     // Creating an array element of all the information that has taken
     $visitor = ["id" => count($visitors), "ip" => $ip, "date" => $date, "ipDetails" => $ipDetails];
 
     // Adding this contact to the array of contacts
     array_push($visitors, $visitor);
 
     // writing the array to a json file
     fwrite($openFile, json_encode($visitors, JSON_PRETTY_PRINT));
     // closing the file
     fclose($openFile);
}

function getCreativeVideo() {
    // path to the file
    $fileLocation = "./files/season5CreativeVideo.json";
    // in case the file does not exist it will create one. (w+)
    $openFile = fopen($fileLocation, "r+");

    $contactFile = file_get_contents($fileLocation);
    // get the json file and make it a php array with all the information
    $creativeVideo = json_decode($contactFile);
    fclose($openFile);
    echo $creativeVideo[0]->src;
}

function getQuestVideos() {
    // path to the file
    $fileLocation = "./files/season5QuestVideos.json";
    // in case the file does not exist it will create one. (w+)
    $openFile = fopen($fileLocation, "r+");

    $contactFile = file_get_contents($fileLocation);
    // get the json file and make it a php array with all the information
    $creativeVideo = json_decode($contactFile);
    fclose($openFile);
    return $creativeVideo;
}
?>