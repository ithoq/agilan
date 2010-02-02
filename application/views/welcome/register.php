<script type="text/javascript">
	//initiate validator on load
	$(function() {
		
		// validate contact form on keyup and submit
		$("#registerForm").validate({
			//set the rules for the fild names
			rules: {
				firstname: {
					required: true,
					minlength: 2
				},
			lastname: {
					required: true,
					minlength: 2
				},
			username: {
					required: true,
					minlength: 2
				},
			email: {
					required: true,
					email: true
				},
					
				
			},
			//set messages to appear inline
			messages: {
				firstname: "Please enter your first name",
				lastname: "Please enter your last name",
				email: "Please enter a valid email address",
				username: "Please enter a username"
			}
		});
	});
</script>

<?php
/*
needs: form validation, upload of photo
*/


echo heading("Please register!", 2);
$attributes = array('id' => 'registerForm');
echo form_open_multipart('welcome/create',$attributes);


echo form_label("Your profile image", 'photo');
echo form_hidden("MAX_FILE_SIZE",'80000');
echo "<input type='file' name='photo' id='photo' size='20' />";

echo form_label('Your first name', 'firstname');
$input = array('name' => 'firstname', 'id' => 'firstname', 'size'=> 40);
echo form_input($input);

echo form_label('Your last name', 'lastname');
$input = array('name' => 'lastname', 'id' => 'lastname', 'size'=> 40);
echo form_input($input);

echo form_label('Your email address', 'email');
$input = array('name' => 'email', 'id' => 'email', 'size'=> 40);
echo form_input($input);

echo form_label('Your phone number', 'phone');
$input = array('name' => 'phone', 'id' => 'phone', 'size'=> 20);
echo form_input($input);


echo form_label('Choose a username', 'username');
$input = array('name' => 'username', 'id' => 'username', 'size'=> 40);
echo form_input($input);

echo br();
echo "<small>Note: a random password will be generated for you!</small>";
echo br();

echo form_label('A short bio of yourself', 'bio');
$input = array('name' => 'bio', 'id' => 'bio', 'rows'=> 10, 'cols' => 35);
echo form_textarea($input);


tag_field();


echo br(2);
echo form_submit('register','register');

echo form_close();

echo br(2);
echo anchor('welcome/index', 'Already a member? Login now!');
?>