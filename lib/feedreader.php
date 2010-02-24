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

    $items = array();
    foreach($xml->channel->item as $xml_item){
      //var_dump($xml_item);
      $item  = new Item();
      $item->title((string)$xml_item->title);
      $item->body((string)$xml_item->description);
      //var_dump($item);
      $items[] = $item;
    }

    $feed->items($items);
    $feed->save();
  }
}
