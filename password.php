<?php
session_start();


$bdd = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($dbLink , 'odomart_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

if (isset($POST['recup_submit'], $_POST['recup_mail'])) {
    if (!empty($POST['recup_mail'])) {
        $recup_mail = htmlspecialchars($POST['mail']);
        if (filter_var($recup_mail, FILTER_VALIDATE_EMAIL)) {
            $mailexists = $bdd > prepare('SELECT id, pseudo FROM membres WHERE email = ?');
            $mailexists->execute(array($recup_mail));
            $mailexists = $mailexists->rowCount();
            if ($mailexists == 1) {
                $pseudo = $mailexists->fetch();
                $pseudo = $pseudo['pseudo'];
                $_SESSION['recup_mail'] = $recup_mail;
                $recup_code = "";
                for ($i = 0; $i <= 8; $i++) {
                    $recup_code .= mt_rand(0, 9);
                }
                $_SESSION['recup_code'] = $recup_code;
                $recup_insert = $bdd->prepare('UPDATE users SET mdp = ? where email = ?');
                $recup_insert->execute(array($recup_code, $recup_mail));

                $header = 'From:"FreeMessenger.com<freemessenger@gmail.com' . "\n";
                $header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
                $header .= 'Content-Transfer-Encoding: 8bit';
                $message = '
            <html>
            <head>
             <title>Récupération de mot de passe - FreeMessenger/title>
             <meta charset="utf-8" />
           </head>
           <body>
               <div align="center">
                 <table width="600px">
                   <tr>
                     <td>
                       <div align="center">Bonjour<b>' . $pseudo . '</b>,</div>
                       Voici votre code de récupération: <b>' . $recup_code . '</b>
                     </td>
                   </tr>
                   <tr>
                     <td align="center">
                       <font size="2">
                         Ceci est un email automatique, merci de ne pas y répondre
                       </font>
                     </td>
                   </tr>
                 </table>
               </div>
             </font>
           </body>
           </html>
           ';
                mail($recup_mail, "Récupération de mot de passe - FreeMessenger", $message, $header);
                header("Location:connexion.php");
            } else {
                $error = "Cette adresse mail n'est pas enregistrée";
            }
        } else {
            $error = "Adresse mail invalide";
        }
    } else {
        $error = "Veuillez entrer votre adresse mail";


    }
}
>