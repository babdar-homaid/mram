
<?PHP require_once ('login.php');

@$page = $_GET['page'];
$s=0;
echo "<html dir='rtl'>

<head>
<div id=\"divv\"></div>

 <div id='show'>
 
<br/>
<div align='center' class='container' >
	 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">استعراض التقييم   <i class=\"fa fa-folder-open-o	Try it

\"></i>
     
</a></li>
  
  </ul>
<table  class='table table-striped'  border='1'>
	<tr>
		<td id='max'>م</td>

		<td > السلوكيات</td>

		
		
	
		
<td id='max'>عرض</td>
             



	
	</tr>";
	
	        function GetTotalDay($date55)
{
        list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
        
############## page config ###############
include 'pager.class.php';
$perpage = 100; // عدد النتائج في كل صفحة
$mode = 1; // طريقة العر : 1=مختصرة , 2=تفصيلية
$next = 1; // لعرض زر التالى
$prev = 1; // لعرض زر السابق
$end = 1; // لعرض زر أخر صفحة
$start = 1; // لعرض زر أول صفحة
$query = mysql_query("select * from Sector ");
$total = mysql_num_rows($query);
##########################################
// لطباعة العداد
@$pager = new full_pager($page, $perpage, $total, $mode, $next, $prev, $end, $start,
    $tools);
// نهاية الطباعة


$sql1 = "select * from Sector   ORDER BY `id` DESC  LIMIT " . ($pager->page - 1) * $perpage .
    "," . $perpage;
$row1 = mysql_query($sql1);

while ($lin = mysql_fetch_array($row1)) {
$s++;
    $name = $lin['name'];


   $days = GetTotalDay($daten);

   $daten1 = GetTotalDay($daten);


   $sum = $daten1;

  if ($daten1 <=0 ){
  	$days1 = "مغلق ";
    $sum = "مغلق ";
  	}
$clar10 = "id='a200' ";
$cp11="";

  if ($xd==4 ){
  	$xd = "أفاد الموظف ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

  if ($xd==1 or !$xd  ){
  	$xd = "انتظار ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

           if ($xd=='تم الرد' ){

    $clar10 = " bgcolor='#00FF00' ";

         }
                    if ($xd=='لم ينجز' ){

    $clar10 = " bgcolor='#FF0000' ";

         }
                    if ($xd=='تأجل' ){

    $clar10 = " bgcolor='#FFFF00' ";

         }

    echo "
	
	
	
		<tr>
			<td id='max'>$s&nbsp; </td>
				<td > $name&nbsp; </td>

		
		
	

			
        
                <td > <a href='Behaviors1.php?id=$name' >  انقر  هنا</td>
        




	
	
	</tr>";

}
echo"</table>";



?>
<script>
$(document).ready(function(){
	
    $('[data-toggle="popover"]').popover(); 
    
 
});

</script>
</div>
</div>
</div>
</div>

</body>
</html>
