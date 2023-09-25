<?php
class Granger extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Seme Framework Introduction!');
    $this->setDescription("Congratulation, you have done well.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $data['hello'] = "this is from controller";

    $this->putThemeContent("granger/home",$data); //pass data to view
    $this->putJsContent("granger/home_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}
