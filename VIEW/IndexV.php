<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SOFTTORE/ASSETS/CSS/IndexV.css">
    <title>SOFTTORE</title>
</head>
<body background="../ASSETS/IMG/fondo2.png">
    <header id="inicio">
       <img src="../ASSETS/IMG/laeconomiaa.png" alt="Logo">
       <br><br>
       <nav>
           <ul>
               <li><a href="login.php">Atras</a></li>
               <li><a href="https://www.google.com">Salir</a></li> 
           </ul>
       </nav>
   </header>
   <main>

    <div class="search-bar">
       <input type="text" id="search-input" placeholder="Buscar productos..." oninput="searchProducts()">
       <button id="clear-btn" onclick="clearSearch()">X</button>
   </div>

   <div class="no-hay-producto" id="no-results">
    No contamos con este producto :(
</div>


<h1>PASABOCAS</h1>

<center>

    <div class="productos">
        <div class="producto">
            <img src="../ASSETS/IMG/ga.jpg" alt="Producto 1">
            <h2>Galletas Ramo de Limón</h2>
            <p>Precio: 20000$</p>
            <button onclick="addToCart('Galletas Ramo de Limón', 20000)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/jet.jpg" alt="Producto 2">
            <h2>Jet</h2>
            <p>Precio x10 UND: 7500$</p>
            <button onclick="addToCart('Jet', 7500)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/bom.jpg" alt="Producto 3">
            <h2>Bon Bon Bum Sour</h2>
            <p>Precio: 15000$</p>
            <button onclick="addToCart('Bon Bon Bum Sour', 15000)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/quip.jpg" alt="Producto 4">
            <h2>Quipitos</h2>
            <p>Precio x24 UND: 10000$</p>
            <button onclick="addToCart('Quipitos', 10000)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/lon.jpg" alt="Producto 5">
            <h2>Papas Fritas Mega Lonchera</h2>
            <p>Precio x24 UND: 24000$</p>
            <button onclick="addToCart('Papas Fritas Mega Lonchera', 24000)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/dor.jpg" alt="Producto 1">
            <h2>Doritos</h2>
            <p>Precio c/u: 8500$</p>
            <button onclick="addToCart('Doritos', 8500)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/tru.jpg" alt="Producto 2">
            <h2>Gomitas Trululu Fresitas</h2>
            <p>Precio c/u: 2500$</p>
            <button onclick="addToCart('Gomitas Trululu Fresitas', 2500)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/pop.jpg" alt="Producto 3">
            <h2>Popetas Mix Caramelo Y Queso</h2>
            <p>Precio c/u: 10500$</p>
            <button onclick="addToCart('Popetas Mix Caramelo Y Queso', 10500)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/hel.jpg" alt="Producto 4">
            <h2>Helado Crem Helado Sabor a Cereza</h2>
            <p>Precio c/u: 20000$</p>
            <button onclick="addToCart('Helado Crem Helado Sabor a Cereza', 20000)">Agregar al carrito</button>
        </div>
        <div class="producto">
            <img src="../ASSETS/IMG/fru.jpg" alt="Producto 5">
            <h2>Frunas</h2>
            <p>Precio c/u: 10000$</p>
            <button onclick="addToCart('Frunas', 10000)">Agregar al carrito</button>
        </div>

    </center>
    
    <h1>FRUTAS Y VERDURAS</h1>
    <center>
        <div class="productos">
            <div class="producto">
                <img src="../ASSETS/IMG/man.jpg" alt="Producto 1">
                <h2>Manzana</h2>
                <p>Precio c/u: 1000$</p>
                <button onclick="addToCart('Manzana', 1000)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/ban.jpg" alt="Producto 2">
                <h2>Banano</h2>
                <p>Precio c/u: 500$</p>
                <button onclick="addToCart('Banano', 500)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/cebo.jpg" alt="Producto 3">
                <h2>Cebolla</h2>
                <p>Precio c/u: 700$</p>
                <button onclick="addToCart('Cebolla', 700)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/ajo.jpg" alt="Producto 4">
                <h2>Ajo</h2>
                <p>Precio c/u: 1000$</p>
                <button onclick="addToCart('Ajo', 1000)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/toma.jpg" alt="Producto 5">
                <h2>Tomate</h2>
                <p>Precio c/u: 800$</p>
                <button onclick="addToCart('Tomate', 800)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/Bere.jpg" alt="Producto 6">
                <h2>Berenjena</h2>
                <p>Precio c/u: 2500$</p>
                <button onclick="addToCart('Berenjena', 2500)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/Lechu.jpg" alt="Producto 7">
                <h2>Lechuga</h2>
                <p>Precio c/u: 2500$</p>
                <button onclick="addToCart('Lechuga', 2500)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/pa.jpg" alt="Producto 8">
                <h2>Papa</h2>
                <p>Precio Lb: 2500$</p>
                <button onclick="addToCart('Papa', 1000)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/Broco.jpg" alt="Producto 9">
                <h2>Brocoli</h2>
                <p>Precio c/u: 3000$</p>
                <button onclick="addToCart('Brocoli', 3000)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/fr.jpg" alt="Producto 10">
                <h2>Fresa</h2>
                <p>Precio c/u: 600$</p>
                <button onclick="addToCart('Fresa', 600)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/cr.jpg" alt="Producto 11">
                <h2>Cereza</h2>
                <p>Precio c/u: 500$</p>
                <button onclick="addToCart('Cereza', 500)">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="../ASSETS/IMG/pay.jpg" alt="Producto 12">
                <h2>Papaya</h2>
                <p>Precio c/u: 6000$</p>
                <button onclick="addToCart('Papaya', 6000)">Agregar al carrito</button>
            </div>
        </center>


        <h1>CARNES</h1>

        <center>
            <div class="productos">

                <div class="producto">
                    <img src="../ASSETS/IMG/res.jpg" alt="Producto 1">
                    <h2>Carne de Res</h2>
                    <p>Precio Lb: 12000$</p>
                    <button onclick="addToCart('Carne de Res', 12000)">Agregar al carrito</button>
                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/cerdo.jpg" alt="Producto 2">
                    <h2>Carne de Cerdo</h2>
                    <p>Precio Lb: 11000$</p>
                    <button onclick="addToCart('Carne de Cerdo', 11000)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/chorizo.jpg" alt="Producto 3">
                    <h2>Chorizo</h2>
                    <p>Precio Lb: 14000$</p>
                    <button onclick="addToCart('Chorizo', 14000)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/mojarra.jpg" alt="Producto 4">
                    <h2>Mojarra</h2>
                    <p>Precio Lb: 7500$</p>
                    <button onclick="addToCart('Mojarra', 7500)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/lomo.jpg" alt="Producto 5">
                    <h2>Lomo de Cerdo</h2>
                    <p>Precio Lb: 14000$</p>
                    <button onclick="addToCart('Lomo de Cerdo', 14000)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/costilla.jpg" alt="Producto 6">
                    <h2>Costilla de Cerdo</h2>
                    <p>Precio Lb: 8000$</p>
                    <button onclick="addToCart('Costilla de Cerdo', 8000)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/pata.jpg" alt="Producto 7">
                    <h2>Pata de Cerdo</h2>
                    <p>Precio Lb: 5000$</p>
                    <button onclick="addToCart('Pata de Cerdo', 5000)">Agregar al carrito</button>

                </div>
                <div class="producto">
                    <img src="../ASSETS/IMG/salmon.jpg" alt="Producto 8">
                    <h2>Salmon</h2>
                    <p>Precio Lb: 23000$</p>
                    <button onclick="addToCart('Salmon', 23000)">Agregar al carrito</button>
                </div>

            </center>

            <h1>ARTICULOS DE ASEO</h1>

            <center>
                <div class="productos">

                    <div class="producto">
                        <img src="../ASSETS/IMG/clorox.jpg" alt="Producto 1">
                        <h2>Blanquiador</h2>
                        <p>Precio c/u: 2000$</p>
                        <button onclick="addToCart('Blanquiador', 2000)">Agregar al carrito</button>
                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/trapero.jpg" alt="Producto 2">
                        <h2>Traperos de colores</h2>
                        <p>Precio c/u: 8500$</p>
                        <button onclick="addToCart('Traperos de colores', 8500)">Agregar al carrito</button>
                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/fabuloso.jpg" alt="Producto 3">
                        <h2>Fabuloso</h2>
                        <p>Precio c/u: 4800$</p>
                        <button onclick="addToCart('Fabuloso', 4800)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/1a.jpg" alt="Producto 4">
                        <h2>Gel</h2>
                        <p>Precio c/u: 6500$</p>
                        <button onclick="addToCart('Gel', 6500)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/protex.jpg" alt="Producto 5">
                        <h2>Protex</h2>
                        <p>Precio c/u: 2500$</p>
                        <button onclick="addToCart('Protex', 2500)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/aromax.jpg" alt="Producto 6">
                        <h2>Aromax</h2>
                        <p>Precio c/u: 2500$</p>
                        <button onclick="addToCart('Aromax', 2500)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/rey.jpg" alt="Producto 7">
                        <h2>Jabón Rey</h2>
                        <p>Precio c/u: 1500$</p>
                        <button onclick="addToCart('Jabón Rey', 1500)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/fav.jpg" alt="Producto 8">
                        <h2>Jabón Fab</h2>
                        <p>Precio c/u: 23000$</p>
                        <button onclick="addToCart('Jabón Fab', 23000)">Agregar al carrito</button>
                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/dental.jpg" alt="Producto 9">
                        <h2>Crema de dientes</h2>
                        <p>Precio c/u: 4800$</p>
                        <button onclick="addToCart('Crema de dientes', 4800)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/axion.jpg" alt="Producto 6">
                        <h2>Jabón de losa axión</h2>
                        <p>Precio c/u: 3000$</p>
                        <button onclick="addToCart('Jabón de losa axión', 3000)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/sua.jpg" alt="Producto 7">
                        <h2>Suavitel</h2>
                        <p>Precio c/u: 3500$</p>
                        <button onclick="addToCart('Suavitel', 3500)">Agregar al carrito</button>

                    </div>
                    <div class="producto">
                        <img src="../ASSETS/IMG/dove.jpg" alt="Producto 8">
                        <h2>Dove</h2>
                        <p>Precio c/u: 5000$</p>
                        <button onclick="addToCart('Dove', 5000)">Agregar al carrito</button>
                    </div>

                </center>

            </main>

            <div id="cart">
                <ul id="cart-items">
                </ul>
                <img src="../ASSETS/IMG/carrito.jpg" width="30" height="30"><p id="cart-total">Total: 0$</p>
                <div class="cart-buttons">
                    <button onclick="clearCart()">Vaciar carrito</button>
                    <button id="checkout-button">Comprar</button>
                </div>
            </div>

            <footer>
                <p> SOFTTORE&copy; 2024 Derechos reservados</p>
            </footer>

            <script src="http://localhost/SOFTTORE/ASSETS/JS/carritoo.js"></script>
            <script src="http://localhost/SOFTTORE/ASSETS/JS/barra.js"></script>

        </body>
        </html>
