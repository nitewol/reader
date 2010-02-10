<?php
	function __autoload($class) {
		require 'lib/' . strtolower($class) . '.php';
	}

  $r = new FeedReader();
  $r->read('http://feeds.feedburner.com/colly/WraZ');
