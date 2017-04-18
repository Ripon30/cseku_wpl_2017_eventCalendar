<?php 

try 
{
	$db = new PDO('mysql:host=localhost;dbname=calendar', 'root', 'root');

}
catch (PDOException $e) 
{
    echo 'Error: ' . $e->getMessage();
    exit();
}


 ?>