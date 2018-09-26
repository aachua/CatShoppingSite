<?php
	
	require_once('database.php');
	
	if(isset($_POST["submit"]))
	{
		$username = htmlspecialchars($_POST['username']);
		$first = htmlspecialchars($_POST['first']);
		$last = htmlspecialchars($_POST['last']);
		$pass = htmlspecialchars($_POST['pass']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$address = htmlspecialchars($_POST['address']);
		$oldUser = $_SESSION['username'];
		$new = password_hash($pass, PASSWORD_BCRYPT);
			
		$query2 = "
		UPDATE customers
		SET username = :username, first = :first, last = :last, password = :pass, email = :email, phone = :phone, address = :address
		WHERE username = :oldUser
		";
		
		$statement2 = $db->prepare($query2);
		$statement2->bindValue(':username', $username);
		$statement2->bindValue(':first', $first);
		$statement2->bindValue(':last', $last);
		$statement2->bindValue(':pass', $new);
		$statement2->bindValue(':email', $email);
		$statement2->bindValue(':phone', $phone);
		$statement2->bindValue(':address', $address);
		$statement2->bindValue(':oldUser', $oldUser);
		$statement2->execute();
		
		$_SESSION['username'] = $username;
		
		header('Location:index.php');
	}
?>