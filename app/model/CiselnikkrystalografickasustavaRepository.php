<?php
namespace Todo;
use Nette;

/*Tabulka ciselnikfabra
 * 
 * 
 */

class CiselnikkrystalografickasustavaRepository extends Repository
{
     public function findAllKrystalografickasustava()
    {
	return $this->findAll();
    }
}