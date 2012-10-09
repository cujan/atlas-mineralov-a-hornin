<?php
use Nette\Application\UI\Form;
//use Nette\Forms\Form;

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
    //vytvori formular
    protected function createComponentVlozVlastnostForm() 
    {
	$form = new Form();
	$form -> addText('vlastnost','Vlastnosť',40,100)->addRule(Form::FILLED,'Je nutné zadať vlastnosť');
	$form->addSubmit('create', 'Vložiť vlastnosť');
	$form->onSuccess[] = $this->vlozVlastnostFormSubmitted;
    return $form;
    }
    //spracuje vystup po odoslani formulara (ulozi vlastnosti)
    public function vlozVlastnostFormSubmitted(Form $form)
    {
	$this->ciselnikfarbaRepository->createTask($form->values->vlastnost);
	$this->flashMessage('Vlastnosť pridaná.', 'success');
    $this->redirect('this');
    }
    

}
