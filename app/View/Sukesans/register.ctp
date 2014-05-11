
<form method="post"
      action="<?php echo $this->Html->url("/sukesans/confirm"); ?>"
      enctype="multipart/form-data">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
</head>


<body>

	<h1>
		<p><img src="logo.png"></p>
	</h1>
		飲み会予約、もう困らない！


	<form id="condition" action="cgi-bin/abc.cgi" method="post">
		<p><label>メールアドレス：<input type="email" name="data[Condition][mail]" size="30" maxlength="40" required></label></p>


	<p><label>場所：<input type="text" name="data[Condition][location]" placeholder="例：東京駅" required></label></p>

<p>
	<label>条件：</label><br>
		<textarea id="condition" name="data[Condition][additional]" cols="40" rows="4" maxlength="20" placeholder="例：個室5人　中華　5000円以内　駅近　日本酒　飲み放題" require></textarea>
</p>

	<p><input type="submit" value="Go!!!!!!"></p>


	</form>

</body>

</html>
</form>
