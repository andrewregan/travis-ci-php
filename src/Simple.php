<?php
namespace Runner;

class Simple
{
  public $test = false;

  public function __construct()
  {
    $this->test = 'test';
  }

  public function reset()
  {
    $this->test = false;
  }
}
