<?php

class CiselnikkrystalografickasustavaPresenter extends BasePresenter
{
    private $ciselnikkrystalografickasustavaRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikkrystalografickasustavaRepository = $this->context->ciselnikkrystalografickasustavaRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikkrystalografickasustavaRepository->findAllKrystalografickasustava();
} 
}
