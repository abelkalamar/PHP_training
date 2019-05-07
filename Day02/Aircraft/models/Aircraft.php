<?php
class Aircraft
{
  private $ammunation;
  private $baseDamage;

  function __construct()
  {
    $this->ammunation = 0;
  }

  function fight(): int
  {
    $recentDmg = $this->ammunation * $this->baseDamage;
    $this->ammunation = 0;
    return $recentDmg;
  }
}
