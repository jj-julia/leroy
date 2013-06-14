<?php
/**
 * Holding a instance of CLeroy to enable use of $this in subclasses.
 *
 * @package LeroyCore
 */
class CObject {

  /**
   * Members
   */
  public $config;
  public $request;
  public $data;
  public $db;
  public $views;


  /**
   * Constructor
   */
  protected function __construct() {
    $ly = CLeroy::Instance();
    $this->config   = &$ly->config;
    $this->request  = &$ly->request;
    $this->data     = &$ly->data;
    $this->db       = &$ly->db;
    $this->views    = &$ly->views;
  }

}
  