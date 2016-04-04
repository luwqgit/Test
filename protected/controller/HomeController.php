<?php
class HomeController extends DooController{
	
	public function __construct(){
		parent::__construct();
		header("Content-type: text/html; charset=utf-8");
	}
}