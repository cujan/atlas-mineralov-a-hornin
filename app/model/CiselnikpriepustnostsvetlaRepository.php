<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikpriepustnostsvetlaRepository extends Repository
{
    public function findAllPriepustnostsvetla()
    {
	return $this->findAll();
    }
     public function createTask($task)
    {
    return $this->getTable()->insert(array('vlastnost' => $task));
    }
}