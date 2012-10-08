<?php

class CiselnikvonkajsivzhladPresenter extends BasePresenter
{
    private $ciselnikvonkajsivzhladRepository;
    
    
    
protected function startup()
{
    parent::startup();
    $this->ciselnikvonkajsivzhladRepository = $this->context->ciselnikvonkajsivzhladRepository;
}
    
   public function renderDefault()
{
    $this->template->tasks = $this->ciselnikvonkajsivzhladRepository->findAllVonkajsivzhlad();
} 
}
