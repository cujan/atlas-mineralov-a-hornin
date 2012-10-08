<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikvonkajsivzhladRepository extends Repository
{
    public function findAllVonkajsivzhlad()
    {
	return $this->findAll();
    }
}