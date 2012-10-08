<?php

class CiselniklomPresenter extends BasePresenter
{
    private $ciselniklomRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselniklomRepository = $this->context->ciselniklomRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselniklomRepository->findAllLom();
} 
}
