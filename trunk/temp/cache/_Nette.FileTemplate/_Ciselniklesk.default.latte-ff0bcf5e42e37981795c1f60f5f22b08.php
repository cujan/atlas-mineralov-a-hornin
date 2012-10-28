<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.80939200 1351346362";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselniklesk\default.latte";i:2;i:1350295655;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselniklesk\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'crg76tqvpm')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbdc5262d4fb_content')) { function _lbdc5262d4fb_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Lesk</legend>
<?php $_ctrl = $_control->getComponent("vlozVlastnostForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</fieldset>
<table>
    <thead>
    <tr>
        <th>Vlastnosť</th>
        
    </tr>
    </thead>
    <tbody>
        
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($tasks) as $task): ?>
    <tr>
	
        <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator->getCounter(), ENT_NOQUOTES) ?> </td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($task->vlastnost, ENT_NOQUOTES) ?></td>
	<td>
		<a href="<?php echo htmlSpecialChars($_control->link("delete", array($task->id))) ?>
">Delete</a>
	</td>
    </tr>
    
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
    
    </tbody>
</table><?php
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