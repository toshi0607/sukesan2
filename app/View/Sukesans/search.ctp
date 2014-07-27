<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

<div  align="center">
	<p>サービスのご利用ありがとうございました。以下の店舗をご案内いたします。</p>

	<table class="table table-striped"  align="center">
		<tr>
			<th>お店</th>
			<th>料理ジャンル</th>
			<th>オススメ用途</th>
			<th>イチオシ料理・酒</th>
			<th>予算</th>
			<!--<th>食べログ評価</th>-->
			<th>URL</th>
			<th>場所</th>
			<th>特徴</th>
    	</tr>

<!--<?php echo print_r($test); ?>-->
<!--<?php echo $test; ?>-->


<?php 
	if(count($result) > 3){//検索条件に該当する店舗が3店以上のとき。
		for($i = 0; $i < 3; $i++) { ?>

			<tr>
    			<td><?= h($result[$i]['Shop']['name']);?></td>
    			<td><?= h($result[$i]['Shop']['genre']);?></td>
    			<td><?= h($result[$i]['Shop']['purpose']);?></td>
    			<td><?= h($result[$i]['Shop']['recommendation']);?></td>
    			<td><?= h($result[$i]['Shop']['budget_min']);?>〜<?= h($result[$i]['Shop']['budget_max']);?>円</td>
    			<!--<td><?= h($result[$i]['Shop']['review']);?></td>-->
    			<td><a href="<?= h($result[$i]['Shop']['url'])?>" target="_blank">
    				<?= h($result[$i]['Shop']['url']);?></a></td>
     			<td><?= h($result[$i]['Shop']['location']);?></td>
     			<td><?= h($result[$i]['Shop']['property']);?></td>
    		</tr>
    	<?php } ?>
	</table>
<br>


<!--同じ条件で他の店舗を表示させる-->
<!--
<form method="post" 
	action="<?= $this->Html->url("./search"); ?>">
	<input name="check" type="submit" class="btn" value="同じ条件の別店舗を探す" /></form>
-->
<form method="post" 
	action="<?= $this->Html->url("./register"); ?>">
	<input name="check" type="submit" class="btn" value="別の条件で検索する" /></form>
</form>

<br><br>


<p>
<p>
	<label>下記情報をコピーしてお使いください。</label>
		<textarea style="width: 500px; height: 150px">

<?php for($i = 0; $i < 3; $i++){?>
(<?= $i+1 ;?>)
お店：<?= h($result[$i]['Shop']['name']);?>

ジャンル：<?= h($result[$i]['Shop']['genre']);?>

お店情報：<?= h($result[$i]['Shop']['url']);?>

場所：<?= h($result[$i]['Shop']['location']);?>

特徴：<?= h($result[$i]['Shop']['property']);?>


<?php } ?>
		</textarea>
</p>

<br>




<?php } else {//検索条件に該当する店舗が3店未満のとき。
		for($i = 0; $i < count($result); $i++) { ?>

			<tr>
    			<td><?= h($result[$i]['Shop']['name']);?></td>
    			<td><?= h($result[$i]['Shop']['genre']);?></td>
    			<td><?= h($result[$i]['Shop']['purpose']);?></td>
    			<td><?= h($result[$i]['Shop']['recommendation']);?></td>
    			<td><?= h($result[$i]['Shop']['budget_min']);?>〜<?= h($result[$i]['Shop']['budget_max']);?>円</td>
    			<!--<td><?= h($result[$i]['Shop']['review']);?></td>-->
    			<td><a href="<?= h($result[$i]['Shop']['url'])?>" target="_blank">
    				<?= h($result[$i]['Shop']['url']);?></a></td>
     			<td><?= h($result[$i]['Shop']['location']);?></td>
     			<td><?= h($result[$i]['Shop']['property']);?></td>
    		</tr>
    	<?php } ?>
	</table>
<br>

<!--条件をゆるくしてもう一度検索させる-->


<form method="post" 
	action="<?= $this->Html->url("./register"); ?>">
	<input name="check" type="submit" class="btn" value="条件を変えてもう一度検索する" /></form>
</form>

<p>
<p>
	<label>下記情報をコピーしてお使いください。</label>
		<textarea style="width: 500px; height: 150px">

<?php for($i = 0; $i < count($result); $i++){?>
(<?= $i+1 ;?>)
お店：<?= h($result[$i]['Shop']['name']);?>

ジャンル：<?= h($result[$i]['Shop']['genre']);?>

お店情報：<?= h($result[$i]['Shop']['url']);?>

場所：<?= h($result[$i]['Shop']['location']);?>

特徴：<?= h($result[$i]['Shop']['property']);?>


<?php } ?>
		</textarea>
</p>

<br>

<?php } ?>




<p>
	操作手順<br>
	①テキストを全選択　　　　　　（Windows:Ctrl+A／Mac:command+A）<br>
	②テキストをコピー　　　　　　（Windows:Ctrl+C／Mac:command+C）<br>
	③テキストをメール本文に貼付け（Windows:Ctrl+V／Mac:command+V）<br>
</p>


</div>
</body>
</html>