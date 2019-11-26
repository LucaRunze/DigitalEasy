<?php
class Products extends model {
    
    public function Verification($name, $email){

        $sql = "SELECT * FROM users WHERE name = '$name' and email = '$email'";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
        $a = true;

		if($sql->rowCount() > 0) {
            return !$a;
        }else{
            return $a;
        }
    }

    public function
}
?>