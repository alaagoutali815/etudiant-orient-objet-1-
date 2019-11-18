<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <title>Document</title>
</head>
<body>
<div class="container py-3">
<div class="jumbotron">
<h2>Liste Des Etudients DSI21 Iset Bizerte 2019</h2>
</div>
</div>
<div class="container">
<a href="create.php"><button class="btn btn-info"><i class="fa fa-user-plus"></i>Nouvel etudient</button></a>
</div>
<br>
<div class="container">
<table class="table table-hover">
<tr>
<th>ID</th>
<th>Firs tName</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Operations</th>
</tr>
</div>
    <tbody>
   <?php
   include 'etudiant.class.php';
   $etudiant= new Etudiant;
   $listetud= $etudiant->readALLEtudiant();
   while($data= $listetud->fetch()){
    ?>
    <tr>
    <td><?= $data['id'] ?></td> 
    <td><?= $data['firstname'] ?></td> 
    <td><?= $data['lastname'] ?></td> 
    <td><?= $data['email'] ?></td> 
    <td><?= $data['phone'] ?></td> 
    <td><a href="edit.php?id= '.$data['id'].'">Editer</a>&nbsp;&nbsp;
   <a href="delete.php?id='.$data['id'].'">Supprimer</a></td>
    </tr>
 
   
    <?php
   }
?>
    </tbody>
        </table>
    </div>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>