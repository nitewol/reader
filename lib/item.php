<?php
  class Item extends Model {
    function mapper() {
      return ItemMapper::instance();
    }
    
    function feed() {
      return FeedMapper::instance()->find($this->feed_id());
    }
  }
