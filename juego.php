<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a NBA DRAFT</title>

    </head>
    <body id="hola">




        <hr id="hr1" />
        <hr id="hr2" />
        <hr id="hr3" />
        <div id="valor"><strong>Valoracion</strong><div id="numval"><strong>80 *</strong></div></div>
        <div id="tela" style="position:absolute; color: #000;  " ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Ala-Pivot</strong></div>
        <div id="tela1" style="position:absolute; color: #000; float:left "ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Base</strong></div>
        <div id="tela2" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Pivot</strong></div>
        <div id="tela3" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Alero</strong></div>
        <div id="tela4" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Escolta</strong></div>
        <div id="tela5" style="position:absolute; color: #000;" ondragover="evdragover(event)" ondrop="evdrop(event)"><strong>Suplente</strong></div>


        <div id="arrastrar" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="arrastrar1" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="arrastrar2" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="arrastrar3" draggable="true" ondragstart="evdragstart(event)"></div>
        <div id="arrastrar4" draggable="true" ondragstart="evdragstart(event)"></div>



        <?php
        ?>
    </body>
</html>

<style>

    #arrastrar {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/fraxito_2.png");

    }
    #arrastrar1 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/joak_1.png");

    }
    #arrastrar2{
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/ernes_1.png");

    }
    #arrastrar3 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;

        background-color: #990099;
        cursor:pointer;
        background-image: url("images/jugadores/backpack_1.png");

    }
    #arrastrar4 {
        text-align:center;
        width:150px;
        height:220px;

        color:red;
        position: relative;
        background-color: #990099;

        cursor:pointer;
        background-image: url("images/jugadores/magic_1.png");

    }

    #valor{
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
    #numval{
        font-size: 40px;
    }

    #tela{
        background-color: white;
        text-decoration: #ffffff;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        left: 430px;
        top: 87px;
    }
    #tela1{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        left: 641px;
        top: 458px;
    }
    #tela2{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        right: 430px;
        top: 87px;
    }
    #tela3{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        right: 240px;
        top: 351px;
    }
    #tela4{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        left: 240px;
        top: 351px;
    }
    #tela5{
        background-color: white;
        text-align: center;
        width:150px;
        height:240px;
        border: 5px solid #000;
        right: 0px;
        top: 0px;
    }
    #hola{
        background-color: #990099;
        background-image: url("images/lakersstadium(1).jpg");
        background-repeat: no-repeat;
        background-position: top center;
    }
    #hr1 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 399px;
        width: 240px;
        top: 464px;
        height: 5px;
    }
    #hr2 {
        height: 4px;
        background-color: red;
        position:absolute;
        left: 800px;
        width: 222px;
        top: 464px;
        height: 5px;
    }
    #hr3 {
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
    }










// Inicializamos el movimiento del div con id "arrastrar"
    var recu1 = new movimiento(document.getElementById("arrastrar"));
    var recu2 = new movimiento(document.getElementById("arrastrar1"));
    var recu3 = new movimiento(document.getElementById("arrastrar2"));
    var recu4 = new movimiento(document.getElementById("arrastrar3"));
    var recu5 = new movimiento(document.getElementById("arrastrar4"));

</script>