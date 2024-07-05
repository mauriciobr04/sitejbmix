<!DOCTYPE html>
<html>
<head>
    <style>
        nav {
            max-width: 350px;
            width: 100%;
            background-color: white;
        }
        
        nav ul {
            list-style: none;
            padding: 0;
        }
        
        nav ul li a {
            padding: 5px;
            color: ;
        }
        
        nav ul li a:hover {
            background-color: aliceblue;
            text-decoration: none;
            color:green
        }
        
        nav li ul {
            display: none;
        }
        
        nav li:hover ul {
            display: block;
        }
        
        .logo {
            background-color: white;
            width: 215px;
            height: 110px;
            margin-top: 10px;
           
        }
        
        .verde {
            background-color: #006400;
            min-height: 60px;
            color: white;
            display: flex;
            align-items: center;
            border-radius: 50px;
            padding-right: 25px;
        }
        
        .menu {
            margin-right: 10px;
            position: absolute;
            right: 21%;
            top: 7%;
        }
        
        .menu img {
            height: 40px;
            width: auto;
        }
        
        .lg {
            width: 350px;
            
            height: 70px;
            position: absolute;
            top: 40px;
            left: 38%;
            color: rgb(81, 7, 199);
           
        }
        
        .btn:hover {
            color: blue;
        }
        
        .link {
            height: 10px;
            width: 20px;
            margin-right: 20px;
            font-size: 16px;
        }
        
        .link:hover {
            color: green;
            text-decoration: none;
        }
        
        .login {
            position: absolute;
            right: 5%;
            top: 40px;
            display: flex;
            align-items: center;
        }
        
        .login img {
            width: 85px;
            height: auto;
            margin-right: 10px;
        }
        
        .login .verde {
            margin-left: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="cabeçalho">
            <div class="logo">
                <img src="imagem/Jbs Nova Marca.png" height="105px" width="206px">
            </div>
            <div class="lg">
                <center>
                    <a href="#" class="link">Inicio</a>
                    <a href="#" class="link">Empresa</a>
                    <a href="#" class="link">Produtos</a>
                    <a href="#" class="link">Contato</a>
                </center>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li>
                            <img src="imagem/download-removebg-preview.png" height="20px" width="20px">
                            <ul>
                                <li><a href="#">desinshow <img src="imagem/desin show.png"></a></li>
                                <li><a href="#"> finni mais<img src="imagem/finni mais.png" height="10px" width="10px"></a></li>
                                <li><a href="#">gabiru <img src="imagem/gabiru1.png" alt="Gabiru" height="10px" width="10px"></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="login">
                <div class="verde">
                    <img src="imagem/login__1_-removebg-preview.png" alt="Portal do Cliente" height="75px" width="85px">
                    Portal do Cliente
                </div>
            </div> 
        </div>
            
    </div>
</body>
</html>
