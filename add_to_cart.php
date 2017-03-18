<?php
	include('config.php');
	
	$count = $_POST["count"];
	$js = $_POST["js"];
	
    function getUserIP()
	{
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];
	
	    if(filter_var($client, FILTER_VALIDATE_IP))
	    {
	        $ip = $client;
	    }
	    elseif(filter_var($forward, FILTER_VALIDATE_IP))
	    {
	        $ip = $forward;
	    }
	    else
	    {
	        $ip = $remote;
	    }
	
	    return $ip;
	}
	
	
	$ip = getUserIP();
	
	$date = date("Y-m-d H:i:s");
	$sql = "INSERT INTO test_cart (count,ip,date) VALUES ($count,'$ip','$date')";
	$result = mysql_query($conn,$sql);
	
	if(mysqli_query($conn, $sql)){
		$message = 'Товар добавлен в корзину';
		if($js == 1){
			echo 'Товар добавлен в корзину';
		}else{
		  include('index.php');
		}
	    
	} else{
	    echo "Произошла ошибка(";
	}
	
	// Close connection
	mysqli_close($conn);
?>
