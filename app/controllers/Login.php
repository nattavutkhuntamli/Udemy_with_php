<?php 
/**
 *  Singup Class
 */

 class Login extends Controller
 {
  protected $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function index()
  {
    $data['title'] = "Login";
    $this->view('login',$data);
  }
 }