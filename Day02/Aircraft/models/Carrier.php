<?php
class Carrier
{
  private $aircrafts;
  private $ammo;
  private $health;

  function __construct($ammo, $health)
  {
    $this->ammo = $ammo;
    $this->health = $health;
    $this->aircrafts = [];
  }

  function add(Aircraft $newAircraft)
  {
    if ($newAircraft->type == 'F35') {
      array_unshift($this->aircrafts);
    } else {
      $this->aircrafts[] = $newAircraft;
    }
  }

  function fill()
  {
    foreach ($this->aircrafts as $aircraft) {
      if ($this->ammo >= 0) {
        $this->ammo = $aircraft->refill($this->ammo);
      } else {
        return;
      }
    }
  }

  function calculateDamage(): int
  {
    $totalDmg = 0;
    foreach ($this->aircrafts as $aircraft) {
      $totalDmg += ($aircraft->fight);
    }
    return $totalDmg;
  }

  function fight()
  { }

  function getStatus()
  {
    $aircraftCount = count($this->aircrafts);
    $totalDamage = $this->calculateDamage();
    echo "HP: {$this->health}, Aircraft Count: {$aircraftCount}, Ammo Storage: {$this->ammo}, Total Damage: {$totalDamage}";
    echo "<br>Aircrafts:";
    foreach ($this->aircrafts as $aircraft) {
      echo $aircraft->getStatus();
    }
  }
}
