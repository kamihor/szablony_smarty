<?php
/* Smarty version 3.1.39, created on 2021-07-28 21:25:31
  from 'D:\xampp\htdocs\szablony\app\calc_cred.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101af2b72fb67_42629701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200cedde9c058db7481b1343a75f7a546e1f4e81' => 
    array (
      0 => 'D:\\xampp\\htdocs\\szablony\\app\\calc_cred.html',
      1 => 1627500329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101af2b72fb67_42629701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10513874886101af2b724b88_36165877', 'footer');
?>



<h2 class="content-head is-center">Prosty kalkulator</h2>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11402308976101af2b725515_12098589', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_941980586101af2b72f525_55612424', 'footer');
?>


<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_10513874886101af2b724b88_36165877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10513874886101af2b724b88_36165877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11402308976101af2b725515_12098589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11402308976101af2b725515_12098589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form method="post" action="#">
                <div class="form">
                    <input type="text" name="value" id="value" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" placeholder="Kwota" />
                    <input type="text" style="margin-top: 1em" name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
" placeholder="Okres spłaty w latach" />
                    <input type="text" style="margin-top: 1em" name="percent" id="percent" value="<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </div>
            </form>

            <ol class="messbox">
            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <ul class="alt">
                <li> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php }?>
            </ol>


            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
            <h4>Miesięczna rata</h4>
            <p class="res">
                <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

            </p>
            <?php }?>     


        </section>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_941980586101af2b72f525_55612424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_941980586101af2b72f525_55612424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

<?php
}
}
/* {/block 'footer'} */
}
