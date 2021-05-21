<?php

class CommentsContr extends Comments {
	
	public function createComment($first_name, $last_name, $email, $website, $dt, $message) {
		
		$this->setComment($first_name, $last_name, $email, $website, $dt, $message);
	
	}
	
	
	
}



