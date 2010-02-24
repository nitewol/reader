<?php

  class FeedMapper extends Mapper {
  
    function table_name(){
      return 'feeds';
    }
  
    function do_create_object($array) {
      $obj = new Feed();
      $obj->set_fields($array);
      return $obj;
    }
    
    static function instance() {
      return new self();
    }
    
    function save(Feed $feed){
      parent::save($feed);
      foreach($feed->items() as $item){
        $item->feed_id($feed->id());
        $item->save();
      }
      
    }
  }







