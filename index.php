<?php include("classe/conexao.php"); 
$consulta = "SELECT * FROM movimentacao";
$con =$mysqli->query($consulta) or die($mysqli->error);
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
<meta charset="utf8"

<body>
    </head>
<div class="container">
<h2>Table</h2>
</div>
<div class ="row">
<div class="">
  <table class="table table-striped">
    <thead>    
<tr>
    <td><strong>NF</strong></td>   
 <td><strong>DATA</strong></td>
 <td><strong>CLIENTE</strong></td> 
 <td><strong>PESO</strong></td>
 <td><strong>VALOR UNT</strong></td> 
 <td><strong>VALOR TO</strong></td> 
 <td><strong>SITUAÇÃO</strong></td>
 <td><strong>PLACA</strong></td>   
</tr>
</div>
<div class="col-md-4">
 <table class="table table-striped">
    <thead>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
  <td><?php echo $dado["numNF"]; ?></td>
  <td><?php echo date('d/m/Y', strtotime($dado['dtEmissao'])); ?></td>
  <td><?php echo $dado["nomePessoa"]; ?></td>
  <td><?php echo $dado["qtdeVolumes"]; ?></td>
   <td><?php echo $dado[""]; ?></td>
  <td><?php echo $dado["totalLiquido"]; ?></td>
  <td><?php echo $dado["stMov"]; ?></td>
  <td><?php echo $dado["placaVeicTransp"]; ?></td>
   <td>
      <button href="usu_editar.php?codigo=<?php echo $dado['idMovimentacao']; ?>" type="button" class="btn btn-primary btn-sm">Editar</button>
       <button href="usu_excluir.php?codigo=<?php echo $dado['idMovimentacao']; ?>" type="button" class="btn btn-primary btn-sm">Excluir</button>
 
      </td>
        </tbody>
  </tr>
   
    <?php } ?>
</table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>