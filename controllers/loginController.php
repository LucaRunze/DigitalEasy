<?php
class loginController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $dados = array();
        $user = new Users();

        if(isset($_POST["email"]) && !empty($_POST["email"])){
            $email = addslashes($_POST['email']);
            $password = md5(addslashes($_POST["password"]));
            $teste = $user->VerifiL($email, $password) == true;
            if($teste){
                header("Location: ". BASE_URL);
            }
        }
        
        $this->loadViewLC("login", $dados);
    }
}

