<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

  function __construct()
  {
    parent::__construct();
  }

  function build($page = NULL, $data = NULL)
  {
    $start = array(
      'nav' => $this->nav_links()
    );

    $this->load->view('website/template/top');

    if(is_array($pages))
    {
      foreach($pages as $page => $data)
      {
        $this->load->view($page, $data);
      }
    }
    else if ($pages != NULL)
    {
      $this->load->view($pages, $data);
    }

    $this->load->view('website/template/bottom');
  }

  function build_website($pages = NULL, $data = NULL)
  {
    $this->load->view('website/template/top');

    if(is_array($pages))
    {
      foreach($pages as $page => $data)
      {
        $this->load->view("website/{$page}", $data);
      }
    }
    else {
      $this->load->view("website/{$pages}", $data);
    }
    $this->load->view('website/template/bottom');
  }
}
?>
