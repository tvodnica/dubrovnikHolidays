<?php 

	$upit="

    <h5>Dubrovnik holidays</h5>
	<h2>House Tereza</h2>

    <table width='100%' border='0' cellpadding='5' cellspacing='2'>
    
        <tr>
            <td>First name:</td>
            <td>".$_REQUEST['firstName']."</td>
        </tr>
        
        <tr>
            <td >Last name:</td>
            <td>".$_REQUEST['lastName']."</td>
        </tr>
        
         <tr>
            <td>Unit: </td>
            <td>".$_REQUEST['unit']."</td>
        </tr>
    
        <tr>
            <td>From: </td>
            <td >".date("d.m.Y", strtotime($_REQUEST['from']))."</td>
        </tr>
         
        <tr>
            <td> Until: </td>
            <td >".date("d.m.Y", strtotime($_REQUEST['until']))."</td>
        </tr>
      
        <tr>
            <td>Email: </td>
            <td >".$_REQUEST['email']."</td>
        </tr>
      
        <tr>
            <td>Request: </td>
            <td >".$_REQUEST['message']."</td>
        </tr>
         
    </table>

";

		
		//$mail = "tomo.vodnica@gmail.com";
		$mail = "info@dubrovnikholidays.net";
		
    	$headers = 'From:' . $_REQUEST['firstName'] . ' ' . $_REQUEST['lastName'] . '<info@dubrovnikholidays.net>' . "\r\n".
                    'Reply-To:' . $_REQUEST['email'] . "\r\n" .
                   'X-Mailer: PHP/' . phpversion()  . "\r\n" .
                   'Content-type: text/html; charset=utf-8';
 
		mail($mail, 'Enquiry for House Tereza ', $upit, $headers) or die ("Failure"); 
		
		echo(1);

		 ?>

         

         

        