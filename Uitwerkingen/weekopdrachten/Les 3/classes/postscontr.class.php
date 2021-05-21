<?php

class PostsContr extends Posts {
	
	public function createPost($title, $textPost, $first_name, $last_name) {
		
		$this->setPost($title, $textPost, $first_name, $last_name);
	
	}
	
	
	
}



