<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikleskRepository extends Repository
{
     public function findAllLesk()
    {
	return $this->findAll();
    }
     public function createTask($task)
    {
    return $this->getTable()->insert(array('vlastnost' => $task));
    }
}