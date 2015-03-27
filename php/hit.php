<?php
function hit(){
	$query="SELECT `hit` FROM `visitor`";
if(@$run=mysql_query($query))
{
	$count=mysql_result($run,0,'hit');
	echo $count;
	$count++;
	$query2='UPDATE `srmgpa`.`visitor` SET `hit` = '."$count";
	mysql_query($query2);

}
}
?>