<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.form {
			background-color: #d5d5d5;
		} 
		input[type=file] {
			display: inline;
		}
		.form-horizontal .form-group{
			margin-left: 0;
		}

	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-6">
			<div class="form">
				<form class="form-horizontal" action="<?php echo base_url().'index.php/Signup/sign_up'; ?>" method="POST">
					<div class="form-group" >
						
					<label>Name:</label> <input class="form-controll" type="text" name="name"></div>
					<label>Pofilepic</label><input type="file" name="prof_pic"><br>
					<label>Gender</label> <input type="radio" name="gender">Male
					<input type="radio" name="gender">Female<br>
					<label>Email</label><input type="text" name="email"><br>
					<label>Address</label><textarea name="address"></textarea><br>
					<label>Country</label>
					<select name="country"><option selected value="1">India</option>
					<option>USA</option>
					<option>Canada</option>
					</select>
					<label><b>Hobbies</b></label><br>
					<input type="checkbox" name="hobbies">Reading<br>
					<input type="checkbox" name="hobbies">Music<br>
					<input type="checkbox" name="hobbies">Browsing<br>
					<input type="checkbox" name="hobbies">Playing<br><br>
					<label>password</label>
					<input type="password" name="password"><br>
					<input type="submit">

				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>