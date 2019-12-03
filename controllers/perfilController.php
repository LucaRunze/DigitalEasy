<?php
class perfilController extends controller {
    private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $user = new Users();

        if(isset($_POST["name"]) || isset($_POST["cidade"]) || isset($_POST["endereco"]) || isset($_POST["n_casa"]) || isset($_POST["cep"]) || isset($_POST["cpf"]) || isset($_POST["telefone"])){

            $name = addslashes($_POST['name']);
            $cidade = addslashes($_POST['cidade']);
            $endereco = addslashes($_POST['endereco']);
            $n_casa = addslashes($_POST['n_casa']);
            $cep = addslashes($_POST['cep']);
            $cpf = addslashes($_POST['cpf']);
            $telefone = addslashes($_POST['telefone']);
            $id_user = $_SESSION['id_user'];

            $user->atualizaInfoPerfil($id_user, $name, $cidade, $endereco, $n_casa, $cep, $cpf, $telefone);
        }

        if($user->isLogged() == true){

            $this->loadViewP('perfil', $dados);
        }else{
            header("location: ".BASE_URL);
        }
    }
}