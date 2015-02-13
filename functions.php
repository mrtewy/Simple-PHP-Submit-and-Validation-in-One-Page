<?php

$errors     = array();
$success    = false;

if(isset($_POST['submit']))
{

    if(empty($_POST['name']))
    {
        $errors['name'] = 'Please fill your name';
        $isError = true;
    }

    // if no errors
    if(!isset($isError))
    {
    	// do DB here
        $success = true;
    }
    
}

// if no errors and everything success
if(isset($success) && $success == true) {

	// your successfully message 

}
else
{
	// for checking all errors numbers
	if(count($errors) > 0)
	{
	echo 'Please fill the blank data';
	}

	// in HTML tags to show the specific value errors
	if(count($errors) > 0 && !empty($errors['name'])) { 
		echo $errors['name'];
	} 
}
 