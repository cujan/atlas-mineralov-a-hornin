<?php


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public function handleSignOut()
    {
        $this->getUser()->logout();
        $this->redirect('Sign:in');
    }
}
