<?php



class CommentView extends Comments {

	public function showComment($text) {
		$results = $this->getComment($text);
		echo "Full comment text: " . $results[0]['text'];
	}
	
	public function showComments() {
		$results = $this->getComments();

		
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