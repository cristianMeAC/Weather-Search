<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">   

</head>
    
<body>    
        <?php

            $emailTo = "cristianavram2000@yahoo.com";
            $subject = "For someone special to my heart";
            $body = "I love you! ;*";
            $headers = "cristianavram2000@yahoo.com "; // the From address

            //to actually send the email
    
        
            if(mail($emailTo, $subject, $body, $headers)){

                echo "Mail sent successfully!";

            }else{

                echo "Mail not sent!";

            }
                
                
            

        ?>
    
</body>
</html>