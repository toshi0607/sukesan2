<?php
class Inquiry extends AppModel {


  public $validate = array(
    'title' => array ( 'rule' => 'notEmpty' ),
    'body'  => array ( 'rule' => 'notEmpty' ),
    'mail'  => array ( 'rule' => 'notEmpty' )
  );
}
?>