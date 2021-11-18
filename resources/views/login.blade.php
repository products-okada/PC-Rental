<!DOCTYPE HTML>
<html style= "position:absolute; top: 20%; left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);">
<head>
<meta http-equiv="content-type" content= "text/html; charset= utf-8">
<style type ="text/css">
   h1 { font-size:190%; color:#800000; }
</style>
<h1>モバイルPC貸出管理システム</h1>
</head>
<body style="text-align:center">
<p>名前を入力して「次へ」を押してください</p>
<form method=post>
    @csrf
<table border=1 style="text-align:center; margin:auto;">
	<tr>
		<th><input name="username" type="text" value="" placeholder="名前を入力"></th>
	</tr>
</table>
<input type="submit" value="次へ">
<input type="hidden" name="mode" value="login">
</form>
</body>
</html>

