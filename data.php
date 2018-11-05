<?php  
include 'koneksi.php';

$id = $_GET["id"];
$hasil = mysql_query($koneksi, "select * from user where id='$id'");
if(mysql_num_rows($hasil) > 0 ){
	$response = array();
	$response["response"] = array();
	while($x = mysql_fetch_array($hasil)){
		$h['id'] = $x["id"];
    	$h['username'] = $x["username"];
    	$h['password'] = $x["password"];
    	$h['level'] = $x["level"];
    	$h['fullname'] = $x["fullname"];
    	array_push($response["users"], $h);

	}
	echo json_encode($response);
}else{
	$response["message"]="tidak ada data";
	echo json_encode($response);
}

?>