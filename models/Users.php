<?php
class Users extends model {

    public function isLogged(){
        
        if(isset($_SESSION['id_user']) && empty($_SESSION['id_user']) == false){
            return true;
        }else{
            return false;
        }

    }
    
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

    public function infoPerfil($id_user){
        $sql = "SELECT * From user_info Where id_users = '$id_user'";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql;
    }

    public function atualizaInfoPerfil($id_user, $name, $cidade, $endereco, $n_casa, $cep, $cpf, $telefone){
        $sql = "UPDATE user_info SET name = '$name', cidade = '$cidade', endereco = '$endereco', n_casa = '$n_casa', cep = '$cep', cpf = '$cpf', telefone = '$telefone' where id_users = '$id_user' ";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        
        return $sql;
    }

}
?>