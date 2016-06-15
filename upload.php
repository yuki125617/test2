<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>檔案上傳</title>
</head>
<body>
<?php
  $uploaddir="C:/upload/";
  $tmpfile=$_FILES["upload"]["tmp_name"];
  $file2=$_FILES["upload"]["name"];
  if(move_uploaded_file($tmpfile, $uploaddir.$file2)){
  	echo "上傳成功<br/>";
  	echo "檔案名稱:".$_FILES["upload"]["name"]."<br/>";
  	echo "檔案類型:".$_FILES["upload"]["type"]."<br/>";
  	echo "檔案大小:".$_FILES["upload"]["size"]."<br/>";
  }else{
  	echo "上傳失敗<br/>";
  	echo "失敗原因:".$_FILES["upload"]["error"]."<br/>";
  }
?>
</body>
</html>