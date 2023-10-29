<?php
interface IEquipmentAbility
{
  public function ability(): string;
}

abstract class Equipment
{
  public function driveForward(float $wightCar)
  {
    $const = 10;
    $speed = $wightCar * $const;
    return  $speed;
  }

  public function driveBack(float $wightCar)
  {
    $const = 2;
    $speed = $wightCar * $const;
    return  $speed;
  }

  public function ability()
  {
  }
}

class Tank extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'shoot';
  }
}

class Excavator extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'ladle';
  }
}

class RacingCar extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'nitrousOxide';
  }
}

function equipmentAction(Equipment $equipment)
{
  $equipment->driveForward(10);
  $equipment->driveBack(10);
  $equipment->ability();
}

$tank = new Tank();
$excavator = new Excavator();
$racingCar = new RacingCar();

equipmentAction($tank);
equipmentAction($excavator);
equipmentAction($racingCar);
