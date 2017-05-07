<?php
//$myfile=fopen("test.txt","w")or die("open fail!");
//$txt=date("Y-m-d H:i:s")."start run\n";
//fwrite($myfile,$txt);
echo date('Y-m-d H:i:s')."start:\n";
require_once './system/system_init.php';
//global $schedule_data;
//$txt=NOW_TIME;
echo NOW_TIME;
echo"test1\n";
echo DB_PREFIX;
//fwrite($myfile,$txt);
//$GLOBALS['db']->query("start transaction");
//$schedule_data=$GLOBALS['db']->getRow("select * from ".DB_PREFIX."schedule_list where exec_status in (0,1) and exec_lock =0 and schedule_time <=".NOW_TIME." order by schedule_time asc limit 1");
//echo"\n";
//print_r("select * from ".DB_PREFIX."schedule_list where exec_status in (0,1) and exec_lock =0 and schedule_time <=".NOW_TIME."order by schedule_time asc limit 1");
//print_r($schedule_data);
//print_r("\nkkk!\n");
//print_r($schedule_data['id']);
//print_r($GLOBALS['db']);
//fwrite($myfile,$schedule_data);

//fclose($myfile);
//exit();
?>
