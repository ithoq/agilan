<?php


echo heading("Search Results",2);

if (count($results)){
	foreach ($results as $id => $person){
		echo anchor("users/home/".$person->username, $person->firstname. " ". $person->lastname);
		echo br();
		
		$properties = array(
					'src' => 'users/get_photo/'. $person->id,
					'width' => '120',
					'height' => '90'
		);
		echo img($properties,true);	
		$properties = array();
		echo br();
		if ($person->id != $_SESSION['userid']){
			echo anchor("users/follow/".$person->id, "follow status updates");
			echo br();
		}
		echo "Email: ". mailto($person->email,$person->email);
		echo br();
		echo "Phone: ". $person->phone;
		echo br(2);
	
	}
}else{
	echo "Sorry, no search results matched that query!";
}