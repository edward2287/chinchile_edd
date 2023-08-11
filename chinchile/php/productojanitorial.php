<?php
require 'config.php';
require 'dtbproducto.php';
$db = new  Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1 AND categoria = 'janitorial'  ");
$sql->execute();
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

    <!--Cabecera de la pagina-->
    <header class="headerS">

        <!--Barra de busqueda-->
        <article class="busquedaS">
            <section class="busqueda__logoContenedor">
                <a href="index.html">
                    <img src="../recursos2/logo_gonzo.png" alt="">
                </a>

            </section>
            <section class="busqueda__contenedor">
                <nav class="menuNavegacion">
                    <a href="../html/index.html">Home</a>
                    <ul class="menuNavegacion__enlaceFlexLista">
                        <li class="contenedor__menuNavegacion">
                            <a class="menuNavegacion__enlaceFlexss" href="../html/products.html">
                                <section class="menuNavegacion__enlaceFlexListaElemento">
                                    <p>Products</p>
                                    <svg aria-hidden="true" focusable="false" role="presentation" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-chevron-down">
                                        <path class="icon-chevron-down-left" d="M4 4.5L7 1.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="square"></path>
                                        <path class="icon-chevron-down-right" d="M4 4.5L1 1.5" stroke="currentColor" stroke-width="1.25" stroke-linecap="square"></path>
                                    </svg>
                                </section>
                            </a>
                            <ul class="aparecess">
                                <li class="elementoAparece">
                                    <section class="section__elementoAparece">
                                        <ul class="lista__elementoAparece ">
                                        <section class="contenedorLista__elementoAparece">
                                                <li>
                                                    <a href="./productokitchen.php">
                                                        Kitchen
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./productojanitorial.php">
                                                        Janitorial
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./productolaundry.php">
                                                        Laundry
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./productoautomotive.php">
                                                        Automotive
                                                    </a>
                                                </li>

                                            </section>

                                        </ul>

                                    </section>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    
                    <a href="../html/about_us.html">About</a>
                </nav>
            </section>

            <section class="buesqueda__sesion">
                <a class="buesqueda__sesionEnlaceUno" href="../html/login.html">
                    <svg class="icon-account " aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 26" fill="none">
                        <path d="M11.3336 14.4447C14.7538 14.4447 17.5264 11.6417 17.5264 8.18392C17.5264 4.72616 14.7538 1.9231 11.3336 1.9231C7.91347 1.9231 5.14087 4.72616 5.14087 8.18392C5.14087 11.6417 7.91347 14.4447 11.3336 14.4447Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M20.9678 24.0769C19.5098 20.0278 15.7026 17.3329 11.4404 17.3329C7.17822 17.3329 3.37107 20.0278 1.91309 24.0769" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <p class="login">Login</p>
                </a>
                <a class="buesqueda__sesionEnlaceDos" href=""><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.88053 4.00003C7.35284 1.71796 9.37425 0.00268555 11.7963 0.00268555H12.2005C14.6226 0.00268555 16.644 1.71796 17.1163 4.00003L19.811 4.00003C22.1161 4.00003 23.9442 5.94322 23.8036 8.24402L23.2424 17.427C23.0167 21.1203 19.9556 24 16.2554 24L7.74447 24C4.04429 24 0.983205 21.1203 0.757505 17.427L0.196322 8.24402C0.0557157 5.94322 1.88378 4.00003 4.18887 4.00003L6.88053 4.00003ZM8.42715 4.00003L15.5697 4.00003C15.1315 2.55474 13.7889 1.50269 12.2005 1.50269H11.7963C10.2079 1.50269 8.86527 2.55474 8.42715 4.00003ZM16.2554 22C18.8984 22 21.0849 19.9431 21.2461 17.305L21.8073 8.12202C21.8776 6.97162 20.9636 6.00003 19.811 6.00003L4.18887 6.00003C3.03633 6.00003 2.12229 6.97162 2.1926 8.12202L2.75378 17.305C2.915 19.9431 5.10149 22 7.74447 22L16.2554 22ZM16.4705 8.49079C16.0563 8.49079 15.7205 8.82658 15.7205 9.24079V10.0414C15.7205 12.097 14.054 13.7635 11.9984 13.7635C9.94271 13.7635 8.27626 12.097 8.27626 10.0414V9.24079C8.27626 8.82658 7.94048 8.49079 7.52626 8.49079C7.11205 8.49079 6.77626 8.82658 6.77626 9.24079V10.0414C6.77626 12.9254 9.11428 15.2635 11.9984 15.2635C14.8825 15.2635 17.2205 12.9254 17.2205 10.0414V9.24079C17.2205 8.82658 16.8847 8.49079 16.4705 8.49079Z" fill="currentColor"></path>
                    </svg></a>
            </section>
        </article>

    </header>
    <!---Fin de Barra de busqueda-->



    <!---Seccion para mostrar productos-->
    <section>
        <div class="containerProducts" id="products">

            <div class="container_title">
                <h2 class="title-box">Gonzo Kleen Products</h2>
                <nav class="container_title_Nav">
                    <a href="./productoautomotive.php">Automotive</a>
                    <a id="enlaceActivo" href="./productojanitorial.php">Janitorial</a>
                    <a href="./productokitchen.php">Kitchen</a>
                    <a href="./productolaundry.php">Laundry</a>
                </nav>
                
            </div>

            <div class="container-cards">
                <?php  foreach($resultado as $row) {  ?>
                   
             
                <div class="card-tarjetas">
                    <div class="img-product">
                        <?php 
                        
                        $id = $row ["id"];
                        $img = "../images/productos/" . $id . "/principal.png";
                        if (!file_exists($img))
                        $img = "../images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>

                    </div>
                    <div class="title-card">
                        <a href="#">
                            <h3><?php echo $row ["nombre"]; ?></h3>
                        </a>

                    </div>
                    <div class="description-card">

                        <p class="pricess"><?php echo number_format($row ["precio"], 2, ".", ",") ; ?>$</p>

                    </div>

                    <div class="button-hide oculto2">
                    <button class="hidden-btn hidden-btn--a"><a href="detalleproductojanitorial.php?id=<?php echo $row["id"];?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN);?>">View More</a></button>
                        <button class="hidden-btn">Add to Car</button>
                    </div>



                </div>

                <?php }?>

            </div>

        </div>
    </section>
    <!---Fin de Seccion para mostrar productos-->

    <!--Footer-->
    <footer class="footer">

        <section class="footer_principal">
            <section class="footer_principalSeccion1"> <img src="../recursos2/logo_gonzo.png" alt="">
                <p>Gonzo Kleen Products</p>
                <p>1032 NW South River Dr</p>
                <p>Medley, Florida 33178</p>
                <a href="https://www.google.co.ve/maps/place/10302+NW+South+River+Dr,+Medley,+FL+33178,+EE.+UU./@25.867359,-80.3452606,17z/data=!3m1!4b1!4m6!3m5!1s0x88d9bb0ca51fe75b:0xdc46cc29d60de2b1!8m2!3d25.8673542!4d-80.3426857!16s%2Fg%2F11bw3zshvc?entry=ttu">View
                    map on google</a>
            </section>
            <section class="footer_principalSeccion2">
                <h5>Menu Links</h5>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </section>
            <section class="footer_principalSeccion2">
                <h5>Product Categories</h5>
                <ul>
                    <li><a href="">Automotive</a></li>
                    <li><a href="">Janitorial</a></li>
                    <li><a href="">Kitchen</a></li>
                    <li><a href="">Laundry</a></li>
                </ul>
            </section>
            <section class="footer_principalSeccionFormulario">
                <h5>Become a Vendor</h5>
                <form action="">
                    <label for="">Your Name or Company (required)
                    </label> <input type="text">
                    <label for="">Your Email (required)
                    </label> <input type="email">
                    <label for="">Your Phone (required)
                    </label> <input type="tel">
                    <button>Send</button>
                </form>
            </section>

        </section>
        <section class="footer_secundario">
            <img src="../recursos2/visa.png" alt="">
            <p>Somos Academia - Web Desing</p>
        </section>


    </footer>
    <!--Termino Footer-->
</body>

</html>