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

  abstract public function ability();

  public function wipers()
  {
  }

  public function honk()
  {
  }
}

class Tank extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'shoot';
  }
  public $style = 'green';
}

class Excavator extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'ladle';
  }
  public $style = 'yellow';
}

class RacingCar extends Equipment implements IEquipmentAbility
{
  public function ability()
  {
    return 'nitrousOxide';
  }
  public $style = 'red';
}

function equipmentAction(Equipment $equipment)
{
  $equipment->driveForward(10);
  $equipment->driveBack(10);
  $equipment->ability();
  $equipment->wipers();
  $equipment->honk();
}

$tank = new Tank();
$excavator = new Excavator();
$racingCar = new RacingCar();

echo equipmentAction($tank);
equipmentAction($excavator);
equipmentAction($racingCar);
