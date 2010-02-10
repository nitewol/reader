<?php
  class Feed extends Model {
    private $items;
    function mapper() {
      return FeedMapper::instance();
    }
    
    function items($items = null) {
      if (is_null($items)) {
        return ItemMapper::instance()->find_all_by_sql('feed_id = ' . $this->id());
      } else {
        $this->items = $items;
      }
    }
  }
