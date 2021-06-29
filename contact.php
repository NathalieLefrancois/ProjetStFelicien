<?php
if(isset($_POST['btnEnvoyer']))
{
 $to ="nathlef@live.ca";
 $from = $_POST['email'];
 $name = $_POST['nom'];
 $prenom =$_POST['prenom'];
 $tel =$_POST['tel'];
 $message =$_POST['message'];
 $message = wordwrap($message, 70, "\r\n");
 $headers = "From:localhost:\r\n";
 $headers .= "MIME-Version: 1.0 \r\n";
 $headers .= "Content-type: text/html \r\n";
 $subject = "Formulaire";
 $retval= mail($to, $subject, $message, $headers);


 if($retval==true){
    echo "Le message a été envoyé!"; 
 }
 else {
    echo "Le message n'a pas été envoyé!";
} 
$second =5;
header("Refresh:$second; url=index.php" );

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<title>Formulaire de contact</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>

<body>
    <div class="container text-center bg-secondary text-white p-3">
        </br><h4>Formulaire de contact</h4></br>
    </div>     
    <div class="container">
        <form action="" method="post" id="formulaire">
            </br></br>
            <input type="text" class= "form-control" name = "nom" id="nom" placeholder = "Entrez votre nom"> </br>
            <input type="text" class= "form-control" name = "prenom" id="prenom" placeholder = "Entrez votre prénom"> </br>
            <input type="tel" class= "form-control"  name = "tel" id="tel" placeholder = "Entrez votre téléphone">  </br>
            <input type="email" class= "form-control" name = "email" id="email" placeholder = "Entrez votre courriel">  </br>
            <textarea rows="5" class= "form-control" name = "message" id="message" placeholder = "Laissez votre message!"></textarea>  </br>  
            </br></br>
            <button type="submit" name= "btnEnvoyer" class="btn btn-danger form-control" id="btnEnvoyer" >Soumettre</button>
            
        </form>
    </div> 

</body>

</html>
