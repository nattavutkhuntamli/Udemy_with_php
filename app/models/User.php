<?php 
 /**
  *  User Model
  * create date 07/05/2023
  */

class User
{
  public $errors = [];
  protected $table = "users";
  
  // public function __construct()
  // {

  // }

  public function validate($data)
  {
    $this->errors = [];
    print_r($_POST);
    // if(empty($data['firstname']))
    // {
    //   $this->errors['firstname'] = "A first name is required";
    // }
    // if(empty($data['lastname']))
    // {
    //   $this->errors['lastname']  = "A last name is required";
    // }
    // if(empty($data['email']))
    // {
    //   $this->errors['email']  = " Email is required";
    // }
    // if(empty($data['password']))
    // {
    //   $this->errors['password']  = " A password  is required";
    // }
    
    // if($data['password'] !== $data['retype_password'])
    // {
    //   $this->errors['password']  = "Passwords do not match";
    // }
    if(empty($data['terms']))
    {
      $this->errors['terms']  = "Please accept the terms and conditions";
    }

    if(empty($this->errors))
    {
      return true;
    }
    return false;
  }
}