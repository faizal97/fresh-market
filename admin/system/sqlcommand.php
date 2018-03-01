<?php 
function edit_sql($table,$oldKey,$oldKeyValue,$arr_data,$arr_dataValue){
 $sql = 'UPDATE '.$table;
 for($i=0;$i<=sizeof($arr_data)-1;$i++){
 	if($i==0){
 		$sql .= " SET ".$arr_data[$i]."='".$arr_dataValue[$i]."'";
 		continue;
 	}
 	if($i!=sizeof($arr_data)){
 		$sql .= ',';
 	}
 	$sql .= $arr_data[$i]."='".$arr_dataValue[$i]."'";
 }
 $sql .= " WHERE ".$oldKey."='".$oldKeyValue."'";
 return $sql;
}


 ?>