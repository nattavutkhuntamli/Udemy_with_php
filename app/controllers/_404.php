<?php 
/**
 *  404 class page not found
 *  create date 07/05/2566
 */

 class _404 extends Controller
 {

  function index()
  {
    $data['title'] = "404 Page not found";
    $this->view('404',$data);
  }

 }