<?php
namespace Todo;
use Nette;

class MineralRepository extends Repository 
{
    public function findAllMineral()
    {
	return $this->findAll();
    }
    
    //vlozi zaznam do tabulky
     public function createTask($nazov,$skupina,$chemickeZlozenie,$krystalografickaSustava,$vryp,$tvrdostOd,$tvrdostDo,$stiepatelnost,$hustotaOd,$hustotaDo)
    {
    return $this->getTable()->insert(array(
	'nazov' => $nazov,
	'idSkupina'=>$skupina,
	'chemickeZlozenie' => $chemickeZlozenie,
	'idciselnikkrystalografickasustava' => $krystalografickaSustava,
	'idCiselnikVryp' =>$vryp,
	'tvrdostOd' => $tvrdostOd,
	'tvrdostDo' => $tvrdostDo,
	'idCiselnikStiepatelnost' => $stiepatelnost,
	'hustotaOd' => $hustotaOd,
	'hustotaDo' => $hustotaDo
	));
    }
}

