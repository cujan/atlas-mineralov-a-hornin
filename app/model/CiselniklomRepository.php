<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselniklomRepository extends Repository
{
    public function findAllLom()
    {
	return $this->findAll();
    }
}