<?php

$dbLink = mysqli_connect('mysql-odomart.alwaysdata.net', 'odomart', 'julien69960');
$bdd = mysqli_select_db($dbLink , 'odomart_tp2');

echo "zdadz";
if (isset($_POST['recup_submit'], $_POST['recup_mail'])) {
    if (!empty($_POST['recup_mail'])) {
        $recup_mail = htmlspecialchars($_POST['mail']);
        if (filter_var($recup_mail, FILTER_VALIDATE_EMAIL)) {

            $mailexists = $bdd > prepare('SELECT id FROM user WHERE email = ?');
            $mailexists->execute(array($recup_mail));
            $mailexists_count = $mailexists->rowCount();
            if ($mailexists_count == 1) {
                $pseudo = $mailexists->fetch();
                //$pseudo = $pseudo['pseudo'];
                $_SESSION['recup_mail'] = $recup_mail;
                $recup_code = "";
                for ($i = 0; $i <= 8; $i++) {
                    $recup_code .= mt_rand(0, 9);
                }
                $_SESSION['recup_code'] = $recup_code;
                $recup_insert = $bdd->prepare('UPDATE user SET mdp = ? where email = ?');
                $recup_insert->execute(array($recup_code, $recup_mail));

                $header = 'From:"FreeMessenger.com<freemessenger@gmail.com' . "\n";
                $header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
                $header .= 'Content-Transfer-Encoding: 8bit';
                $message = '
                        <html>
                        <head>
                         <title>Récupération de mot de passe - FreeMessenger</title>
                         <meta charset="utf-8" />
                       </head>
                       <body>
                           <div align="center">
                             <table width="600px">
                               <tr>
                                 <td>
                                   <div align="center">Bonjour</div>
                                   Voici votre nouveau mot de passe <b>' . $recup_code . '</b>
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
                header("Location:login.php");
            } else {
                echo "Cette adresse mail n'est pas enregistrée";
            }
        } else {
           echo "Adresse mail invalide";
        }
    } else {
        echo  "Veuillez entrer votre adresse mail";


    }
}
?>