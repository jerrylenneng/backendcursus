<?php



class PostView extends Posts {

	public function showPost($textPost) {
		$results = $this->getPost($textPost);
		echo "Full textPost: " . $results[0]['textPost'];
	}
	public function showPosts() {
		$results = $this->getPosts();

		
        $html = "<table class=\"styled-table\">";
        foreach($results as $row) {
            $html .= "<tr class=\"active-row\"";
            foreach ($row as $cell) {
                $html .= "<td>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
	

        echo $html;
		
		
	}
	
}