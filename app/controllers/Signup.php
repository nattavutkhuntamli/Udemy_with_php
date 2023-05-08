<?php 
/**
 *  Singup Class
 */

 class Signup extends Controller
 {
  protected $db;
  protected $UsersModels;
  public function __construct()
  {
    $this->db = new Database();
    $this->UsersModels = new User();
  }
  public function index()
  {
    $data['title'] = "Signup";
    $this->view('signup',$data);
  }
  public function create(){
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST))
    {
      echo 'd';
      $result = $this->UsersModels->validate($_POST);
    
      $query  = "insert into users (email ,firstname,lastname,password,role,date) values (:email,:firstname,:lastname:,password:,role:,date)";
      $arr = [
        'firstname'=>$_POST['firstname'],
        'lastname' =>$_POST['lastname'],
        'password' =>$_POST['password'],
        'email'=>$_POST['email'],
        'role'=>'user',
        'date'=>date('Y-m-d h:i:s')
      ];
      print_r($arr);
      $insert = $this->db->query($query,$arr);
      
      // if( $this->UsersModels->validate($_POST))
      // {
      //   $query  = "INSERT INTO users (email,firstname,lastname,password,role,date) values (:email,:firstname,:lastname:,password:,role:,date)";
      //   $arr['firstname'] = $_POST['firstname'];
      //   $arr['lastname'] = $_POST['lastname'];
      //   $arr['email'] = $_POST['email'];
      //   $arr['password'] = $_POST['password'];
      //   $insert = $this->db->query($query,$arr);
      //   print_r($insert);
        
      // }else{
      //   echo 'd';
      // }
    }else{
      echo 'พัง';die;
    }
    
  }
 }