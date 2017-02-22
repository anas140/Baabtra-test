<?php 
	class Signup extends CI_Controller {
		public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
		public function sign_up() {
			if(isset( $_POST['name'] ) && isset( $_POST['prof_pic'] ) && isset( $_POST['gender'] ) && isset( $_POST['email'] ) && isset( $_POST['address'] ) && isset( $_POST['country'] ) && isset( $_POST['hobbies']) && isset($_POST['password'])) {
				// $msg =  "done";
				$user['name'] = $_POST['name'];
				$user['prof_pic'] = $_POST['prof_pic'];
				$user['gender'] = $_POST['gender'];
				$user['email'] = $_POST['email'];
				$user['address'] = $_POST['address'];
				$user['country'] = $_POST['country'];
				$user['hobbies'] = $_POST['hobbies'];
				$user['password'] = $_POST['password'];


			$config['upload_path'] = 'application/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max-size'] = 50000;
			$this->load->library('upload',$config);
			if ( ! $this->upload->do_upload('profpic'))
                {
                    $user['upload_error'] = $this->upload->display_errors();
                    // $user['upload_error'];
                } 
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $user['prof_pic'] =  base_url()."application/uploads/".$data['upload_data']['file_name'];
				}

				$url = "http://localhost/baabte-machine-test/index.php/Service/signup_service";

						$options =  array(
							'http' =>array(
								'header' => "Content-type: application/x-www-form-urlencoded\r\n",
								'method' => 'POST',
								'content' => http_build_query($user),
					));
						$context = stream_context_create($options);
						$result =  file_get_contents($url,false,$context);

						$result1 = json_decode($result,true);

						print_r($result1);



				// if(preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)) {
				// 	echo "email is valid";
				// } else {
				// 	echo "email is not failed";
				// }

			} else {
				echo "failed";
			}
			// echo $msg;
		}
	}
?>