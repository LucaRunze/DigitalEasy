<?php
class logoffController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        unset($_SESSION['id_user']);

        header("location: ".BASE_URL);
    }

}