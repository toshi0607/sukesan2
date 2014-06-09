<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

<div  align="center">
	<p>サービスのご利用ありがとうございました。以下の3店舗をご案内いたします。</p>

	<table class="table table-striped"  align="center">
		<tr>
			<th>お店</th>
			<th>料理ジャンル</th>
			<th>コース予算</th>
			<th>食べログ評価</th>
			<th>URL</th>
			<th>場所</th>
			<th>特徴</th>
    	</tr>

<!--<?php echo print_r($test); ?>-->
<!--<?php echo $test; ?>-->

<?php for($i = 0; $i < 3; $i++) { ?>

			<tr>
    			<td><?php echo h($result[$i]['Shop']['name']);?></td>
    			<td><?php echo h($result[$i]['Shop']['genre']);?></td>
    			<td><?php echo h($result[$i]['Shop']['budget']);?></td>
    			<td><?php echo h($result[$i]['Shop']['review']);?></td>
    			<td><a href="<?php echo h($result[$i]['Shop']['url'])?>" target="_blank"><?php echo h($result[$i]['Shop']['url']);?></a></td>
     			<td><?php echo h($result[$i]['Shop']['location']);?></td>
     			<td><?php echo h($result[$i]['Shop']['property']);?></td>
    		</tr>
<?php } ?>
	</table>
<br>

<form method="post" 
	action="<?php echo $this->Html->url("./register"); ?>">
	<input name="check" type="submit" class="btn" value="検索画面に戻る" /></form>
</form>

<br><br>


<p>
<p>
	<label>下記情報をコピーしてお使いください。</label>
		<textarea style="width: 500px; height: 150px">

<?php for($i = 0; $i < 3; $i++){?>
(<?php echo $i+1 ;?>)
お店：<?php echo h($result[$i]['Shop']['name']);?>

ジャンル：<?php echo h($result[$i]['Shop']['genre']);?>

平均予算：<?php echo h($result[$i]['Shop']['budget']);?>

お店情報：<?php echo h($result[$i]['Shop']['url']);?>

食べログ評価：<?php echo h($result[$i]['Shop']['review']);?>点
場所：<?php echo h($result[$i]['Shop']['location']);?>

特徴：<?php echo h($result[$i]['Shop']['property']);?>


<?php } ?>
		</textarea>
</p>

<br>

<p>
	操作手順<br>
	①テキストを全選択　　　　　　（Windows:Ctrl+A／Mac:command+A）<br>
	②テキストをコピー　　　　　　（Windows:Ctrl+C／Mac:command+C）<br>
	③テキストをメール本文に貼付け（Windows:Ctrl+V／Mac:command+V）<br>
</p>


</div>
</body>
</html>