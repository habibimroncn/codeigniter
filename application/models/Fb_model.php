<?php 

class Fb_model extends MY_Model {

	public function Fbmodel($data){
		foreach ($data as $key => $value) :
          $query = "INSERT INTO FBmodel ($key) VALUES ('$value')";
			mysqli_query($query) or die(mysqli_error());
		endforeach;
	}
}