<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.14631100 1351347794";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Mineral\default.latte";i:2;i:1351347791;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Mineral\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'c491uez4sk')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb97571f1a82_content')) { function _lb97571f1a82_content($_l, $_args) { extract($_args)
;$_ctrl = $_control->getComponent("vlozMineraltForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

<table border="1">
    <thead>
    <tr>
        <th>Minerál</th>
        
    </tr>
    </thead>
    <tbody>
	<tr>
	    <td>P.č.</td>
	    <td>názov prvku</td>
	    <td>skupina</td>
	    <td>chemické zloženie</td>
	    <td>kryštalografická sústava</td>
	    <td>vryp</td>
	    <td>tvrdosť (od - do)</td>
	    <td>štiepateľnosť</td>
	    <td>hustota (od - do)</td>
	    <td>Farba</td>
	    <td>Lesk</td>
	    <td>Lom</td>
	    
	    
	</tr>  
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($mineraly) as $mineral): ?>
    <tr>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($iterator->getCounter(), ENT_NOQUOTES) ?> </td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->nazov, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->skupina->nazov, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->chemickeZlozenie, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->ciselnikkrystalografickasustava->vlastnost, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->ciselnikvryp->vlastnost, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->tvrdostOd, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($mineral->tvrdostDo, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->ciselnikstiepatelnost->vlastnost, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($mineral->hustotaOd, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($mineral->hustotaDo, ENT_NOQUOTES) ?></td>
	<td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($mineral->related('mineralFarba')) as $mf): ?>
        <?php echo Nette\Templating\Helpers::escapeHtml($mf->ref('ciselnikfarba','idFarba')->vlastnost, ENT_NOQUOTES) ?>

        <?php if (!$iterator->isLast()): ?>, <?php endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</td>
	<td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($mineral->related('mineralLesk')) as $ml): ?>
        <?php echo Nette\Templating\Helpers::escapeHtml($ml->ref('ciselniklesk','idLesk')->vlastnost, ENT_NOQUOTES) ?>

        <?php if (!$iterator->isLast()): ?>, <?php endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</td>
	<td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($mineral->related('mineralLom')) as $mlom): ?>
        <?php echo Nette\Templating\Helpers::escapeHtml($mlom->ref('ciselniklom','idLom')->vlastnost, ENT_NOQUOTES) ?>

        <?php if (!$iterator->isLast()): ?>, <?php endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
	</td>
	<td>
		<a href="<?php echo htmlSpecialChars($_control->link("delete", array($mineral->id))) ?>
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