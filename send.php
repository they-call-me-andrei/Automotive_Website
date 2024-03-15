<?php 
	adauga_utilizator();
	header("Location: index.php");

	function adauga_utilizator()
	{	
		$sql = "INSERT INTO utilizatori(nume, prenume, email, mesaj) VALUES('$_POST[nume]', '$_POST[prenume]', '$_POST[email]','$_POST[mesaj]')";
		$conexiune = mysqli_connect("localhost", "root", "", "atestat");
		$rezultat_SQL=mysqli_query ($conexiune, $sql) or die ("Eroare: ".mysqli_error ($conexiune));
		mysqli_close ($conexiune);
	}
?>