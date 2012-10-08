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
}