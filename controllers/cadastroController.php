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
               $u=$user->cc($name, $email, $password);

                $getid = $user->allbank($email);
                $getid = $getid->fetch();    
                $id = $getid["id"];

                $user->cc2($id, $name, $email);
                header("Location: ". BASE_URL."login");
            }else{
                header("Location: ". BASE_URL."cadastro");
            }
        }

        $this->loadViewLC("cadastro", $dados);
    }
}