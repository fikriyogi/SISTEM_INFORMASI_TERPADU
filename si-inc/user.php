<?php


class user extends Data {
	public function SI_Search($keyword, $table) {
		        try{
		        $q = "SELECT * FROM $table WHERE nik LIKE ?";
		        $stmt = $this->con->prepare($q);
		        $stmt->execute(array("%$keyword%");
		        }catch(PDOException $e){
		         throw new Exception("ERROR:". $e->getMessage()); 
		        }
		        if(!$stmt->rowCount()){
		          return false; #this will return false if data isn't found. 
		        }
		        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		        return $result;
		
	}

}