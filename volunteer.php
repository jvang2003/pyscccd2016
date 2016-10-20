<?php
if(isset($_POST['submit']))
{
    
    $fname         =   $_POST['fname'];
    $lname         =   $_POST['lname'];
    $email         =   $_POST['email'];    
    $hphone        =  ( $_POST['hphone'] ) ? $_POST['hphone'] : " - ";
    $mphone        =  ( $_POST['mphone'] ) ? $_POST['mphone'] : " - ";
    $zip           =  ( $_POST['zip'] ) ? $_POST['zip'] : " - ";
    $city          =   $_POST['city'];
    $state         =  ( $_POST['state'] ) ? $_POST['state'] : " - ";
    $address       =  ( $_POST['address'] ) ? $_POST['address'] : " - ";

    if(isset($_POST['volunteer'])) {
        $volunteer = "YES";
    }else{
        $volunteer = "NO";
    }
    if(isset($_POST['vote'])) {
        $vote = "YES";
    }else{
        $vote = "NO";
    }

    if(isset($_POST['party'])) {
        $party = "YES";
    }else{
        $party = "NO";
    }
    if(isset($_POST['complaign_sign'])) {
        $complaign_sign = "YES";
    }else{
        $complaign_sign = "NO";
    }

    if(isset($_POST['supporter'])) {
        $supporter = "YES";
    }else{
        $supporter = "NO";
    }


    $body = "<table style='width:600px; border:1px solid #ccc;' cellpadding='3' cellspacing='3'>
        <tr>
            <td height='35' colspan='2' bgcolor='#CCCCCC' align='center'>
                <h3>Volunteer inquiry Form</h3>
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
            <td bgcolor='#f8f8f8'>".$email."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Home Phone : </td>
            <td bgcolor='#f8f8f8'>".$hphone."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Mobile Phone : </td>
            <td bgcolor='#f8f8f8'>".$mphone."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Zip Code: </td>
            <td bgcolor='#f8f8f8'>".$zip."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>City: </td>
            <td bgcolor='#f8f8f8'>".$city."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>State: </td>
            <td bgcolor='#f8f8f8'>".$state."</td>
        </tr>
        <tr>
            <td height='100' bgcolor='#f8f8f8'>Address : </td>
            <td bgcolor='#f8f8f8'>".$address."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Volunteer: </td>
            <td bgcolor='#f8f8f8'>".$volunteer."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Help Get Out the Vote: </td>
            <td bgcolor='#f8f8f8'>".$vote."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Host A House party: </td>
            <td bgcolor='#f8f8f8'>".$party."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>Display a Campaign sign or help provide sign location: </td>
            <td bgcolor='#f8f8f8'>".$complaign_sign."</td>
        </tr>
        <tr>
            <td height='35' bgcolor='#f8f8f8'>You may use my name publicly as a supporter: </td>
            <td bgcolor='#f8f8f8'>".$supporter."</td>
        </tr>
    </table>";
  
        $subject = "Volunteer inquiry";

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
        
          
            window.location = "volunteer.html";
        
        </script>
<?
    }
?>