<?php

//connecting to the database with OPP 


class Database {
	
//declaring the parameters needed to connect to the database 

public $server = 'localhost';

public $username = 'root';

public $password = '';         

public $database = 'registration' ;




public function __construct () {
	

 

$this -> connect () ; 	
	
	
	
} 

public function  connect () {

$link = mysqli_connect ( 'localhost' , 'root' , '' , 'registration') ; 


if (!$link) {

//If the database does not connect 

die ('MYSQL Not connecting. mysqli_error ()') ; 	
	
	
}
 	
else {

echo 'Succesfully connected' ; 	
	
	
}	
	
	
}


}

//initializing 

$connector = new Database () ; 



?> 