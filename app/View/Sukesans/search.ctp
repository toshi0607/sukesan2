<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=1403251989943751&version=v2.0";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<!--<?php echo print_r($result); ?>-->

<?php
	if(count($result) > 0){ //該当する店舗があるとき?>

		<div  align="center">
			<p>サービスのご利用ありがとうございました。以下の店舗をご案内いたします。</p>




<!--<?php echo $shop; ?>-->




	<?php 
		if(count($result) > 3){//検索条件に該当する店舗が3店以上のとき。
			for($i = 0; $i < 3; $i++) { ?>

		<p>その<?= $i+1;?></p>
			<table class="table table-striped"  align="center">
				
				<tr>
					<th>お店</th>
					    <td display><?= h($result[$i]['Shop']['name']);?></td>
				</tr>
				<tr>
					<th>料理ジャンル</th>
						<td><?= h($result[$i]['Shop']['genre']);?></td>
				</tr>
				<tr>
					<th>オススメ用途</th>
					    <td><?= h($result[$i]['Shop']['purpose']);?></td>
				</tr>
				<tr>
					<th>イチオシ料理・酒</th>
						  <td><?= h($result[$i]['Shop']['recommendation']);?></td>
				</tr>
				<tr>
					<th>予算</th>
    					<td><?= h($result[$i]['Shop']['budget_min']);?>〜<?= h($result[$i]['Shop']['budget_max']);?>円</td>
    			</tr>
    			<tr>
					<th>URL</th>
						<td width="20"><a href="<?= h($result[$i]['Shop']['url'])?>" target="_blank">
    					<?= h($result[$i]['Shop']['url']);?></a></td>
    			</tr>
    			<tr>
					<th>場所</th>
						<td><?= h($result[$i]['Shop']['location']);?>駅</td>
				</tr>
				<tr>
					<th>特徴</th>
					     <td><?= h($result[$i]['Shop']['property']);?></td>
    			</tr>
			</table>
    	<?php } ?>
    	<br>

<!--同じ条件で他の店舗を表示させる-->
<!--
<form method="post" 
	action="<?= $this->Html->url("./search"); ?>">
	<input name="check" type="submit" class="btn" value="同じ条件の別店舗を探す" /></form>
-->


	<input type="button" onclick="window.open('https://questant.jp/q/NP31YSA3')" target="_blank" value="助三を育てるアンケートに回答する" class="btn btn-danger"><br>
	※表示されにくい場合は再読み込みをお願いいたします。<br><br>
	
	<form method="post" 
		action="<?= $this->Html->url("./register"); ?>">
		<input name="check" type="submit" class="btn btn-primary" value="別の条件で検索する" target="_blank"></form>
	</form>

	<br><br>


	<p>
	<p>
		<label>下記情報をコピーしてお使いください。</label>
			<textarea style="width: 500px; height: 150px">

	<?php for($i = 0; $i < 3; $i++){?>(<?= $i+1 ;?>)
お店：<?= h($result[$i]['Shop']['name']);?>

ジャンル：<?= h($result[$i]['Shop']['genre']);?>

お店情報：<?= h($result[$i]['Shop']['url']);?>

場所：<?= h($result[$i]['Shop']['location']);?>駅

特徴：<?= h($result[$i]['Shop']['property']);?>


	<?php } ?>
		</textarea>
	</p>

	<br>




	<?php } else {//検索条件に該当する店舗が3店未満のとき。
			for($i = 0; $i < count($result); $i++) { ?>


		<p>その<?= $i+1;?></p>
			<table class="table table-striped"  align="center">
				
				<tr>
					<th>お店</th>
					    <td display><?= h($result[$i]['Shop']['name']);?></td>
				</tr>
				<tr>
					<th>料理ジャンル</th>
						<td><?= h($result[$i]['Shop']['genre']);?></td>
				</tr>
				<tr>
					<th>オススメ用途</th>
					    <td><?= h($result[$i]['Shop']['purpose']);?></td>
				</tr>
				<tr>
					<th>イチオシ料理・酒</th>
						  <td><?= h($result[$i]['Shop']['recommendation']);?></td>
				</tr>
				<tr>
					<th>予算</th>
    					<td><?= h($result[$i]['Shop']['budget_min']);?>〜<?= h($result[$i]['Shop']['budget_max']);?>円</td>
    			</tr>
    			<tr>
					<th>URL</th>
						<td width="20"><a href="<?= h($result[$i]['Shop']['url'])?>" target="_blank">
    					<?= h($result[$i]['Shop']['url']);?></a></td>
    			</tr>
    			<tr>
					<th>場所</th>
						<td><?= h($result[$i]['Shop']['location']);?>駅</td>
				</tr>
				<tr>
					<th>特徴</th>
					     <td><?= h($result[$i]['Shop']['property']);?></td>
    			</tr>
			</table>
    	<?php } ?>
    	<br>

<!--条件をゆるくしてもう一度検索させる-->

	<form method="post" 
		action="<?= $this->Html->url("https://questant.jp/q/NP31YSA3"); ?>">
		<input name="check" type="submit" class="btn btn-danger" value="助三を育てるアンケートに回答する" /></form>
	<form method="post" 
		action="<?= $this->Html->url("./register"); ?>">
		<input name="check" type="submit" class="btn btn-primary" value="条件を変えてもう一度検索する" /></form>
	</form>


	<p>
		<label>下記情報をコピーしてお使いください。</label>
			<textarea onmouseover="this.select()" style="width: 500px; align: left: height: 150px" >
	<?php for($i = 0; $i < count($result); $i++){?>
	(<?= $i+1 ;?>)
	お店：<?= h($result[$i]['Shop']['name']);?>

	ジャンル：<?= h($result[$i]['Shop']['genre']);?>

	お店情報：<?= h($result[$i]['Shop']['url']);?>

	場所：<?= h($result[$i]['Shop']['location']);?>駅

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


	<?php } else {?>

		<div  align="center">
			<p> 検索条件に該当する店舗が見つかりませんでした。<br>
				申し訳ございません。<br>
				店舗は助三が厳選して増やして参りますので、気長にお待ちください。<br>
				ご意見・ご要望はいつでもお待ちしております。<br>
				sukesan2014@gmail.com<br>
			</p>

<br><br>
	<form method="post" 
		action="<?= $this->Html->url("https://questant.jp/q/NP31YSA3"); ?>">
		<input name="check" type="submit" class="btn btn-danger" value="助三を育てるアンケートに回答する" /></form>
	<form method="post" 
		action="<?= $this->Html->url("./register"); ?>">
		<input name="check" type="submit" class="btn btn-primary" value="条件を変えてもう一度検索する" /></form>
	</form>

	</div>

	<?php } ?>


<div  align="center" style="float:center;">

	<span>
		<script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
		<script type="text/javascript">
			new media_line_me.LineButton({"pc":false,"lang":"ja","type":"a","text":"飲み会幹事向け検索サービス「助三」を使ってみる！","withUrl":true});
		</script>
	</span>
	<a href="https://twitter.com/share" class="twitter-share-button" data-text="飲み会幹事向け検索サービス「助三」を使ってみる！" data-via="sukesan2014" data-lang="ja">ツイート</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<div class="fb-like" data-href="http://toshi0607.sakura.ne.jp/sukesan/sukesans/register" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>

<br><br>

</div>
	<footer>
		<div  align="center">
			<p>Copyright &copy;  2014 助三 All Rights Reserved.</p>
		</div>
	</footer>
</body>
</html>