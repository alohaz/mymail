<html>
<head><title>testContct</title></head>
<body>

<table width="450" border="0" align-"center" cellpadding="3" cellspacing="1">
	<tr>
		<td>ContactForm</td>
	</tr>
</table>

<table width="450" border="0" align-"center" cellpadding="0" cellspacing="1">
	<tr>
		<td>
		<form name="form1" method="post" action="sendContact.php">
		<table width="100" border="0" align-"center" cellpadding="3" cellspacing="1">
			<tr>
				<td width="16%">Subject</td>
				<td width="2%">:</td>
				<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
			</tr>
			
			<tr>
				<td>Detail</td>
				<td>:</td>
				<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
			</tr>
			
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" id="name" size="50"></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
			</tr>
			
			<tr>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td><input type="submit" name="submit" value="Submit"><input type="reset" name="submit" value="Reset"></td>
			</tr>
			
		</table>
		</form>
		</td>
	</tr>
</table>

</body>
</html>
