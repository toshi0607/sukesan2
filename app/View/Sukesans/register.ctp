
<form method="post"
      action="<?php echo $this->Html->url("/sukesans/confirm"); ?>"
      enctype="multipart/form-data">

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
<!--
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
-->
	</head>
<body>

	<h1>
<?PHP echo $this->Html->image('logo.png', array('width'=>'250')); ?>
	</h1>

	<p>
		「助三」は、飲み会のお店候補をスピーディーに探すことができるツールです。<br>
		飲み会の条件を選択、入力して頂ければ、条件に合ったお店候補を3つご提案致します。<br>
		意外に時間がかかってしまうお店選びのサポートにぜひご利用ください。<br>
	</p><br>

	<form id="condition" action="cgi-bin/abc.cgi" method="post">
		<p>
			<label>メールアドレス：</label>
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-envelope"></i>
				</span>
				<input type="email" name="data[Condition][mail]" size="30" maxlength="40" required>
			</div>
		</p>

	<p><label>場所：<br><input type="text" name="data[Condition][location]" placeholder="例：東京駅" required></label></p>

	<p>
		<label>人数：</label>
			<select type="id" name="data[Condition][number]" >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11人以上</option>
		</select>
	</p>

	<p>
		<label>コース予算：</label>
			<select type="int" name="data[Condition][budget]">
				<option value="0">指定しない</option>
				<option value="1">〜¥2,999</option>
				<option value="2">¥3,000〜¥3,999</option>
				<option value="3">¥4,000〜¥4,999</option>
				<option value="4">¥5,000〜¥5,999</option>
				<option value="5">¥6,000〜</option>
			</select>
	</p>

	<p>
		<label>食べログの点数：</label>
			<select type="int" name="data[Condition][review]">
				<option value="0">指定しない</option>
				<option value="2.9">〜3.0</option>
				<option value="3.4">3.0〜3.4</option>
				<option value="3.9">3.4〜</option>
			</select>
	</p>

	<p>
		<label>条件：</label>
			<textarea id="condition" name="data[Condition][additional]" cols="40" rows="4" maxlength="20" placeholder="例：個室　中華　駅近　日本酒　飲み放題" require></textarea><br>
			※条件をスペースで区切ってください
	</p>

	<br><p><button class="btn btn-primary" type="submit" value="submit">検索！</button></p>

	</form>

</body>

</html>
</form>
