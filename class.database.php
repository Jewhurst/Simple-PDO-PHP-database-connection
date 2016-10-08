<?php
/* THIS IS THE DATABASE THAT WE WILL USE TO MAKE CALLS TO THE DATABASE*/


class dbconnect {
	/*THIS IS THE INITIAL SETUP*/
    private $db; 
	/*
	THIS FUNCTION IS SO YOU CAN USE SINGLE CALLS OUTSIDE THE CLASS SECTION
	EXAMPLE: ON THE INDEX PAGE YOU WILL SEE AN EXAMPLE OF THE SAME EXACT CALL AS 
	BELOW BUT DONE ON THE FLY HARDCODED IN A PAGE	
	*/
    public function __construct()  {
          global $db;
          $this->db = $db;
    }    
	
	
	/*THESE ARE FUNCTIONS YOU CAN USE WITHIN YOUR SITE*/
	public function getSiteOption($optionName){
		try{		
			$stmt = $this->db->prepare("SELECT optionValue FROM site_options WHERE optionName = :optionName");
			$stmt->execute(array(':optionName'=>$optionName));
			$val=$stmt->fetch(PDO::FETCH_ASSOC);
			return $val['optionValue'];			
		} catch(PDOException $e) {
            echo $e->getMessage();
       } 

   }
 
}
?>