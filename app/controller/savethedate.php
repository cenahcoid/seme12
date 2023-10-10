<?php
class Savethedate extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load('front/a_komentar_model','akm');
  }
  public function index()
  {
    $data = array();
    $data['komentar'] = $this->akm->get();
    $this->setTitle('Seme Framework Introduction!');
    $this->setDescription("Congratulation, you have done well.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $data['hello'] = "this is from controller";

    $this->putThemeContent("savethedate/home",$data); //pass data to view
    $this->putJsContent("savethedate/home_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}
