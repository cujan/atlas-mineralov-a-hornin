<?php

class CiselnikvrypPresenter extends BasePresenter
{
    private $ciselnikvrypRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikvrypRepository = $this->context->ciselnikvrypRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikvrypRepository->findAllVryp();
} 
}
