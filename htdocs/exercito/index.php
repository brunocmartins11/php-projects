<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exércitos O Culto</title>
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
  </head>
<body>
  <div class="menu">
    <h1 class="menu"> Exércitos RPG </h1>
    <ul class="menu">
		<li class="botoes">Calculador de Exércitos</li> 
		<li class="botoes"> Informações do RPG </li>
    </div>
  </ul>
  <form method="post" action="army.php">
    <div class="forms-group">
      <label for="exampleFormControlInput1">Coloque o Nome do Exército Aqui</label>
      <input type="text" id="nomeExercito" name="nomeExercito"class="form-control" placeholder="Exército do Darwyn">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo de Unidade</label>
      <select class="form-control" id="tipoUnidade" name="tipoUnidade">
        <option>Magos</option>
        <option>Cavaleiros</option>
        <option>Infantaria</option>
        <option>Zumbis</option>
        <option>Necromantes</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Número de Unidades</label>
      <select multiple class="form-control" id="numeroUnidade" name="numeroUnidade">
        <option>50</option>
        <option>100</option>
        <option>150</option>
        <option>200</option>
        <option>1000</option>
        <option>2000</option>
        <option>20000</option>
        <option>60000</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Coloque o Nome do Exército Inimigo Aqui</label>
      <input type="text" id="nomeExercito" name="nomeExercito2" class="form-control" placeholder="Exército do Luis">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo de Unidade</label>
      <select class="form-control" id="tipoUnidade">
        <option>Magos</option>
        <option>Cavaleiros</option>
        <option>Infantaria</option>
        <option>Zumbis</option>
        <option>Necromantes</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Número de Unidades</label>
      <select multiple class="form-control" id="numeroUnidade2" name="numeroUnidade2">
        <option>50</option>
        <option>100</option>
        <option>150</option>
        <option>200</option>
        <option>1000</option>
        <option>2000</option>
        <option>20000</option>
        <option>60000</option>
      </select>
      <input type="submit" placeholder="Enviar"></input>
    </div>
  </form>
        <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo de Unidade</th>
                <th scope="col">Valor de Ataque</th>
                <th scope="col">Valor de Vida</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Cavaleiros</td>
                <td>d50</td>
                <td>d90</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Infantaria</td>
                <td>d25</td>
                <td>d30</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Magos</td>
                <td>d50</td>
                <td>d10</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Necromantes</td>
                <td>d50</td>
                <td>d15</td>
              </tr>
            </tbody>
          </table>
</body>
</html>