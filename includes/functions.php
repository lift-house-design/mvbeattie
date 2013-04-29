<?php
	
	function config($key)
	{
		static $config;
		
		if(!isset($config))
			$config=require('config.php');
			
		if(isset($config[$key]))
			return $config[$key];
		else
			return false;
	}
	
	function asset($file,$type)
	{
		$asset_uri=trim(config('asset_uri'),'/');
		return '/'.$asset_uri.'/'.$type.'/'.$file;
	}
