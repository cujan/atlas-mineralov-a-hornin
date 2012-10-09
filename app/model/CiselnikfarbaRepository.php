<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikfarbaRepository extends Repository
{
    public function findAllFarba()
    {
	return $this->findAll();
    }
    
    public function createTask($task)
    {
    return $this->getTable()->insert(array('vlastnost' => $task));
    }
}