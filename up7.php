
<?PHP require_once ('login.php');

echo "<br/>";

$tax=$_POST['tax'];
$id = $_POST['id'];






   $query = "UPDATE reports1 	SET What = '$tax' 		WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
if ($query)
{

  echo "
  	<div align='center' class='container' >
  			  <div class='well'>
  
  تم التعديل بنجاح
  
  <head>
<meta http-equiv='Content-Language' content='ar-sa'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

</head>

<body topmargin='0' leftmargin='0' rightmargin='0' bottommargin='0' marginwidth='0' marginheight='0'  bgcolor='#F6F3D1'>
	
	<META HTTP-EQUIV='Refresh' CONTENT='4;URL=D_Note.php?id=$id'>	 ";
    

}

?>