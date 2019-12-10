<?php
class logoffController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        if(isset($_SESSION['id_user'])){
            unset($_SESSION['id_user']);
        }

        if(isset($_SESSION['id_admin'])){
            unset($_SESSION['id_admin']);
        }

        header("location: ".BASE_URL);
    }

}