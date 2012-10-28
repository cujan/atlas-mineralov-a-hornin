<?php

namespace TODO;
use Nette;

class mineralLeskRepository extends Repository
{
    public function vlozZaznam($idMineral,$idLesk)
    {
	return $this->getTable()->insert(array('idMineral'=>$idMineral,'idLesk'=>$idLesk));
    }
}
