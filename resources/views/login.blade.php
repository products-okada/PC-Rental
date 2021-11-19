<!DOCTYPE HTML>
<html style= "position:absolute; top: 40%; left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);">
<head>
<meta http-equiv="content-type" content= "text/html; charset= utf-8">
<style type ="text/css">
   h1 { font-size:250%; color:#000000; }
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
<br></br>
<input type="submit" value="次へ" class="button" style= "display :inline-block;
  border-radius : 13%; 
  font-size     : 18pt; 
  text-align    : center;
  cursor        : pointer; 
  padding       : 12px 12px;  
  background    : #5900b3; 
  color         : #ffffff;
  line-height   : 1em; 
  transition    : .3s; 
  box-shadow    : 1px 1px 3px #666666;
  border        : 2px solid #5900b3; ">
<input type="hidden" name="mode" value="login" >
</form>
</body>
</html>

