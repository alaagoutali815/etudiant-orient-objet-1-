<?php
   include 'etudiant.class.php';
  
    $id=$_POST['id'];
   $etudiant= new Etudiant;
   $listetud= $etudiant->deleteEtudiant($id);
  
   header("location:mgetudiant.class.php?val=1");
   
?>