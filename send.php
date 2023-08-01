<link rel="stylesheet" href="./scss/style.css">
<?php

include("./conexion.php");

if (isset($_POST['send']))
{
    
    if
    (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['unidadnegocio']) >= 1 &&
        strlen($_POST['pais']) >= 1 

    ){
        $name = trim($_POST['name']);
        $pais = trim($_POST['pais']);
        $unidadnegocio = trim($_POST['unidadnegocio']);
        $fecha = date("d/m/y");
        $consulta = " INSERT INTO datos(nombre, pais, fecha, unidadnegocio )
                      VALUES ('$name', '$pais' , '$fecha', '$unidadnegocio') ";
        
        $resultado = mysqli_query($conex, $consulta);

        if($consulta)
        {
            ?>
            <h1 class="success"> 
                El link para encontrar el ID es : 
                <a href= <?php
                 echo "https://","ms.comparaonline.com/loggerapp/quoteapp-cico/",$name,"/quotes";
                 ?>><h1>
                    <?php 
                    echo "https://","ms.comparaonline.com/loggerapp/quoteapp-cico/",$name,"/quotes";

                    ?>
                    </h1></a>
                
            </h1>

           
             
            <?php
        }
        else
        {
            
            ?>
            <h3 class="Error"> No se a enviado</h3>
            
        

            <?php
        
        }
        

    }
    else{
        ?>
        <h3 class="error">LLena todos los campos</h3>

        <?php
    }

    

}

?>

