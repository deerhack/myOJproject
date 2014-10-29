<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div class="nav">
	<div class="navhead">
		<?php require_once("oj-header.php");?>
        </div>
	<div class="navbody">

<table width=100% align=center style="text-align:center;font-size:14px;">	
<tr id=htr>
	<th>OJ</th>
	<th>Name</th>
	<th>Start Time</th>
	<th>Week</th>
	<th>Access</th>
</tr>

<tr class="row-hover">
<?php
$odd=true;
 foreach($rows as $row) {
   $odd=!$odd;
?>
  <tr class="<?php echo $odd?"tl":"tl_1"  ?>" >
		<td class="column-1"><?php echo$row['oj']?></td><td class="column-2"><a id="name_<?php echo$row['id']?>" href="<?php echo$row['link']?>" target="_blank"><?php echo$row['name']?></a></td><td class="column-3"><?php echo$row['start_time']?></td><td class="column-4"><?php echo$row['week']?></td><td class="column-5"><?php echo$row['access']?></td>
	</tr>
<?php } ?>
</tr>

</table>
<div class="font" align=center>DataSource:http://contests.acmicpc.info/contests.json  Spider Author:<a href="http://contests.acmicpc.info" >doraemonok</a></div>
</div>
<div class=foot>
	<?php require_once("oj-footer.php");?>

</div><!--end foot-->
</div><!--end wrapper-->
</body>
</html>
