<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
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


<div  align='center'>
	<h1>
		<?= $this->Html->image('logo.png', array('width'=>'150')); ?>
	</h1>

	<p>
		「助三」は、日々成長を続けます。いつの間にか新機能が追加されているかもしれません。<br>
	</p>

<div style="text-align: left; margin-left: auto; margin-right: auto; width: 600px;">		
	<li>2014年4月12日　助三誕生（コンセプト）＠顧客開発×アジャイル　サービス集中特訓</li>
	<li>2014年5月４日　お店の条件をもらって人力で調べ、3店舗メール送付する日々
	<li>2014年5月７日　第１回報告会</li>
	<li>2014年5月10日　リリース（お店検索画面のみ）</li>
	<li>2014年6月12日　最終報告会　準優勝</li>
	<li>2014年7月27日　こっそりリリース</li>
	<li>2014年7月30日　ツイッター、いいね！ボタン設置</li>
	<li>2014年7月31日　LINEボタン（モバイル）追加<br>
	　　　　　　　　　助三を育てるためのアンケート追加<br>
	　　　　　　　　　コピーライト追記
	　　　　　　　　　ページタイトル修正
	</li>


</div>

<br><br>
<div>
	<form method="post" 
		action="<?= $this->Html->url("https://questant.jp/q/NP31YSA3"); ?>">
		<input name="check" type="submit" class="btn btn-danger" value="助三を育てるアンケートに回答する" />
	</form>
</div>



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

<br><br>
	<footer>
		<div  align="center">
			<p>Copyright &copy;  2014 助三 All Rights Reserved.</p>
		</div>
	</footer>
</body>




</html>
</form>
