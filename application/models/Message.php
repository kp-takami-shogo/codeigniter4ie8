<?php
class Message extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function get_message()
  {
    $return = [
      'message' => 'Home!'
    ];

    return json_encode($return);
  }

}
