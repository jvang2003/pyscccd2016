<?php
if(isset($_POST['submit']))
{
    
    $fname         =   $_POST['fname'];
    $lname         =   $_POST['lname'];
    $mail          =   $_POST['mail'];
    $mphone        =  ( $_POST['mphone'] ) ? $_POST['mphone'] : " - ";
    $address       =  ( $_POST['address'] ) ? $_POST['address'] : " - ";
    $comment       =  ( $_POST['comment'] ) ? $_POST['comment'] : " - ";
    if(isset($_POST['emailupdate'])) {
        $emailupdate = "YES";
    }else{
        $emailupdate = "NO";
    }
    if(isset($_POST['textmessege'])) {
        $textmessege = "YES";
    }else{
        $textmessege = "NO";
    }

    if(isset($_POST['publicpost'])) {
        $publicpost = "YES";
    }else{
        $publicpost = "NO";
    }

    if(isset($_POST['volunteer'])) {
        $volunteer = "YES";
    }else{
        $volunteer = "NO";
    }
    
    $body = "<table style='width:600px; border:1px solid #ccc;' cellpadding='3' cellspacing='3'>
        <tr>
            <td height='35' colspan='2' bgcolor='#CCCCCC' align='center'>
                <h3>Contact Inquiry Form</h3>
            </td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>First Name : </td>
            <td bgcolor='#f8f8f8'>".$fname."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Last Name : </td>
            <td bgcolor='#f8f8f8'>".$lname."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Email : </td>
            <td bgcolor='#f8f8f8'>".$mail."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Email Update : </td>
            <td bgcolor='#f8f8f8'>".$emailupdate."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Mobile Phone : </td>
            <td bgcolor='#f8f8f8'>".$mphone."</td>
        </tr>
         <tr>
            <td height='35' bgcolor='#f8f8f8'>Text Messege : </td>
            <td bgcolor='#f8f8f8'>".$textmessege."</td>
        </tr>
        <tr>
            <td height='100' bgcolor='#f8f8f8'>Address : </td>
            <td bgcolor='#f8f8f8'>".$address."</td>
        </tr>
        <tr>
            <td height='100' bgcolor='#f8f8f8'>Comments : </td>
            <td bgcolor='#f8f8f8'>".$comment."</td>
        </tr>
         <tr>
            <td height='35' bgcolor='#f8f8f8'>Publicly Post : </td>
            <td bgcolor='#f8f8f8'>".$publicpost."</td>
        </tr>
         <tr>
            <td height='35' bgcolor='#f8f8f8'>Want to Volunteer : </td>
            <td bgcolor='#f8f8f8'>".$volunteer."</td>
        </tr>
    </table>";
  
        $subject = "Contact inquiry";

        $message = $body;
        
            $headers  = "From:noreply@paoyangfortrustee.com";
            $headers .= " \r\nMIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    mail("paoyang2016@gmail.com", $subject, $message, $headers);
	?>
		<script language="javascript" type="text/javascript">
			window.location = "thankyou.html";
        </script>
	<?
}
else{?>
	 <script language="javascript" type="text/javascript">
        
          
            window.location = "contact.html";
        
        </script>
<?
    }
?>
       