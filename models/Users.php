<?php
class Users extends model {
    
    public function Verification($email){

        $sql = "SELECT * FROM users WHERE  email = '$email'";
		$sql = $this->db->prepare($sql);
		$sql->execute();
        $a = true;

		if($sql->rowCount() == 0) {
            return $a;
        }else{
            return !$a;
        }
    }

    public function cc($name, $email, $password){

        $sql = "INSERT INTO users SET name = '$name', email = '$email', password = '$password'";
        $sql = $this->db->prepare($sql);
        $sql = $sql->execute();

        return $sql;
    }

    public function VerifiL($email, $password){

        $sql = "SELECT * FROM users WHERE  email = '$email'";
		$sql = $this->db->prepare($sql);
		$sql->execute();
        $a = true;

		if($sql->rowCount() > 0) {
            $dados = $sql->fetch();

            $_SESSION['id_user'] = $dados["id"];
            return $a;
        }else{
            return !$a;
        }
    }
}
?>