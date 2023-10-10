<?php

namespace Model\Front;

register_namespace(__NAMESPACE__);

use Model;

/**
* Scoped `front` class model for table `a_institusi`
*
* @version 1.0.0
*
* @package A_Komentar\Front
* @since 1.0.0
*/
class A_Komentar_Model extends \SENE_Model
{
    public $tbl = "a_komentar";
    public $tbl_as = "ak";

    public function __construct()
    {
        parent::__construct();
        $this->db->from($this->tbl, $this->tbl_as);
    }

    public function get(){
      $this->db->order_by("tanggal","desc");
        return $this->db->get();
    }
}
