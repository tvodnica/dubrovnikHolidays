<?php 

	$upit="

    <h5>Dubrovnik holidays</h5>
	<h2>Tours and rentals</h2>

    <table width='100%' border='0' cellpadding='5' cellspacing='2'>
    
        <tr>
            <td >Name:</td>
            <td >".$_REQUEST['name']."</td>
        </tr>
        
        <tr>
            <td>Email: </td>
            <td >".$_REQUEST['email']."</td>
        </tr>
        
        <tr>
            <td>Phone: </td>
            <td >".$_REQUEST['tel']."</td>
        </tr>
        
        <tr>
            <td>Service: </td>
            <td >".$_REQUEST['service']."</td>
        </tr>
      
        <tr>
            <td> Date: </td>
            <td >".date("d.m.Y", strtotime($_REQUEST['date']))."</td>
        </tr>
        
         <tr>
            <td>Number of guests: </td>
            <td >".$_REQUEST['pax']."</td>
        </tr>
         
        <tr>
            <td>Request: </td>
            <td >".$_REQUEST['message']."</td>
        </tr>
         
    </table>

";

		
		//$mail = "tomo.vodnica@gmail.com";
		$mail = "tours@dubrovnikholidays.net";
		
    	$headers = 'From:' . $_REQUEST['name'] . '<tours@dubrovnikholidays.net>' . "\r\n".
                    'Reply-To:' . $_REQUEST['email'] . "\r\n" .
                   'X-Mailer: PHP/' . phpversion()  . "\r\n" .
                   'Content-type: text/html; charset=utf-8';
 
		mail($mail, $_REQUEST['service'], $upit, $headers) or die ("Failure"); 

		echo (1);

		 ?>

         

         

        