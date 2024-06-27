<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>uyy...cali ropa con flow</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 991px) {
            .navbar-brand {
                position: static;
                transform: none;
            }
        }

        .brand-img {
            filter: brightness(0) saturate(100%) invert(92%) sepia(15%) saturate(324%) hue-rotate(2deg) brightness(97%) contrast(86%);
        }
    </style>
    <style>
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 991px) {
            .navbar-brand {
                position: static;
                transform: none;
            }
        }

        .brand-img {
            filter: brightness(0) saturate(100%) invert(92%) sepia(15%) saturate(324%) hue-rotate(2deg) brightness(97%) contrast(86%);
        }
    </style>
</head>
<style>
    /* Estilos existentes... */

    /* Añada o modifique estos estilos */
    body {
        background-image: url('assets/imgs/main.jpg');
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: auto;
        background-color: transparent;
    }

    .jumbotron, .product-item, .container-fluid {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    body, h1, h2, h3, h4, h5, p, .nav-link {
        color: white !important;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .product-item {
        background-color: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(5px);
    }

    .custom-navbar {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    /* Estilo adicional para mejorar la visibilidad de los elementos del producto */
    .product-item h5 {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 10px;
        border-radius: 5px;
    }
</style>
<style>
    /* Otros estilos existentes... */

    body {
        background-image: url('assets/imgs/main.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
        background-color: #000; /* Color de fondo de respaldo */
    }

    /* Media query para pantallas más pequeñas */
    @media (max-width: 768px) {
        body {
            background-size: auto 100%;
            background-position: center top;
        }
    }
</style>

<header>
<style>
    body {
        background-image: url('assets/imgs/main.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
        background-color: #000;
    }

    @media (max-width: 768px) {
        body {
            background-size: auto 100%;
            background-position: center top;
        }
    }

    .jumbotron, .product-item, .container-fluid {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    body, h1, h2, h3, h4, h5, p, .nav-link {
        color: white !important;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .product-item {
        background-color: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(5px);
    }

    .custom-navbar {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .product-item h5 {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 10px;
        border-radius: 5px;
    }

    #cart-icon {
        position: relative;
    }

    #cart-count {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 5px;
        font-size: 12px;
    }
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    
        <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
            <div class="container">
                <a class="navbar-brand mx-auto" href="#">
                    <img style="color: gold;" src="assets/imgs/logo.svg" class="brand-img" alt="">
                    <span class="brand-txt">UYY... CALI</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CAMISAS.HTML">Camisas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallary">Shorts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#book-table">Medias</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Hoodies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testmonial">Sudaderas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Gorras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="cart-icon">
                                <i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header dark-gray-bar" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">CAMISAS</h1>
            <div class="d-inline-flex align-items-center text-white">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Products Start -->
    <?php
// Establece la conexión a la base de datos (ejemplo básico)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uycali";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para seleccionar todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Verifica si hay resultados y muestra los productos
if ($result->num_rows > 0) {
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4 col-md-6 mb-4 pb-2">';
        echo '<div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">';
        echo '<div class="position-relative gray-circle rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">';
        echo '<img class="rounded-circle w-100 h-100" src="' . $row['imagen'] . '" style="object-fit: cover;">';
        echo '</div>';
        echo '<h5 class="font-weight-bold mb-2">' . $row['nombre'] . '</h5>';
        echo '<p class="font-weight-bold mb-4">$' . $row['precio'] . '</p>';
        echo '<button class="btn btn-primary add-to-cart" data-name="' . $row['nombre'] . '" data-price="' . $row['precio'] . '">Añadir al carrito</button>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "0 resultados";
}
$conn->close();
?>

</header>
    <!-- Products End -->
 <!-- Footer and Modal Container Start -->
 <div style="background-color: dimgray;">
        <!-- Footer Start -->
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="m-0 mt-n2 display-4 text-primary" style="color: black;">
                        <span style="color: rgb(253, 253, 253);">UYY...</span><span style="color: rgb(252, 252, 252);"> CALI</span>
                    </h1>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2" style="color: rgb(175, 51, 51);">Direccion</h5>
                            <p class="mb-2">cll 5ta #21-49 jose maria obando, POPAYÁN</p>
                            <p class="mb-0">+57 302 2187249</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2" style="color: rgb(175, 51, 51);">Horarios</h5>
                            <p class="mb-2">lunes-sabado 7:00am-6:30pm</p>
                            <p class="mb-0">Domingos: Cerrado</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="">SAMOAR</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Modal del carrito -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Carrito de compras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cart-items">
                    <!-- Aquí se mostrarán los items del carrito -->
                </div>
                <div class="modal-footer">
                    <p>Total: $<span id="cart-total">0</span></p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="checkout">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Cart Javascript -->
    <script>
        let cart = [];
        
        function addToCart(name, price) {
            cart.push({name: name, price: price});
            updateCartCount();
            updateCartModal();
        }
        
        function updateCartCount() {
            document.getElementById('cart-count').textContent = cart.length;
        }
        
        function updateCartModal() {
            let cartItems = document.getElementById('cart-items');
            let total = 0;
            cartItems.innerHTML = '';
            cart.forEach(item => {
                cartItems.innerHTML += `<p>${item.name} - $${item.price}</p>`;
                total += parseFloat(item.price);
            });
            document.getElementById('cart-total').textContent = total.toFixed(2);
        }
        
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                let name = this.getAttribute('data-name');
                let price = this.getAttribute('data-price');
                addToCart(name, price);
            });
        });
        
        document.getElementById('cart-icon').addEventListener('click', function(e) {
            e.preventDefault();
            $('#cartModal').modal('show');
        });
        
        document.getElementById('checkout').addEventListener('click', function() {
            alert('¡Gracias por tu compra!');
            cart = [];
            updateCartCount();
            updateCartModal();
            $('#cartModal').modal('hide');
        });
    </script>
</body>