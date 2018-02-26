<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url(); ?>assets/css/home.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js"></script>

</head>



<h1>Controlo de Acessos</h1>



<div class="row">
  <a href="<?php echo base_url(); ?>index.php/admin/login">
  <div class="column" style="background-color:#6d6d6d;">
    <h2>Admin</h2>
     <a href="<?php echo base_url(); ?>index.php/admin/login"> <img href="<?php echo base_url(); ?>index.php/app/" src="<?php echo base_url(); ?>assets/img/admin.png" alt="aluno"></a>
 
   
  </div>
    </a>

  
  <a href="<?php echo base_url(); ?>index.php/prof/login">
  <div class="column" style="background-color:#00b70c;">
    <h2>Professores</h2>
     <a href="<?php echo base_url(); ?>index.php/prof/login"> <img href="<?php echo base_url(); ?>index.php/app/" src="<?php echo base_url(); ?>assets/img/prof.png" alt="aluno"></a>
 
   
  </div>
    </a>

  <a href="<?php echo base_url(); ?>index.php/aluno/login">
  <div class="column" style="background-color:#113dff;">
    <h2>Alunos</h2>
     <a href="<?php echo base_url(); ?>index.php/aluno/login"> <img href="<?php echo base_url(); ?>index.php/app/" src="<?php echo base_url(); ?>assets/img/aluno.png" alt="aluno"></a>
 
   
  </div>
    </a>
</div>


</body>
</html>
