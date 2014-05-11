<h3><strong>以下の内容で宜しいでしょうか？</strong></h3>

	<table>
    		<tr>
        	<th>メールアドレス</th>
        	<th>場所</th>
        	<th>条件</th>
    		</tr>

    		<td><?php echo h($this->request->data["Condition"]["mail"]); ?>
			</td>
			<br>
			<td><?php echo h($this->request->data["Condition"]["location"]); ?>
			</td>
			<br>
			<td><?php echo h($this->request->data["Condition"]["additional"]); ?>
			</td>
			<br>

	</table>
	
<form  action="./complete" method="post" >
 		<input type="submit" value="送信" >
</form>
