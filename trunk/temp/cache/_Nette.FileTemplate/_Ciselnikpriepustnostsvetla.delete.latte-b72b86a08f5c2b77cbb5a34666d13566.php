<?php //netteCache[01]000418a:2:{s:4:"time";s:21:"0.24468100 1349895134";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselnikpriepustnostsvetla\delete.latte";i:2;i:1349894437;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselnikpriepustnostsvetla\delete.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ae7xzsej4i')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc5b6045dc8_content')) { function _lbc5b6045dc8_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<?php $iterations = 0; foreach ($tasks as $task): ?>
	<p>Ste si isty, ze chcete zmazat <?php echo Nette\Templating\Helpers::escapeHtml($task->vlastnost, ENT_NOQUOTES) ?> ?</p>
<?php $_ctrl = $_control->getComponent("deleteForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ;$iterations++; endforeach ;
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbd65791ed82_title')) { function _lbd65791ed82_title($_l, $_args) { extract($_args)
?><h1>Zmaz vlastnost</h1>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 