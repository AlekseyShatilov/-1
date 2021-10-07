<?php
abstract class Сlothes
{
    public abstract function Keepwarm();
}
class  Shirt extends Сlothes
{
    public function Keepwarm()
    {
        echo 'Достаточно прохладно';
    }
}
class Sweater extends Сlothes
{
    public function Keepwarm()
    {
        echo 'Темло и уютно';
    }
}

class OverOfСlothes
{
    public function warm(Сlothes $warm)
    {
        return $warm->Keepwarm();
    }
}
$shirt = new Shirt();
$sweater = new Sweater();

$a = new OverOfСlothes();
$a->warm($sweater);
