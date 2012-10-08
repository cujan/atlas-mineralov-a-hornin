<?php

class CiselnikfarbaPresenter extends BasePresenter
{
    private $ciselnikfarbaRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikfarbaRepository = $this->context->ciselnikfarbaRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikfarbaRepository->findAllFarba();
} 
}
