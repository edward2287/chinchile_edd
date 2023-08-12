<?php
require 'config.php';
require 'dtbproducto.php';
$db = new  Database();
$con = $db->conectar();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;
/*session_destroy();*/
/*print_r($_SESSION);*/

$lista_carrito = array();

if($productos != null) {
    foreach($productos as $clave=> $cantidad) {
        $sql = $con->prepare("SELECT id, nombre, precio, descuento, $cantidad AS cantidad FROM productos WHERE id=? AND activo=1  ");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carritocompras.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                    <a id="home" href="../html/index.html">Home</a>
                    <ul class="menuNavegacion__enlaceFlexLista">
                        <li class="contenedor__menuNavegacion">
                            <a id="products" class="menuNavegacion__enlaceFlexss" href="../html/products.html">
                                <section  class="menuNavegacion__enlaceFlexListaElemento">
                                    <p  class="productSS">Products</p>
                                    <svg class="svgSS" aria-hidden="true" focusable="false" role="presentation" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-chevron-down">
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
                   
                    <a id="about" href="../html/about_us.html">About</a>
                </nav>
            </section>

            <section class="buesqueda__sesion">
                <a id="login"  class="buesqueda__sesionEnlaceUno" href="../html/login.html">
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
                    </svg><span id="num_cart" class="span_car"><?php echo $num_cart;?></span></a>
            </section>
        </article>

    </header>
    <!---Fin de Barra de busqueda-->



    <!---Seccion para mostrar productos en el carrito-->
   
        <div class="carritoCompras">
            <section class="carritoCompras_tablas">
                <table>
                    <thead>
                        <tr class="trHead">
                            <th id="productoss">Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($lista_carrito== null) {
                            echo "<tr><td><b>Lista vacia</b></td><td><b>Lista vacia</b></td><td><b>Lista vacia</b></td><td><b>Lista vacia</b></td><td><b>Lista vacia</b></td></tr>";
                            } else {
                            $total = 0;
                            foreach($lista_carrito as $producto) { 
                            $_id = $producto ["id"];
                            $nombre = $producto ["nombre"];
                            $precio = $producto ["precio"];
                            $descuento = $producto ["descuento"];
                            $cantidad = $producto ["cantidad"];
                            $precio_desc = $precio - (($precio * $descuento) / 100);
                            $subtotal = $cantidad * $precio_desc;
                            $total += $subtotal;
                        ?>
                        <tr class="trBody">
                            <td id="tproductoss"><?php echo $nombre; ?></td>
                            <td><?php echo MONEDA . number_format($precio_desc, 2, ".", ","); ?></td>
                            <td>
                                <input class="increment" type="number" min="1" max="15" step="1" value="<?php echo $cantidad?>" size="5" id="cantidad <?php $_id;?>" onchange="actualizaCantidad(this.value, <?php echo $_id;  ?>)">
                            </td>
                            <td>
                                <div id="subtotal_<?php echo $_id; ?>" name= "subtotal[]">
                                    <?php echo MONEDA . number_format($subtotal, 2, ".", ","); ?>
                                </div>
                            </td>
                            <td ><a  id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Delete</a></td>
                        </tr>
                        <?php } ?>

                          <tr >
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total_carritoCompra">
                                <h3 id="total"><?php echo MONEDA . number_format($total, 2, ".", ",");?></h3>
                            </td>
                          </tr>      

                    </tbody>
                    <?php } ?>
                </table>
            </section>

        </div>

        <article class="forBuy">
            <button>PAY</button>
        </article>

    <!---Fin de Seccion para mostrar productos en el carrito-->

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





<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminaModalLabel">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Do you want to romove this product from the list?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Delete</button>
      </div>
    </div>
  </div>
</div>


<!-- Termino  Modal -->







    <!--BOOSTRAP-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>









    <!--Script-->
    <script>
       let eliminaModal = document.getElementById('eliminaModal')
       eliminaModal.addEventListener('show.bs.modal', function(event){
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')
        let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
        buttonElimina.value = id
       })  
       

        function actualizaCantidad(cantidad, id){ 
        
            let url = '../clases/actualizar_carrito.php'
            let formData = new FormData()
            formData.append('action', 'agregar')
            formData.append('id', id)
            formData.append('cantidad', cantidad)

            fetch(url,{
                method: 'POST', 
                body: formData,
                mode: 'cors',
            }).then(response => response.json())
            .then(data =>{
                if(data.ok) {

                    let divsubtotal = document.getElementById('subtotal_' + id)
                    divsubtotal.innerHTML = data.sub

                    let total = 0.00
                    let list = document.getElementsByName('subtotal[]')

                    for(let i = 0; i < list.length; i++) {
                        total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                    }

                    total = new Intl.NumberFormat('en-US', {
                        minimunFractionDigits: 2
                    }).format(total)
                    document.getElementById('total').innerHTML = '<?php echo MONEDA; ?>' + total

                   
                }
            })
        }

        function eliminar(){ 

            let botonElimina = document.getElementById('btn-elimina')
            let id = botonElimina.value
        
        let url = '../clases/actualizar_carrito.php'
        let formData = new FormData()
        formData.append('action', 'eliminar')
        formData.append('id', id)


        fetch(url,{
            method: 'POST', 
            body: formData,
            mode: 'cors',
        }).then(response => response.json())
        .then(data =>{
            if(data.ok) {
                location.reload()
               
            }
        })
    }

        
    </script>
</body>

</html>