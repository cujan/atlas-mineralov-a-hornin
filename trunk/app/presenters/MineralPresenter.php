<?php
use Nette\Application\UI\Form;
use Nette\Forms\Controls;
/**
 * Description of MineralPresenter
 *
 * @author Stredna lesnicka
 */
class MineralPresenter extends BasePresenter {

    /**
     * (non-phpDoc)
     *
     * @see Nette\Application\Presenter#startup()
     * 
     */
    
    private $mineralRepository;
    private $skupinaRepository;
    private $ciselnikkrystalografickasustavaRepository;
    private $ciselnikvrypRepository;
    private $ciselnikstiepatelnostRepository;
    private $ciselnikfarbaRepository;
    private $ciselnikleskRepository;
    private $ciselniklomRepository;
    private $mineralfarbaRepository;
    private $tasks;
    


    protected function startup() {
	parent::startup();
	$this->mineralRepository = $this->context->mineralRepository;
	$this->skupinaRepository = $this->context->skupinaRepository;
	$this->ciselnikkrystalografickasustavaRepository = $this->context->ciselnikkrystalografickasustavaRepository;
	$this->ciselnikvrypRepository = $this->context->ciselnikvrypRepository;
	$this->ciselnikstiepatelnostRepository = $this->context->ciselnikstiepatelnostRepository;
	$this->ciselnikfarbaRepository = $this->context->ciselnikfarbaRepository;
	$this->ciselnikleskRepository = $this->context->ciselnikleskRepository;
	$this->ciselniklomRepository = $this->context->ciselniklomRepository;
	$this->mineralfarbaRepository = $this->context->mineralfarbaRepository;
	 
    }

    public function actionDefault() {
	
    }

    public function renderDefault() {
	$this->template->mineraly = $this->mineralRepository->findAllMineral();
    }
    
    //vytvori formular
    protected function createComponentVlozMineraltForm() 
    {
	$skupina = $this->skupinaRepository->findAllSkupina()->fetchPairs('id','nazov');
	$krystalografickaSustava = $this->ciselnikkrystalografickasustavaRepository->findAllKrystalografickaSustava()->fetchPairs('id','vlastnost');
	$vryp = $this->ciselnikvrypRepository = $this->ciselnikvrypRepository->findAllVryp()->fetchPairs('id','vlastnost');
	$stiepatelnost = $this->ciselnikstiepatelnostRepository = $this->ciselnikstiepatelnostRepository->findAllStiepatelnost()->fetchPairs('id','vlastnost');
	$farba = $this->ciselnikfarbaRepository->findAllFarba()->fetchPairs('id','vlastnost');
	$lesk = $this->ciselnikleskRepository->findAllLesk()->fetchPairs('id','vlastnost');
	$lom = $this->ciselniklomRepository->findAllLom()->fetchPairs('id','vlastnost');
	
	
	$form = new Form();
	$form -> addText('nazov','Názov minerálu',40,100)->addRule(Form::FILLED,'Je nutné zadať názov');
	$form -> addSelect('skupina','Skupina',$skupina);
	$form -> addText('chemickeZlozenie','Chemické zloženie',40,100);
	$form -> addSelect('krystalografickaSustava','Kryštalografická sústava',$krystalografickaSustava);
	$form -> addSelect('vryp','Vryp',$vryp);
	$form -> addText('tvrdostOd','tvrdosť od',40,100);
	$form -> addText('tvrdostDo','tvrdosť do',40,100);
	$form -> addSelect('stiepatelnost','Štiepateľnosť',$stiepatelnost);
	$form -> addText('hustotaOd','hustota od',40,100);
	$form -> addText('hustotaDo','hustota do',40,100);
	$form -> addCheckboxList('farba','farba',$farba);
	//$form -> addCheckboxList('lesk','lesk',$lesk);
	//$form -> addCheckboxList('lom','lom',$lom);
	
	
	$form->addSubmit('create', 'Vložiť minerál');
	$form->onSuccess[] = $this->vlozMineralFormSubmitted;
    return $form;
    
    }
    //spracuje vystup po odoslani formulara (ulozi vlastnosti)
    public function vlozMineralFormSubmitted(Form $form)
    {
	
	
	$mineral= $this->mineralRepository->createTask($form->values->nazov,$form->values->skupina,$form->values->chemickeZlozenie,$form->values->krystalografickaSustava,$form->values->vryp,$form->values->tvrdostOd,$form->values->tvrdostDo,$form->values->stiepatelnost,$form->values->hustotaOd,$form->values->hustotaDo);
	//$this->flashMessage('Zatial sa nedaju vkladat mineraly.', 'success');
	//id posledneho vlozeneho mineralu
	$idMineral = $mineral['id'];
	$farby = $form->values->farba;
	foreach ($farby as $farba)
	{
	    $this->mineralfarbaRepository->vlozZaznam($idMineral,$farba);
	}
	
   //$this->redirect('this');
    }
}