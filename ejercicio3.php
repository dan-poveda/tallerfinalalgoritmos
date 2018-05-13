<!DOCTYPE html>
<html>
  <head>
     <title> Ejercicio 3 </title>
  </head>
  <header>
    <h1><center>EJERCICIO 3</center></h1>
    <h2><li> Un vendedor recibe un sueldo base, más un 10% extra por comisiones de sus ventas.  El vendedor desea saber cuánto dinero obtendrá por concepto de comisiones por las tres ventas que realizó en el mes y el total que recibirá tomando en cuenta su sueldo base y sus comisiones. </h2></li>
  </header>
  <body>
    <form action="#" method="post">
      <section>
        <ul>
          <li><label>Ingrese el sueldo base: </label></li><br>
          <input type="number" name="baseSalary"><br>
          <li><label> Ingrese el valor de la primera venta: </label></li><br>
          <input type="number" name="sell"><br>
          <li><label> Ingrese el valor de la segunda venta: </label></li><br>
          <input type="number" name="sell2"><br>
          <li><label> Ingrese el valor de la tercera venta: </label></li><br>
          <input type="number" name="sell3"><br>
          <button type="submit">Enviar </button><br>
        </ul>
      </section>
      <section>
        <?php 
           if (isset($_POST['baseSalary'])){
               $baseSalary = $_POST['baseSalary'];
               $sell = $_POST['sell'];
               $sell2 = $_POST['sell2'];
               $sell3 = $_POST['sell3'];

                   $commission = ($sell * 0.10) + ($sell2 * 0.10) + ($sell3 * 0.10);
                   $solution = $commission + $baseSalary;
               echo "Las comisiones totales son: $".$commission."00";
               echo "El total de saldo es de: $".$solution;
            }
           ?>
         </section>
    </form>
  </body>
</html>