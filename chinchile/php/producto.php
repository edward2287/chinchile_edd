<?php
    require 'dtbproducto.php';
    $db = new  Database();
    $con = $db->conectar();
    $sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
    $sql->excute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/producto.css">
    <title>Document</title>
</head>
<body>
<section>
        <div class="containerProducts" id="products">

            <div class="container_title">
                <h2 class="title-box">Magic Clean Products</h2>
                <p class="paragraph-box">We innovate from commercial cleaning products to products geared toward industrial level cleaning jobs</p>
            </div>

            <div class="container-cards">

                <div class="card-tarjetas">
                    <div class="img-product">
                        <a href=""><img src="../recursos2/Janitorial-All-Purpose-Cleaners.jpg" alt=""></a>

                    </div>
                    <div class="title-card">
                        <a href="#">
                            <h3>Automotive Washing Products</h3>
                        </a>

                    </div>
                    <div class="description-card">

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, porro.
                        </p>
                        <p>$11.99</p>



                    </div>

                    <div class="button-hide oculto2">
                        <button class="hidden-btn">Añadir al carro</button>

                    </div>

                    

                </div>

              

            </div>

        </div>
</section>
</body>
</html>