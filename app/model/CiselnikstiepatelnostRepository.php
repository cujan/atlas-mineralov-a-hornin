<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikstiepatelnostRepository extends Repository
{
    public function findAllStiepatelnost()
    {
	return $this->findAll();
    }
}