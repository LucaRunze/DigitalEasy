<?php
class cadastroController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $user = new Users();

        if(isset($_POST["email"]) && !empty($_POST["email"])){
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $password = md5(addslashes($_POST["password"]));

            $ver = $user->Verification($email);
            if($ver == true){
               $user->cc($name, $email, $password);

            }else{
                header("Location: ". BASE_URL."cadastro");
            }
        }

        $this->loadViewLC("cadastro", $dados);
    }
}