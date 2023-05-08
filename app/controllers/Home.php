<?php 
/**
 *  Home Class
 */

 class Home extends Controller
 {
  protected $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function index()
  {
    
    $data['users'] = $this->db->query('SELECT * FROM users');
    $data['var'] = "this is my variable";
    $data['title'] = "Home";
    $this->view('home',$data);
  }
  
  public function edit()
  {
    echo "home edit";
  }

  public function delete()
  {
    echo "home delete ";
  }

 }