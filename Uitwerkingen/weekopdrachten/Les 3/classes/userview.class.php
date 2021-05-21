<?php

class UserView extends Users {

	public function showUser($name) {
		$results = $this->getUser($name);
		echo "Full name: " . $results[0]['username'];
	}
	
	public function showUsers() {
		$results = $this->getUsers();

		
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