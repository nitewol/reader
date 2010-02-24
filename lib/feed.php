<?php
  class Feed extends Model {
    private $items;
    function mapper() {
      return FeedMapper::instance();
    }
    
    function items($items = null) {
      if (is_null($items)) {
        //getting items
        if (isset($this->items)) {
          return $this->items;
        } else {
          $this->items =  ItemMapper::instance()->find_all_by_sql('feed_id = ' . $this->id());
          return $this->items;
        }
      } else {
        //setting items
        $this->items = $items;
      }
    }
    
    
    

  }
  

