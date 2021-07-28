<?php
/* Smarty version 3.1.39, created on 2021-07-28 22:01:25
  from 'D:\xampp\htdocs\szablony\app\calc_cred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101b7958cec96_31873221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb439cbc5dc29e1efcf7cc351aebe8ba3688b924' => 
    array (
      0 => 'D:\\xampp\\htdocs\\szablony\\app\\calc_cred.tpl',
      1 => 1627502482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101b7958cec96_31873221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11615666836101b7958c09d0_14363058', 'footer');
?>



<h2 class="content-head is-center">Prosty kalkulator</h2>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9599024536101b7958c1397_03474700', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15293812306101b7958ce615_28558392', 'footer');
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
class Block_11615666836101b7958c09d0_14363058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11615666836101b7958c09d0_14363058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Autor: Kamil Horzela<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9599024536101b7958c1397_03474700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9599024536101b7958c1397_03474700',
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
                    <input type="text"  name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
" placeholder="Okres spłaty w latach" />
                    <input type="text"  name="percent" id="percent" value="<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </div>
            </form>

            
            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                <ol class="messbox">
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
            </ol>
            <?php }?>
            <?php }?>
        


            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <ol class="messbox">
            <h4>Miesięczna rata</h4>
            <p class="res">
                <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['result']->value);?>

                zł
            </p>
            </ol>
            <?php }?>     


        </section>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15293812306101b7958ce615_28558392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15293812306101b7958ce615_28558392',
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
