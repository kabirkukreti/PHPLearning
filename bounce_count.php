<?php
$options_array = array("dbname:" , "type:" , "from_date:","to_date:","msgids:");

$options = getopt("",$options_array);

echo "Before if options:\n";
var_dump($options);
if (count($options) < 2){
	echo "Usage: \t".$_SERVER['PHP_SELF']." --dbname <dbname> --type <hard/soft/all> --from_date <yyyy-dd-mm hh:mm:ss> (optional) --to_date <yyyy-dd-mm hh:mm:ss> (optional) --msgids <comma separated msgids> (optional)";
	exit();
}
echo "Options supplied: \n";
var_dump($options);
$db = $options["dbname"];
$type = $options["type"];

$current_date = date('Y-m-d H:i:s');
if (array_key_exists("from_date", $options)) {
	$from_date = $options["from_date"];
}else {
	$from_date = "0000-00-00 00:00:00";
}

if (array_key_exists("to_date", $options)) {
	$to_date = $options["to_date"];
}else {
	$to_date = $current_date;
}




echo "From date: ".$from_date." To date: ".$to_date."\n";

$date_array = explode(" ", $current_date);

// $database_host = file_get_contents('/etc/database_host');
// list($host,$user,$pass) = array($database_host,'root','');

// Better folder name ?
// $folder_name = $date_array[0]."_".$database_host;
// $save_path = "/tmp/$folder_name";
// if (!(file_exists($folder_name))) {
// 	mkdir($folder_name,0777,TRUE);
// }
// $filename = $save_path."/bounce_report".$type."csv";

// $sql_conn = mysqli_connect($host,$user,$pass,$db);
$sql_query = "select U.email from phplist_user_message_bounce M, phplist_bounce  B,phplist_user_user U where M.time between '".$from_date."' and '".$to_date."' and M.bounce = B.id and M.user = U.id";

// echo $sql_query; 
// $query_result = mysqli_query($sql_conn,$sql_query);

// Construct the SQL query
echo $sql_query;
print_r($options);
if (array_key_exists("msgids", $options)){
	echo $sql_query ."==";
	$sql_query = $sql_query." and M.message in (".$options["msgids"].")";
	
}
print $sql_query ."\n\n";

echo $sql_query;

// TODO bounce type ...






?>
