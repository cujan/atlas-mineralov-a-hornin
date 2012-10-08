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
}