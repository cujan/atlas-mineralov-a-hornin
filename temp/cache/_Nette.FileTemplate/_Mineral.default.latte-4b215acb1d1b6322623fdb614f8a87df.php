<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.06442000 1351107741";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Mineral\default.latte";i:2;i:1350653257;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Mineral\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qt5wlqdftl')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$_ctrl = $_control->getComponent("vlozMineraltForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

vlozMineraltForm<table border="1">
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
	
    </tr>
    
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
    
    </tbody>
</table>