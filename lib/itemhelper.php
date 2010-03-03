<?php

class ItemHelper{



  private $view_helper;
    
  function __construct(){
    $this->view_helper = new ViewHelper();
  
  }

  function link( Item $item ){
    return $this->view_helper->anchor_tag($item->title(), 'item.php?id='.$item->id(), 'blank', array('class' => 'item_link') );
    
  }





}


