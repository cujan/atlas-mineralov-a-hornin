<?php


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public function beforeRender() {
	parent::beforeRender();
	$this->template->menuItems =  array('Číselníky' =>'Ciselniky:','Minerál' => 'Mineral:');
    }

    public function handleSignOut()
    {
        $this->getUser()->logout();
        $this->redirect('Sign:in');
    }
}
