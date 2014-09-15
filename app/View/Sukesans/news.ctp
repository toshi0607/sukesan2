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
		<?= $this->Html->image('logo.png', array('width'=>'300')); ?>
	</h1>

	<p>
		「助三」は、日々成長を続けます。いつの間にか新機能が追加されているかもしれません。
	</p>

<br>

<div style="text-align: left; margin-left: auto; margin-right: auto; width: 600px;">		
<table class="table">
	<tr><th>2014年4月12日</th><td>助三誕生（コンセプト）＠顧客開発×アジャイル　サービス集中特訓</td></tr>
	<tr><th>2014年5月4日</th><td>お店の条件をもらって人力で調べ、3店舗メール送付する日々</td></tr>
	<tr><th>2014年5月7日</th><td>第1回報告会</td></tr>
	<tr><th>2014年5月10日</th><td>リリース（お店検索画面のみ）</td></tr>
	<tr><th>2014年5月10日</th><td>店舗情報出力のテキストエリア設置</td></tr>
	<tr><th>2014年5月27日</th><td>検索条件変更（人数、コース予算、食べログ点数）</td></tr>
	<tr><th>2014年6月9日</th><td>ロゴ変更<br>駅名による検索実装<br>検索結果表示実装</td></tr>	
	<tr><th>2014年6月12日</th><td>最終報告会　準優勝</td></tr>
	<tr><th>2014年7月5日</th><td>検索条件確認画面削除</td></tr>
	<tr><th>2014年7月9日</th><td>検索条件変更（利用シーン、絞り込み）</td></tr>
	<tr><th>2014年7月10日</th><td>検索結果の数に応じて再検索ボタンを変更</td></tr>
	<tr><th>2014年7月27日</th><td>新宿、渋谷、外苑前の店舗対応<br>こっそりリリース</td></tr>
	<tr><th>2014年7月30日</th><td>ツイッター、いいね！ボタン設置<br>検索結果が0のとき謝る</td></tr>
	<tr><th>2014年7月31日</th><td>LINEボタン（モバイル）追加<br>助三を育てるためのアンケート追加<br>コピーライト追記<br>ページタイトル修正<br>Newsページ追加</td></tr>
	<tr><th>2014年8月１日</th><td>アンケートリンク修正<br>ロゴの変更<br>リリース</td></tr>
	<tr><th>2014年8月14日</th><td>Newsページデザイン修正</td></tr>
	<tr><th>2014年8月18日</th><td>対象地域に新橋を追加</td></tr>
	<tr><th>2014年8月31日</th><td>対象地域大幅拡大（赤坂、六本木、銀座、恵比寿）<br>「予算」「駅名」以外の検索条件を「絞り込み」に一本化</td></tr>
	<tr><th>2014年9月15日</th><td>駅名検索→エリア検索に変更<br>締めのラーメン絞り込みの追加<br>検索結果画面の改善	
	</td></tr>	
</table>


</div>

<br><br>
<div>

	<form method="post" 
		action="<?= $this->Html->url("./register"); ?>">
		<input name="check" type="submit" class="btn btn-primary" value="助三で検索する" target="_blank"></form>
	</form>
	<input type="button" onclick="window.open('https://questant.jp/q/NP31YSA3')" target="_blank" value="助三を育てるアンケートに回答する" class="btn btn-danger"><br>
	※表示されにくい場合は再読み込みをお願いいたします。<br><br>
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
