<?php
namespace Todo;
use Nette;

/*Tabulka skupina
 * 
 * 
 */

class SkupinaRepository extends Repository
{
    public function findAllSkupina()
    {
	return $this->findAll();
    }
    
    public function createTask($task)
    {
    return $this->getTable()->insert(array('nazov' => $task));
    }
}