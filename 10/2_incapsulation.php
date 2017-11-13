<?php 

abstract class Publication {
  final protected function getId(){ 
		return $this->id; 
	}
}

class News extends Publication {
 public function printId() {
  echo 'News ID: ' . $this->getId();
 }
}
class Article extends Publication {
 public function printId() {
  echo 'Article ID:' . $this->getId();
 }
}
