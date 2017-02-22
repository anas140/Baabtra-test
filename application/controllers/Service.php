<?php
class Service extends CI_Controller {
	public function signup_service() {
		if(isset( $_REQUEST['name'] ) && isset( $_REQUEST['prof_pic'] ) && isset( $_REQUEST['gender'] ) && isset( $_REQUEST['email'] ) && isset( $_REQUEST['address'] ) && isset( $_REQUEST['country'] ) && isset( $_REQUEST['hobbies']) && isset($_REQUEST['password'])) {
			$status['name'] = $_REQUEST['name'];
			$status['prof_pic'] = $_REQUEST['prof_pic'];
			$status['gender'] = $_REQUEST['gender'];
			$status['email'] = $_REQUEST['email'];
			$status['address'] = $_REQUEST['address'];
			$status['country'] = $_REQUEST['country'];
			$status['hobbies'] = $_REQUEST['hobbies'];
			$status['password'] = $_REQUEST['password'];

			if(filter_var($status['email'], FILTER_VALIDATE_EMAIL)) {
				$status['emai_error'] = "Email error";
			} else if(preg_match("^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$^",$status['password'] ) ) {
				$this->load->Model('SignupModel');
				$result = $this->SignupModel->SignUp($status);

			}

		} else {
			$result = 'false';
		}
		echo json_encode($status);
	}
}
?>