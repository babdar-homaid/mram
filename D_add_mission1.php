		
<?PHP require_once ('login.php');

echo "<div align='center' class='container' >";

 function mum($name_select,$name_select1,$num1)
 {
  echo "

 	
 
$name_select1
  <div class='form-group input-group-lg'>
<select name='$name_select' id ='elect' class='input-block-level'>";
for ($i=1; $i <$num1 ; $i++) { 
	echo "	<option value='$i'>$i</option>";	
}
echo"</select>";   
 }
 

echo "
<div id='divv'></div>
<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> تقييم شعبة  <i class=\"fa fa-thumbs-o-up	Try it
\"></i>
    </a></li>
  
  </ul>


<form id='update1' >
	
  <div class='well'>

 	  <div class='form-group '>




<div class='well' style=\"background-color: #F7F7F9\">


     <br />
الشعبة
<br />
<select name='D_sector' id ='elect' class='input-block-level'>
";
$query_555554 = "  SELECT name FROM `D_sector` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>
";

}
echo "</select>
";
echo "




السلوكيات

      


<br />
<select name='date3e' id ='elect' class='input-block-level'>
";
$query_555554 = "  SELECT name FROM `Sector` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>
";

}
echo "</select>
";
error_reporting(E_STRICT);
    $time_start = microtime(true);

    date_default_timezone_set('Asia/Riyadh');
    $time = time();

    include('../Arabic.php');
    $Arabic = new Arabic('ArDate');

    $correction = $Arabic->dateCorrection ($time);
    
    $date20=$Arabic->date('h:i:s ', $time, $correction);
mum("date1e","الدرجة",6);
                             

 echo"</div></div></div>";

	echo "
	<input  value=\"$date20\" name=\"date20\"  type='hidden'>

	<input id='bupdate1' type='button' class='btn btn-large btn-block'  value='تقييم' />
	
	
	

</form>


 ";
?>
<div id ='lo' ></div>