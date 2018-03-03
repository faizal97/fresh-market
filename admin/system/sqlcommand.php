<?php 
// FUNCTION UPDATE DATA
function edit_sql($kon,$table,$arr_data,$arr_dataValue){
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
 $sql .= " WHERE ".$arr_data[0]."='".$arr_dataValue[0]."'";
return mysqli_query($kon,$sql);}

// FUNCTION TAMPIL DATA
function show_sql($table,$sort='',$by='',$primary='',$primaryValue='',$likeData='',$limitStart='',$limitData=''){
$sql = "SELECT * FROM ".$table;
if (!empty($primary)){
	$sql .= " WHERE ".$primary;
	if(!empty($primaryValue) || is_int($primaryValue)){
		$sql .= "='".$primaryValue."'";
	}elseif(!empty($likeData) || is_int($likeData)){
		$sql .= " LIKE '%".$likeData."%'";
	}
}

if(!empty($limitStart) || is_int($limitStart)){
	$sql .= " LIMIT ".(string)$limitStart.",".(string)$limitData;
}
if(!empty($sort)){
$sql .= " ORDER BY ".$by." ".strtoupper($sort);
}

return $sql;
}
 
//FUNCTION TAMBAH DATA
function tambah_sql($kon,$table,$arr_data,$arr_dataValue){
$sql = "INSERT INTO ".$table."(";
for($i=0;$i<=sizeof($arr_data)-1;$i++){
	$sql .= $arr_data[$i];
	if($i!=sizeof($arr_data)-1){
		$sql .= ",";
	}else{
		$sql .= ")";
	}
 }
 $sql .= " VALUES(";
 for($i=0;$i<=sizeof($arr_dataValue)-1;$i++){
 	$sql .= "'".$arr_dataValue[$i]."'";
 	if($i!=sizeof($arr_dataValue)-1){
 		$sql .= ",";
 	}else{
 		$sql .= ")";
 	}
 }
return mysqli_query($kon,$sql);
}


function makeId($maxchar,$front,$id){
	$counter = (($maxchar-strlen($front))-strlen($id));
	$nol ="";
	for($i=1;$i<=$counter;$i++){
		$nol .= "0";
	}
	return $front.$nol.$id;
}

function makePass($pass,$saltLength,$hashType){
	$salt = bin2hex(openssl_random_pseudo_bytes($saltLength,$cstrong));
	$salted = $salt.$pass;
	$hashed_salt = hash($hashType,$salted);
	return array($hashed_salt,$salt);
}

function hapus_sql($kon,$table,$primary='',$primaryValue=''){
$sql = 'DELETE FROM '.$table;
if(!empty($primary)){
	$sql .=' WHERE '.$primary."='".$primaryValue."'";
}
return mysqli_query($kon,$sql);
}
 

 ?>