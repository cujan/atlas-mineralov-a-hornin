<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.07444400 1349431980";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"D:\easyPHP\EasyPHP-12.1\www\atlasMineralov\app\templates\Homepage\ciselnikFarba.latte";i:2;i:1349431838;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyPHP\EasyPHP-12.1\www\atlasMineralov\app\templates\Homepage\ciselnikFarba.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'joxa1uqk4n')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0a3b2c354b_content')) { function _lb0a3b2c354b_content($_l, $_args) { extract($_args)
?>Farba

<table>
    <thead>
    <tr>
        <th>Vlastnost</th>
        
    </tr>
    </thead>
    <tbody>
<?php $iterations = 0; foreach ($tasks as $task): ?>
    <tr>
        
        <td><?php echo Nette\Templating\Helpers::escapeHtml($task->vlastnost, ENT_NOQUOTES) ?></td>
        
    </tr>
<?php $iterations++; endforeach ?>
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