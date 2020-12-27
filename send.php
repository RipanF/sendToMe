<?php
include_once("conn.php");
    if(isset($_POST['Submit'])) {
    	if(empty($_POST['inisial'])){
    		$inisial = "Anon";
    	}else{
    		$inisial = $_POST['inisial'];
    	}
    	
    $captcha		= $_POST['g-recaptcha-response'];
	$secretKey		= "6LeUQxYaAAdffgAAAFnOxjhhjUasdFFKCln7EwuMMasdas4I3jtBGXT";
	$ip 			= $_SERVER['REMOTE_ADDR'];
	$response		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys	= json_decode($response,true);


        if(intval($responseKeys["success"]) == 1){
          $pesan = $_POST['pesan'];
          $result = mysqli_query($mysqli, "INSERT INTO komentar(inisial,komentar,status) VALUES('$inisial','$pesan','show')");
          echo '<script language="javascript" type="text/javascript">window.location.href="index.php#message";</script>';
        }else{
    	  echo '<script language="javascript" type="text/javascript">alert("Silahkan centang captcha terlebih dahulu !!!");window.location.href="index.php#message";</script>';
    	}
    }else{
        echo '<script language="javascript" type="text/javascript">alert("Hmmm !!!");window.location.href="index.php#message";</script>';
    }
?>		