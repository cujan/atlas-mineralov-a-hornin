<?php

class CiselnikstiepatelnostPresenter extends BasePresenter
{
    private $ciselnikstiepatelnostRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikstiepatelnostRepository = $this->context->ciselnikstiepatelnostRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikstiepatelnostRepository->findAllStiepatelnost();
} 
}
