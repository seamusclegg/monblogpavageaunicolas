<?php
	//appel base de donnees
	require_once 'config/bdd.inc.php';
	//insertion en base de donnees
	if (isset($_POST['email'])){
		$email = addcslashes($_POST['email'], "'_%@");
		var_dump($email);
		$testEmail = "SELECT email FROM newsletter WHERE email='$email'";
		var_dump($testEmail);
		$execTest = mysql_query($testEmail);
		var_dump($execTest);
		$recupTest = mysql_fetch_array($execTest);
		var_dump($recupTest);
		if ($recupTest['email']==$email){
			echo "Déjà abonné";
		}else {
			$requete = "INSERT INTO newsletter (email) VALUES ('$email')";
			$execRequete = mysql_query($requete);
			echo "OK";
		}
		//$recupRequete = mysql_fetch_array($execRequete);
	}