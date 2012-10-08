<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.08617900 1349728011";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:84:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselnikfarba\default.latte";i:2;i:1349728006;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselnikfarba\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jkvjcih1bc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc10c8f684c_content')) { function _lbc10c8f684c_content($_l, $_args) { extract($_args)
?>farba obsah

<table>
    <thead>
    <tr>
        <th>Vlastnosť</th>
        
    </tr>
    </thead>
    <tbody>
<?php $i=1 ;$iterations = 0; foreach ($tasks as $task): ?>
    <tr>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($task->vlastnost, ENT_NOQUOTES) ?></td>
    </tr>
    <?php echo Nette\Templating\Helpers::escapeHtml($i++, ENT_NOQUOTES) ?>

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