<?php
/* Smarty version 3.1.39, created on 2021-03-15 11:50:24
  from 'D:\xampp\htdocs\cw5\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f3bf0abba10_18090016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1da4c84ebf51cd00806a9e491b4d0a41651a6d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cw5\\templates\\main.tpl',
      1 => 1615727517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f3bf0abba10_18090016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body>

        <header id = "header">
            <h1> <strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
 </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72406115604f3bf0abb1b1_30154163', 'content');
?>

            </div>
        </section>

        <footer id = "footer">
            <div class="container">
                <h6>  Wykonał Klaudiusz Wjtuszek </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    
    </body>
</html><?php }
/* {block 'content'} */
class Block_72406115604f3bf0abb1b1_30154163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72406115604f3bf0abb1b1_30154163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
