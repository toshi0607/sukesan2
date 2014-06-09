<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

	<p>サービスのご利用りがとうございました。以下の3店舗をご案内いたします。</p>

	<table class="table table-striped">
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

</body>
</html>