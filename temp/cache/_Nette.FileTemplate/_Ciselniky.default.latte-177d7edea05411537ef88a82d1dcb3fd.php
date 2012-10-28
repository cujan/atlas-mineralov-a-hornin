<?php //netteCache[01]000402a:2:{s:4:"time";s:21:"0.63631300 1351282983";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:80:"D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselniky\default.latte";i:2;i:1350296550;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: D:\easyphp\EasyPHP-12.1\www\atlasMineralov\app\templates\Ciselniky\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'fack071x9k')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8c06c555b4_content')) { function _lb8c06c555b4_content($_l, $_args) { extract($_args)
?>zakladna strana ciselnikov
<br />
<a href="/atlasMineralov/www/Ciselnikfarba/">Farba    </a>
<br />
<a href="/atlasMineralov/www/Ciselnikkrystalografickasustava/">Kryštalografická sústava    </a>
<br />
<a href="/atlasMineralov/www/Ciselniklesk/">Lesk    </a>
<br />
<a href="/atlasMineralov/www/Ciselniklom/">Lom    </a>
<br />
<a href="/atlasMineralov/www/Ciselnikpriepustnostsvetla/">Priepustnosť svetla    </a>
<br />
<a href="/atlasMineralov/www/Ciselnikstiepatelnost/">Štiepateľnosť    </a>
<br />
<a href="/atlasMineralov/www/Ciselnikvonkajsivzhlad/">Vonkajší vzhľad    </a>
<br />
<a href="/atlasMineralov/www/Ciselnikvryp/">Vryp    </a>    
<br />
<a href="/atlasMineralov/www/Skupina/">Skupina    </a><?php
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