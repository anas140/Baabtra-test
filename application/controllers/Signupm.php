<?php
	class Signupm extends CI_Model {
		public function signup($user) {
			foreach($user as $data) {
				$result = $this->db->insert('user',$data);
			}
			return $result;
		}

	}
?>