<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Write new story</title>
</head>

<body>
<form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
<table width="50%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td width="50%">Name</td>
<td><input name="name" type="text" id="name"></td>
</tr>
<tr> 
<td>Email</td>
<td><input name="email" type="email" id="email"></td>
</tr>
<tr> 
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr> 
<td>Headline</td>
<td><input name="headline" type="text" id="headline"></td>
</tr>
<tr> 
<td>News Story</td>
<td><textarea name="story" id="story"></textarea></td>
</tr>
<tr> 
<td colspan="2"><div align="center">
<input name="hiddenField" type="hidden" value="add_n">
<input name="add" type="submit" id="add" value="Submit">
</div></td>
</tr>
</table>
</form>
</body>
</html>