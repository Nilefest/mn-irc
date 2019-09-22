<?php

class Document {
	private $title;
	private $activeSection;
	private $activeItem;
	private $scripts = array();
	
	public function setTitle($title) {
		$this->title = $title;
	}	
	public function getTitle() {
		return $this->title;
	}
	
	public function setActiveSection($section) {
		$this->activeSection = $section;
	}	
	public function getActiveSection() {
		return $this->activeSection;
	}
	
	public function setActiveItem($item) {
		$this->activeItem = $item;
	}	
	public function getActiveItem() {
		return $this->activeItem;
	}
	
	public function addScript($script) {
		$this->scriptsarray[] = $script;
	}	
	public function getScripts() {
		return $this->scripts;
	}
}
?>
