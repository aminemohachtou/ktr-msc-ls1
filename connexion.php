<html>
    <head>
        <title> mini projet </title>
    </head>

    <body>

 
        
        <form method="POST" action="insert.php">
            <fieldset>
            <legend><b>Vos Coordonnées</b></legend>
           username: </lablel><input type="text" name="nom"  size="40" maxlength="255"/><br>
            company name: <input type="text" name="prenom"  size="40" maxlength="255"/><br>
            Email address: <input type="text" name="mail"  size="40" maxlength="255"/><br>
           Telephone number: <input type="text" name="code" value="+212" size="40" maxlength="255"/><br>
           <input type="button" name="login" value="envoyer "  maxlength="255"/><br>
          

        <?php
        // récuppérer les variables envoyées par le formulaire
      
        if(isset($_POST['envoyer'])){


            if(!empty($_POST["nom"]) && preg_match("#^[a-zA-Z]+$#i",$_POST["nom"])){
                if(!empty($_POST["prenom"]) && preg_match("#^[a-zA-Z]+$#i",$_POST["prenom"])){
                    if(!empty($_POST["mail"]) && preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i',$_POST["mail"])){
                        if(!empty($_POST["code"]) && is_numeric($_POST["code"])){
                                if(isset($_POST["sexe"])){
                                            if(!empty($_POST['checkList'])){
                                                if(!empty($_POST["questions"])){
                                                    if(!empty($_POST["fichier"])){
                                                       ?>
                                                        <table border="1">
                                                        <tr><th>Nom</th><td><?php echo $_POST["nom"]?></td></tr>
                                                        <tr><th>Prenom</th><td><?php echo $_POST["prenom"]?></td></tr>
                                                        <tr><th>Email</th><td><?php echo $_POST["mail"]?></td></tr>
                                                        <tr><th>Code</th><td><?php echo $_POST["code"]?></td></tr>
                                                        <tr><th>Sexe</th><td><?php echo $_POST["sexe"]?></td></tr>
                                                        <tr><th>Semestre</th><td><?php echo $_POST["semestres"] ?></td></tr>
                                                        <tr><th>Formations</th>
                                                        <td>
                                                        <?php 
                                                        foreach($_POST['checkList'] as $selected){
                                                            ?>
                                                            <ul>
                                                            <li>
                                                            <?php echo $selected ?>
                                                            </li>
                                                            </ul>
                                                            <?php
                                                        }
                                                        ?></td></tr>
                                                        <tr><th>Questions</th><td><?php echo $_POST["questions"]?></td></tr>
                                                        <tr><th>Fichier texte</th><td><?php echo $_POST["fichier"]?></td></tr>
                                                        </table>
                                                        
                                                       <?php
                                                    }
                                                    else
                                                    {
                                                        echo  "<p style='color:red'>  Veuillez selectionner un fichier texte !</p>";
                                                    }
                                                }
                                                else
                                                {
                                                    echo  "<p style='color:red'>  Veuillez poser une ou plusieurs questions !</p>";
                                                }
                                            }
                                            else
                                            {
                                                echo  "<p style='color:red'>  Veuillez selectionner une ou plusieurs formations !</p>";
                                            }

                                }
                                else
                                {
                                    echo  "<p style='color:red'>  Veuillez cocher votre genre !</p>";
                                }
                        }
                            
                        else
                        {
                            echo  "<p style='color:red'>  Veuillez entrer un code valide !</p>";
                        }
                           
                    
                    }
                    else
                    {
                        echo  "<p style='color:red'>  Veuillez entrer un email valide !</p>";
                    }
                        

                }
                else{
                    echo  "<p style='color:red'>  Veuillez entrer un prenom valide !</p>";
                }
                    
                
            }
            else{
               echo  "<p style='color:red'>  Veuillez entrer un nom valide !</p>";
            }
            
     
        }


        
        
        ?>


    
    </body>
</html>