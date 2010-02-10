<?php
  class Item extends Model {
    function mapper() {
      return ItemMapper::instance();
    }
  }
