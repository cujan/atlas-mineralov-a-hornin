<?php

class CiselnikpriepustnostsvetlaPresenter extends BasePresenter
{
    private $ciselnikpriepustnostsvetlaRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikpriepustnostsvetlaRepository = $this->context->ciselnikpriepustnostsvetlaRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikpriepustnostsvetlaRepository->findAllPriepustnostsvetla();
} 
}
