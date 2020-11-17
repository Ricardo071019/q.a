<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 5px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Dimenção do array</h3><form action="/action_page.php">
       <label for="fname">Insira a dimenção do Array </label>
       <input type="text" id="fname" name="dimensao">
<br>

<h3>Introduza o intervalo de valores</h3>
  <br>

  <form action="/action_page.php">
      <h3>Início</h3><input type="text" id="fname" name="inicio" placeholder="Insira o valor..">

      <h3>Fim</h3><input type="text" id="fname" name="fim" placeholder="Insira o valor..">

      <h3>Valor a pesquisar </h3><input type="text" id="fname" name="vp" placeholder="Insira o valor..">


   
  </form>
  <h3>Ordenação dos valores por ordem </h3>
<input type="radio" name="rbt_valor" value="1" > Crescente
<input type="radio" name="rbt_valor" value="2" > Decrescente
<br>

 
 <input type="submit" value="Submit">

</body>
</html>