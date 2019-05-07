<?php
abstract class Aircraft
{
  private $maxAmmo;
  private $currentAmmo;
  private $baseDamage;
  private $type;

  function __construct($maxAmmo, $baseDamage, $type)
  {
    $this->currentAmmo = 0;
    $this->maxAmmo = $maxAmmo;
    $this->baseDamage = $baseDamage;
    $this->type = $type;
  }

  function __get($fieldName)
  {
    return $this->$fieldName;
  }

  function fight(): int
  {
    $recentDmg = $this->ammunation * $this->baseDamage;
    $this->currentAmmo = 0;
    return $recentDmg;
  }

  function refill($amount): int
  {
    $remainedAmount = 0;
    if ($this->currentAmmo + $amount > $this->maxAmmo) {
      $remainedAmount = $amount - $this->getReqAmmo();
      $this->currentAmmo = $this->maxAmmo;
    } else {
      $this->currentAmmo = +$amount;
    }
    return $remainedAmount;
  }

  function getReqAmmo(): int
  {
    return $this->maxAmmo - $this->currentAmmo;
  }

  function getStatus(): string
  {
    $allDmg = $this->currentAmmo * $this->baseDamage;
    return "Type: {$this->type}, Ammo: {$this->currentAmmo}, Base Damage: {$this->baseDamage}, All Damage = {$allDmg}";
  }

  function isPriority(): bool
  {
    return $this->type === 'F35';
  }
}
