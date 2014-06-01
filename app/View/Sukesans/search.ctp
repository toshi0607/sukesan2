<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

	<p>サービスのご利用りがとうございました。以下の3店舗をご提案いたします。</p>

	<table>
		<tr>
			<th>お店</th>
			<th>料理ジャンル</th>
			<th>コース予算</th>
			<th>食べログ評価</th>
			<th>URL</th>
			<th>場所</th>
			<th>特徴</th>
    	</tr>
    </table>

<?php  echo h($result[0]['Shop']['name']);?>

<?php for ($i = 0; $i < $result; $i++) { ?>

	<tr>
    	<td><?php echo h($result[$i]['Shop']['name']); ?></td>
    	<td><?php echo h($result[$i]['Shop']['genre']); ?></td>
    	<td><?php echo h($result[$i]['Shop']['budget']); ?></td>
    	<td><?php echo h($result[$i]['Shop']['review']); ?></td>
    	<td><?php echo h($mresul[$i]['Shop']['url']); ?></td>
     	<td><?php echo h($result[$i]['Shop']['location']); ?></td>
     	<td><?php echo h($result[$i]['Shop']['property']); ?></td>
    </tr>
<?php } ?>


<form method="post" 
	action="<?php echo $this->Html->url("./register"); ?>">
	<input name="check" type="submit" value="検索画面に戻る" /></form>
</form>

</body>
</html>