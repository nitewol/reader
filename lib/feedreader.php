<?php

class FeedReader {

  function read($url){
    $feed = new Feed();
    
    //gets xml from url
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $raw = curl_exec($ch);
    
    $feed->feed_url($url);
    $feed->time_to_live(500);
  
    //$feed->save();
    
    $xml = new SimpleXMLElement($raw);
    foreach($xml->children() as $child){
      var_dump($child);
    }

    
    

  }
  


}
