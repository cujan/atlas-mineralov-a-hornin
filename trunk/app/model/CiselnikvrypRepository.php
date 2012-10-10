<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikvrypRepository extends Repository
{
    public function findAllVryp()
    {
	return $this->findAll();
    }
     public function createTask($task)
    {
    return $this->getTable()->insert(array('vlastnost' => $task));
    }
}