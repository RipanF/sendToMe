<?php
include_once("conn.php");
    if(isset($_POST['Submit'])) {
    	if(empty($_POST['inisial'])){
    		$inisial = "Anon";
    	}else{
    		$inisial = $_POST['inisial'];
    	}
        $pesan = $_POST['pesan'];
        $result = mysqli_query($mysqli, "INSERT INTO komentar(inisial,komentar,status) VALUES('$inisial','$pesan','show')");
        echo '<script language="javascript" type="text/javascript"> 
				window.location.href="index.php#message";
				</script>';
    }
?>