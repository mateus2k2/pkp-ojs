<?php
/* Smarty version 4.1.0, created on 2023-05-25 12:19:45
  from 'plugins-1-plugins-generic-backup-generic-backup:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646f52611c74d6_11335496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0864743446a660f0064fa58915d778ee130573fd' => 
    array (
      0 => 'plugins-1-plugins-generic-backup-generic-backup:index.tpl',
      1 => 1685017152,
      2 => 'plugins-1-plugins-generic-backup-generic-backup',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646f52611c74d6_11335496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.longdescription",'class'=>"notice"),$_smarty_tpl ) );?>
</div>

<?php $_smarty_tpl->_assignInScope('footNoteNum', 1);?>
<ul id="downloadLinks" data-message="<?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
">
	<li>
		<?php if ($_smarty_tpl->tpl_vars['isDumpConfigured']->value) {?>
			<a download href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"db"),$_smarty_tpl ) );?>
">
		<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.db"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['isDumpConfigured']->value) {?>
			</a>
		<?php } else { ?>
			<sup><?php echo $_smarty_tpl->tpl_vars['footNoteNum']->value;
$_smarty_tpl->_assignInScope('dumpFootNote', $_smarty_tpl->tpl_vars['footNoteNum']->value);
$_smarty_tpl->_assignInScope('footNoteNum', $_smarty_tpl->tpl_vars['footNoteNum']->value+1);?></sup>
		<?php }?>
	</li>
	<li>
		<?php if ($_smarty_tpl->tpl_vars['isTarConfigured']->value) {?>
			<a download href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"files"),$_smarty_tpl ) );?>
">
		<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.files"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['isTarConfigured']->value) {?>
			</a>
		<?php } else { ?>
			<sup><?php echo $_smarty_tpl->tpl_vars['footNoteNum']->value;
$_smarty_tpl->_assignInScope('tarFootNote', $_smarty_tpl->tpl_vars['footNoteNum']->value);
$_smarty_tpl->_assignInScope('footNoteNum', $_smarty_tpl->tpl_vars['footNoteNum']->value+1);?></sup>
		<?php }?>
	</li>
	<li>
		<?php if ($_smarty_tpl->tpl_vars['isTarConfigured']->value) {?>
			<a download href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"code"),$_smarty_tpl ) );?>
">
		<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.code"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['isTarConfigured']->value) {?>
			</a>
		<?php } else { ?>
			<sup><?php echo $_smarty_tpl->tpl_vars['tarFootNote']->value;?>
</sup>
		<?php }?>
	</li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['dumpFootNote']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.db.config",'footNoteNum'=>$_smarty_tpl->tpl_vars['dumpFootNote']->value),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['tarFootNote']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.backup.tar.config",'footNoteNum'=>$_smarty_tpl->tpl_vars['tarFootNote']->value),$_smarty_tpl ) );
}
}
}
