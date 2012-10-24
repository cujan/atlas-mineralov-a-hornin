<?php

namespace TODO;
use Nette;

class mineralFarbaRepository extends Repository
{
    public function vlozZaznam($idMineral,$idFarba)
    {
	return $this->getTable()->insert(array('idMineral'=>$idMineral,'idFarba'=>$idFarba));
    }
}
