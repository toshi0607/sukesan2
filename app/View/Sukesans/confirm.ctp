<div  align="center">

<p>
	<h3>以下の内容で宜しいでしょうか？</h3>
</p>

	<table class="table table-striped">
    	<tr>
        	<th>メールアドレス</th>
        	<th>場所</th>
        	<th>条件</th>
    	</tr>

    	<tr>
    		<td><?php echo h($this->request->data["Condition"]["mail"]);?></td>
			<td><?php echo h($this->request->data["Condition"]["location"]);?></td>
			<td><?php echo h($this->request->data["Condition"]["additional"]);?></td>
		</tr>
	</table>
<br>

<form  action="./search" method="post" >
 		<input type="submit" class="btn btn-primary" value="検索" >
</form>

</div>
