<?php

class CiselnikleskPresenter extends BasePresenter
{
    private $ciselnikleskRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikleskRepository = $this->context->ciselnikleskRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikleskRepository->findAllLesk();
} 
}
