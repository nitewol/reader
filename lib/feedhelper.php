<?php

class FeedHelper  {

  private $view_helper;
  
  function __construct(){
    $this->view_helper = new ViewHelper();
  
  }

  function link( Feed $feed ){
    return $this->view_helper->anchor_tag($feed->title(), 'feed.php?id='.$feed->id(), 'blank', array('class' => 'feed_link') );
    
  }
  









}
