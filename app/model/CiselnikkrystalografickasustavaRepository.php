<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikkrystalografickasustavaRepository extends Repository
{
     public function findAllKrystalografickasustava()
    {
	return $this->findAll();
    }
     public function createTask($task)
    {
    return $this->getTable()->insert(array('vlastnost' => $task));
    }
}