<?php

try {
    $dbh = new PDO ('mysql:host=localhost;dbname=finale', 'root', ''); 
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
        echo "DB Connection Failed: " . $e->getMessage();
    }
$stmt = $dbh->query("SELECT * FROM users")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class = "Formulaire">
        <form method="post" action="created_user.php"> 
<div class="valider">
            <input type="submit" name="utilisa" value="Creer un utilisateur"  />
        </div>
</form>
</div>
    




 <table class="table">       <!-- table de sql-->
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>passwords</th>
                    <th>created at</th>    
                    <th>updated at</th>
                </tr>
            </thead>


            <tbody>

<?php while($row = $stmt ->fetch()) {?> 
                  <tr>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->username;?></td>
                    <td><?php echo $row->passwords;?></td>
                    <td><?php echo $row->created_at;?></td>
                    <td><?php echo $row->updated_at;?></td>
                    <td>
                        
                    <div class="valider">
            <input type="submit" name="submit" value="Update"  />
        </div> </td>
        <td><div class="valider">
            <input type="submit" name="submit" value="Delete" />
        </div> </td>
                    



                
                    
                </tr>

                <?php } ?>
                
            </tbody>
        </table>

        </body>
</html>