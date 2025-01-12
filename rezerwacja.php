<?php
	    if(isset($_POST["data"]) && isset($_POST["osoby"]) && isset($_POST["telefon"])) {
	        $data = $_POST["data"];
	        $osoby = $_POST["osoby"];
	        $telefon = $_POST["telefon"];

	        $conn = new mysqli("localhost","root","","baza");
	
	        $sql = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$data', '$osoby', '$telefon');";
	        $result = $conn->query($sql);
	
	        $conn -> close();
	
	
	        echo "<h1>Dodano rezerwację do bazy</h1>";
	    }
	?>