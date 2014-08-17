
<div  align="center">

<h2>お問い合せフォーム</h2>
 
<?php echo $this->Form->create('Inquiry'); ?>
<?php echo $this->Xformjp->input('Inquiry.title', array ( 'rows'  => '1', 'label' => 'タイトル' ) );?>
<?php echo $this->Xformjp->input('Inquiry.body',  array ( 'rows'  => '3', 'label' => '本文' ) );?>
<?php echo $this->Xformjp->input('Inquiry.mail',  array ( 'label' => 'メール' ) );?>
 
<?php
if ($this->params['xformHelperConfirmFlag']) {
  echo $this->Formhidden->hiddenVars();
  echo $this->Xformjp->submit('修正する', array(
    'name' => 'back',
    'div' => false));
  echo $this->Xformjp->submit('送信する', array(
    'name' => 'submit',
    'div' => false));
 
} else {
  echo $this->Xformjp->submit('入力内容を確認する', array(
    'name' => 'confirm'));
}
?>
 
<?php echo $this->Form->end() ;?>
<br>
	<form method="post" 
		action="<?= $this->Html->url("../sukesans/register"); ?>">
		<input name="check" type="submit" class="btn btn-primary" value="条件を変えてもう一度検索する" /></form>
	</form>
</div>