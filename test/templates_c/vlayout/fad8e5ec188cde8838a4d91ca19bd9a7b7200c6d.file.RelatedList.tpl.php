<?php /* Smarty version Smarty-3.1.7, created on 2017-02-22 07:04:19
         compiled from "C:\xampp\htdocs\crm6\includes\runtime/../../layouts/vlayout\modules\PriceBooks\RelatedList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2917258ad37f3489c29-73248713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad8e5ec188cde8838a4d91ca19bd9a7b7200c6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm6\\includes\\runtime/../../layouts/vlayout\\modules\\PriceBooks\\RelatedList.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2917258ad37f3489c29-73248713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGING' => 0,
    'RELATED_MODULE' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'RELATED_ENTIRES_COUNT' => 0,
    'TOTAL_ENTRIES' => 0,
    'RELATED_LIST_LINKS' => 0,
    'RELATED_LINK' => 0,
    'IS_SELECT_BUTTON' => 0,
    'RELATED_RECORDS' => 0,
    'PAGE_COUNT' => 0,
    'moduleName' => 0,
    'USER_MODEL' => 0,
    'RELATED_HEADERS' => 0,
    'COLUMN_NAME' => 0,
    'HEADER_FIELD' => 0,
    'NEXT_SORT_ORDER' => 0,
    'SORT_IMAGE' => 0,
    'RELATED_RECORD' => 0,
    'WIDTHTYPE' => 0,
    'RELATED_HEADERNAME' => 0,
    'MODULE' => 0,
    'PARENT_RECORD' => 0,
    'LISTPRICE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58ad37f35f1ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad37f35f1ed')) {function content_58ad37f35f1ed($_smarty_tpl) {?>
<div class="relatedContainer"><input type="hidden" name="currentPageNum" value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getCurrentPage();?>
" /><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value;?>
" id="noOfEntries"><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getPageLimit();?>
" id='pageLimit'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_ENTRIES']->value;?>
" id='totalCount'><div class="relatedHeader "><div class="btn-toolbar row-fluid"><div class="span6"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><div class="btn-group"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_selectRelation');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['IS_SELECT_BUTTON'] = new Smarty_variable($_tmp1, null, 0);?><button type="button" class="btn<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==true){?> selectRelation <?php }?> "<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==true){?> data-moduleName=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_module')->get('name');?>
 <?php }?><?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->isPageLoadLink()){?>onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
'"<?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value==false){?><i class="icon-plus"></i><?php }?>&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
</strong></button></div><?php } ?>&nbsp;</div><div class="span6"><div class="pull-right"><div class="pageNumbers"><span class="pageNumbersText"><?php if (!empty($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value)){?> <?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getRecordStartRange();?>
 <?php echo vtranslate('LBL_to',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getRecordEndRange();?>
<?php }else{ ?><span>&nbsp;</span><?php }?></span><span class="icon-refresh pull-right totalNumberOfRecords cursorPointer<?php if (empty($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value)){?> hide<?php }?>"></span></div><div class="span4"><span class="btn-group pull-right"><button class="btn" id="relatedListPreviousPageButton" <?php if (!$_smarty_tpl->tpl_vars['PAGING']->value->isPrevPageExists()){?> disabled="disabled" <?php }?> type="button"><span class="icon-chevron-left"></span></button><button class="btn dropdown-toggle" type="button" id="relatedListPageJump" data-toggle="dropdown" <?php if ($_smarty_tpl->tpl_vars['PAGE_COUNT']->value==1){?> disabled <?php }?>"><i class="vtGlyph vticon-pageJump" title="<?php echo vtranslate('LBL_LISTVIEW_PAGE_JUMP',$_smarty_tpl->tpl_vars['moduleName']->value);?>
"></i></button><ul class="listViewBasicAction dropdown-menu" id="relatedListPageJumpDropDown"><li><span class="row-fluid"><span class="span3"><span class="pull-right"><?php echo vtranslate('LBL_PAGE',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></span><span class="span4"><input type="text" id="pageToJump" class="listViewPagingInput" value="<?php echo $_smarty_tpl->tpl_vars['PAGING']->value->getCurrentPage();?>
"/></span><span class="span2 textAlignCenter"><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span><span class="span3" id="totalPageCount"><?php echo $_smarty_tpl->tpl_vars['PAGE_COUNT']->value;?>
</span></span></li></ul><button class="btn" id="relatedListNextPageButton" <?php if ((!$_smarty_tpl->tpl_vars['PAGING']->value->isNextPageExists())||($_smarty_tpl->tpl_vars['PAGE_COUNT']->value==1)){?> disabled="disabled" <?php }?> type="button"><span class="icon-chevron-right"></span></button></span></div></div></span></div></div></div><div class="contents-topscroll"><div class="topscroll-div">&nbsp;</div></div><div class="relatedContents contents-bottomscroll"><div class="bottomscroll-div"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php  $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->key => $_smarty_tpl->tpl_vars['HEADER_FIELD']->value){
$_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
?><th nowrap <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last){?> colspan="2" <?php }?>><a href="javascript:void(0);" class="relatedListHeaderValues" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name')){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"><?php }?></a></th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['RELATED_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->key => $_smarty_tpl->tpl_vars['RELATED_RECORD']->value){
$_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['BASE_CURRENCY_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getBaseCurrencyDetails(), null, 0);?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
' data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'><?php  $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->key => $_smarty_tpl->tpl_vars['HEADER_FIELD']->value){
$_smarty_tpl->tpl_vars['HEADER_FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
?><?php $_smarty_tpl->tpl_vars['RELATED_HEADERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name'), null, 0);?><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name')=='listprice'){?><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name'));?>
<?php $_smarty_tpl->tpl_vars["LISTPRICE"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('name')), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField()==true||$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('uitype')=='4'){?><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last){?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="pull-right actions"><span class="actionImages"><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getFullDetailViewUrl();?>
"><i title="<?php echo vtranslate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-th-list alignMiddle"></i></a>&nbsp;<a data-url="index.php?module=PriceBooks&view=ListPriceUpdate&record=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId();?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
&currentPrice=<?php echo $_smarty_tpl->tpl_vars['LISTPRICE']->value;?>
"class="editListPrice cursorPointer" data-related-recordid='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
' data-list-price=<?php echo $_smarty_tpl->tpl_vars['LISTPRICE']->value;?>
><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></a><a class="relationDelete"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle"></i></a></span></div></td><?php }?></td><?php } ?></tr><?php } ?></table></div></div></div>
<?php }} ?>