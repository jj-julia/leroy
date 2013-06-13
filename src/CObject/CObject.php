<?php
/**
 * Holding a instance of CLeroy to enable use of $this in subclasses.
 *
 * @package LeroyCore
 */
class CObject {

  public $config;
  public $request;
  public $data;

  /**
   * Constructor
   */
  protected function __construct() {
    $ly = CLeroy::Instance();
    $this->config   = &$ly->config;
    $this->request  = &$ly->request;
    $this->data     = &$ly->data;
  }

}