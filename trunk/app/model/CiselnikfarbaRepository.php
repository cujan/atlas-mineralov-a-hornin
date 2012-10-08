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
}