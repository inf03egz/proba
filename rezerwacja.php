<?php
	    if(isset($_POST["data"]) && isset($_POST["osoby"]) && isset($_POST["telefon"]) && isset($_POST["stolik"])) {
	        $data = $_POST["data"];
	        $osoby = $_POST["osoby"];
	        $telefon = $_POST["telefon"];
			$stolik = $_POST["stolik"]

	        $conn = new mysqli("localhost","root","","baza");
	
	        $sql = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '$stolik', '$data', '$osoby', '$telefon');";
	        $result = $conn->query($sql);
	
	        $conn -> close();
	
	
	        echo "Dodano rezerwację do bazy";
	    }
	?>