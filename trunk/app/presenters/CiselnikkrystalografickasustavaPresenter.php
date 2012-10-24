<?php
use Nette\Application\UI\Form;
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
	$this->ciselnikkrystalografickasustavaRepository->createTask($form->values->vlastnost);
	$this->flashMessage('Vlastnosť pridaná.', 'success');
    $this->redirect('this');
    }
    
    /********************* view delete *********************/
    public function renderDelete($id = 0)
	{
        $this->template->tasks = $this->ciselnikkrystalografickasustavaRepository->findBy(array('id'=>$id));
	
	}
        /**
	 * Album delete form component factory.
	 * @return mixed
	 */
	protected function createComponentDeleteForm()
	{
		$form = new Form;
		$form->addHidden('id', $this->getParameter('id'));
		$form->addSubmit('cancel', 'Cancel');
		$form->addSubmit('delete', 'Delete')->setAttribute('class', 'default');
		$form->onSuccess[] = $this->deleteFormSubmitted;
		$form->addProtection('Please submit this form again (security token has expired).');
		return $form;
	}
        //funkcia pre mazanie
        public function deleteFormSubmitted(Form $form)
	{
		if ($form['delete']->isSubmittedBy()) {
		    $id = $form['id']->getValue();
			//$this->albums->find($this->getParameter('id'))->delete();
                        //$this->templates->tasks->findBy($this->getParameter('id'))->delete();
			$this->ciselnikkrystalografickasustavaRepository->findBy(array('id'=> $id))->delete();
			//$this->ciselnikfarbaRepository->findBy(array($tasks ->$id))->delete();
			
		    $this->flashMessage('Vlastnosť bola úspešne vymazaná!');
		}

		$this->redirect('default');
	}
}
