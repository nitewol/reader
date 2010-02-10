<?php

  class ItemMapper extends Mapper {
  
    function table_name(){
      return 'items';
    }
  
    function do_create_object($array) {
      $obj = new Item();
      $obj->set_fields($array);
      return $obj;
    }
    
    static function instance() {
      return new self();
    }
  }
