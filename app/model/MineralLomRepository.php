<?php

namespace TODO;
use Nette;

class mineralLomRepository extends Repository
{
    public function vlozZaznam($idMineral,$idLom)
    {
	return $this->getTable()->insert(array('idMineral'=>$idMineral,'idLom'=>$idLom));
    }
}
