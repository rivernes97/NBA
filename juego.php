<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php

////capturo los valores de los parámetros que me han sido pasados
////desde app.php
    
include ('funciones.php');

$mysqli = conectaBBDD();
$resultadoImagen = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen2 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen3 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen4 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");
$resultadoImagen5 = $mysqli -> query("SELECT * FROM jugadores order by rand() limit 1  ");


$numJugadores = $resultadoImagen -> num_rows;
 
//declaro un array en php para guardar el resultado de la query
$listaJugadores = array();

//cargo todas las filas del resultado de la query en el array
   for ($i = 0; $i < $numJugadores; $i++){
        $r = $resultadoImagen -> fetch_array(); //leo una fila del resultado de la query
        $r2 = $resultadoImagen2 -> fetch_array();
        $r3 = $resultadoImagen3 -> fetch_array();
        $r4 = $resultadoImagen4 -> fetch_array();
        $r5 = $resultadoImagen5 -> fetch_array();
        
        $listaJugadores[$i][3] = $r['imagen'];
        $listaJugadores[$i][3] = $r2['imagen'];
        $listaJugadores[$i][3] = $r3['imagen'];
        $listaJugadores[$i][3] = $r4['imagen'];
        $listaJugadores[$i][3] = $r5['imagen'];
        
        $listaJugadores[$i][7] = $r['media'];
        $listaJugadores[$i][7] = $r2['media'];
        $listaJugadores[$i][7] = $r3['media'];
        $listaJugadores[$i][7] = $r4['media'];
        $listaJugadores[$i][7] = $r5['media'];
        
        
        $listaJugadores[$i][4] = $r['nacionalidad'];
        $listaJugadores[$i][4] = $r2['nacionalidad'];
        $listaJugadores[$i][4] = $r3['nacionalidad'];
        $listaJugadores[$i][4] = $r4['nacionalidad'];
        $listaJugadores[$i][4] = $r5['nacionalidad'];
        
        $listaJugadores[$i][5] = $r['conferencia'];
        $listaJugadores[$i][5] = $r2['conferencia'];
        $listaJugadores[$i][5] = $r3['conferencia'];
        $listaJugadores[$i][5] = $r4['conferencia'];
        $listaJugadores[$i][5] = $r5['conferencia'];
        
        
         $listaJugadores[$i][6] = $r['posicion'];
        $listaJugadores[$i][6] = $r2['posicion'];
        $listaJugadores[$i][6] = $r3['posicion'];
        $listaJugadores[$i][6] = $r4['posicion'];
        $listaJugadores[$i][6] = $r5['posicion'];
        
        
        
        $listaJugadores[$i][0] = $r['nombre'];
        $listaJugadores[$i][1] = $r['id_equipo']; 
        $listaJugadores[$i][2] = $r['id_jugador']; 
        
        
     
   }
 
    $numeros = [$r['media'],$r2['media'],$r3['media'],$r4['media'],$r5['media']];
   
    $suma = 0;
    
    for ($x=0;$x<count($numeros);$x++){
        $suma += $numeros[$x];
    }
    
    $suma = array_sum($numeros);
    
    $total_numeros = count($numeros);
 
    $media = $suma/$total_numeros;
        
    $media = array_sum($numeros)/count($numeros);

               
              
   
   
   
   
   
  
?>
 
           
      
              
           
   
   
    
 


<html>
    <head>
        
        <meta charset="utf-8" />
        
        <title>NBA DRAFT</title>

    </head>

    <body class="hola">
   
    <?php echo $r['posicion']; ?>

        <hr class="hr1" />
        <hr class="hr2" />
        <hr class="hr3" />
        <div class="valor"><strong>Valoracion</strong><div id="Media" class="numval"><strong><?php echo $media; ?>*</strong></div></div>
        <div id="EnBase" class="EncabezadoBase" style="position: absolute; color: #000;">Base</div>
        <div id="EnBase" class="EncabezadoAlero" style="position: absolute; color: #000;">Suplente</div>
        <div id="EnBase" class="EncabezadoEscolta" style="position: absolute; color: #000;">Alero</div>
        <div id="EnBase" class="EncabezadoPivot" style="position: absolute; color: #000;">Ala-Pivot</div>
        <div id="EnBase" class="EncabezadoAlaPivot" style="position: absolute; color: #000;">Escolta</div>
        <div id="EnBase" class="EncabezadoSuplente" style="position: absolute; color: #000;">Pivot</div>
        <div id="Ala-Pivot"  class="tela" style="position:absolute; color: #000;  " ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Base"  class="tela1" style="position:absolute; color: #000; float:left "ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Pivot" class="tela2" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Alero" class="tela3" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Escolta" class="tela4" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
        <div id="Suplente" class="tela5" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"></div>
      
       

        <div id="Jugador1" class="arrastrar" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador2"  class="arrastrar1"draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador3" class="arrastrar2" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador4" class="arrastrar3" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="Jugador5" class="arrastrar4" draggable="true" ondragstart="evdragstart(event)"></div>
 

        
        <?php
        echo '';
        ?>
    </body>
</html>

<style>

    .arrastrar {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r['imagen']; ?>");

    }
    .arrastrar1 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r2['imagen']; ?>");

    }
    .arrastrar2{
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r3['imagen']; ?>");

    }
    .arrastrar3 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r4['imagen']; ?>");

    }
    .arrastrar4 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/<?php echo $r5['imagen']; ?>");

    }

    .valor{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:60px;
        border: 5px solid #000;
        left: 230px;
        top: 0px;
        position: absolute;
    }
    .numval{
        font-size: 40px;
    }

    .tela{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:220px;
        
        left: 430px;
        top: 87px;
    }
    .EncabezadoSuplente{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:22px;
        
        left: 430px;
        top: 65px;
    }
    .tela1{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        left: 641px;
        top: 458px;
    }
    .EncabezadoBase{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        left: 641px;
        top: 436px;
    }
    .tela2{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        right: 430px;
        top: 87px;
    }
    .EncabezadoPivot{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        right: 430px;
        top: 65px;
    }
    .tela3{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
      
        right: 240px;
        top: 351px;
    }
    .EncabezadoAlaPivot{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
      
        right: 240px;
        top: 329px;
    }
    .tela4{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
        
        left: 240px;
        top: 351px;
    }
    .EncabezadoEscolta{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
        
        left: 240px;
        top: 329px;
    }
    .tela5{
        background-color: white;
        text-align: center;
        width:150px;
        height:220px;
       
        right: 0px;
        top: 22px;
    }
    .EncabezadoAlero{
        background-color: white;
        text-align: center;
        width:150px;
        height:22px;
       
        right: 0px;
        top: 0px;
    }
  
    .hola{
        background-color: #990099;
        background-image: url("images/lakersstadium(1).jpg");
        background-repeat: no-repeat;
        background-position: top center;
    }
     .cambio{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 20px solid #3FFF33;
        right: 430px;
        top: 87px;
        
    }
    
    .hr1 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 399px;
        width: 240px;
        top: 464px;
        height: 5px;
    }
    .hr2 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 800px;
        width: 222px;
        top: 464px;
        height: 5px;
    }
    .borde-rojo {
    border-color: red;
    border-style: double;
}

.borde-azul {
    border-color: blue;
    border-style: double;
}
    .hr3 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 589px;
        width: 242px;
        top: 161px;
        height: 5px;
    }


</style>
<script>
   
    function evdragstart(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }
    function evdragover(ev) {
        ev.preventDefault();
        
    }
    function evdrop(ev, el) {
     
        ev.stopPropagation();
        ev.preventDefault();
        data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        
 

     comprobarQuimica();
     
          
         
    
    
    


        

     
     }
     
     
     function comprobarQuimica(){
       
            var elemento = document.getElementById('Jugador1');
    var posicion = elemento.getBoundingClientRect();
    
      var elemento1 = document.getElementById('Base');
    var posicion1 = elemento1.getBoundingClientRect();
    var posJugador1 = posicion.top + posicion.right+ posicion.bottom + posicion.left;
     var posArrastrar1 = posicion1.top + posicion1.right+ posicion1.bottom + posicion1.left;
    
         if((posJugador1 == posArrastrar1) && ("<?php echo $r['posicion'];?>"  == "Base")){
           
             document.getElementById('EnBase').style.color = '#FF0000' ;
             
         }
          

         
         
     
              
           
      
    }



// Inicializamos el movimiento del div con id "arrastrar"
    var recu1 = new movimiento(document.getElementById("arrastrar"));
    var recu2 = new movimiento(document.getElementById("arrastrar1"));
    var recu3 = new movimiento(document.getElementById("arrastrar2"));
    var recu4 = new movimiento(document.getElementById("arrastrar3"));
    var recu5 = new movimiento(document.getElementById("arrastrar4"));

</script>