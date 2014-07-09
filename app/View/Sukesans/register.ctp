
<form method="post"
      action="<?= $this->Html->url("/sukesans/search"); ?>"
      enctype="multipart/form-data"
      align='center'>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
<body>

	<h1>
<?= $this->Html->image('logo.png', array('width'=>'150')); ?>
	</h1>

	<p>
		「助三」は、飲み会のお店候補をスピーディーに探すことができるツールです。<br>
		飲み会の条件を選択、入力して頂ければ、条件に合ったお店候補を3つご提案致します。<br>
		意外に時間がかかってしまうお店選びのサポートにぜひご利用ください。<br>
	</p><br>

	<form action="cgi-bin/abc.cgi" method="post">
	<!--	
		<p>
			<label>メールアドレス：</label>
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-envelope"></i>
				</span>
				<input type="email" name="data[Condition][mail]" size="30" maxlength="40" required>
			</div>
		</p>
	-->

	<p><label>最寄り駅：<br>
		<select type="text" name="data[Condition][location]"  required></label>
				<option value="渋谷" selected="selected">渋谷</option>
				<option value="新橋">新橋</option>
		</select>
		駅
	</p>

	<p>
		<label>予算：</label>
			<select type="int" name="data[Condition][budget_min]">
				<option value="0" selected="selected">指定しない</option>
				<option value="1000">¥1,000</option>
				<option value="2000">¥2,000</option>
				<option value="3000">¥3,000</option>
				<option value="4000">¥4,000</option>
				<option value="5000">¥5,000</option>
				<option value="6000">¥6,000</option>
				<option value="8000">¥8,000</option>
				<option value="10000">¥10,000</option>
				<option value="15000">¥15,000</option>
				<option value="20000">¥20,000</option>
			</select>
				〜
			<select type="int" name="data[Condition][budget_max]">
				<option value="100000" selected="selected">指定しない</option>
				<option value="1000">¥1,000</option>
				<option value="2000">¥2,000</option>
				<option value="3000">¥3,000</option>
				<option value="4000">¥4,000</option>
				<option value="5000">¥5,000</option>
				<option value="6000">¥6,000</option>
				<option value="8000">¥8,000</option>
				<option value="10000">¥10,000</option>
				<option value="15000">¥15,000</option>
				<option value="20000">¥20,000</option>
			</select>
	</p>


	<p><label>利用シーン：<br>
		<select type="text" name="data[Condition][purpose]"  required></label>
				<option value="仮" selected="selected">仮</option>
				<option value="仮" >指定しない</option>
				<option value="接待">接待</option>
				<option value="外国人接待">外国人接待</option>
				<option value="社内飲み">社内飲み</option>
				<option value="のんべえ向け">のんべえ向け</option>
		</select>
	</p>

<!--
	<p>
		<label>利用シーン：</label>
			<input type="checkbox" name="data[Condition][purpose]" value="接待">接待
			<input type="checkbox" name="data[Condition][purpose]" value="外国人接待">外国人接待
			<input type="checkbox" name="data[Condition][purpose]" value="社内飲み">社内飲み
			<input type="checkbox" name="data[Condition][purpose]" value="のんべえ向け">のんべえ向け
	</p>
-->
<br>
	<p>
		<label>絞り込み：</label>
			<select type="int" name="data[Condition][occupation]">
				<option value="0" >指定しない</option>
				<option value="商社" selected="selected">商社マンオススメ</option>
			</select>
	</p>
	



	<br><p><button class="btn btn-primary" type="submit" value="submit">検索</button></p>

	</form>

</body>

</html>
</form>
