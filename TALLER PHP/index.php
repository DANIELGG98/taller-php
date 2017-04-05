<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOLA</title>
    </head>
    
    
    
    <body>
        
    <script>
        function alerta()
        {
            clave= document.getElementById("contraseña");
            largo = clave.value;
            
            if (largo.length<7){
               ("CLAVE NO VALIDA");
               return false;
            }
            return true;
        }
    </script>
    
    <style>
        .division{
            text-align: center
        }
    </style>
    <form action ="formulario.php" onsubmit="return alerta()">
        <div class="division">
            <label>nombre</label><br>
            <input type="text" id="nombre" name="nombre"><br>
        </div>
        
        <div class="division">
            <label>contraseña</label><br>
            <input type="password" id="contraseña" name="contraseña"><br>
        </div>
        
        <div class="division">
            <br>
            <input type="submit" value="comprobar"><br>
        </div>
    </form>
    </body>
</html>
