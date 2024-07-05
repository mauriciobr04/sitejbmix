<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Estilos CSS */
        .cabeçalho {position: relative;
            left: 0px;
            /* Adicione estilos para o cabeçalho */
        }

        
        nav {
            max-width: 350px;
            width: 100%;
            background-color: white;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            padding: 5px;
            color: blue;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: aliceblue;
            text-decoration: none;
            color: green;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            border: 1px solid #ccc;
            border-top: none;
        }

        nav ul li:hover ul {
            display: block;
        }
            .logo {
            position: relative;
            left: 200px;
                width: 206px;
                height: 105px;
                margin-top: 20px;
            
            }
            .cabeçalho{position: relative;
            left: 0px;}
            .verde {
                background-color: #006400;
                min-height: 60px;
                color: white;
                display: flex;position: absolute;
                right:70px;
                top: 5%; width: 209px;
                align-items: center;
                border-radius: 10px;
                padding-right: 25px;
                font-size: 12px;
            }
            .btn:hover {
                color: blue;
            }
            
            .link {
                height: 10px;
                width: 20px;
                color: blue;
                text-decoration: none;
                margin-right: 20px;
                font-size: 16px;
            }
            .localidade {
position: absolute;
left: 450px;
color: white;
bottom: 210px; /* Ajuste esta propriedade para alinhar verticalmente */
font-size: 17px;
}

.redessociais {
position: absolute;
left: 750px;
top:3000px; /* Ajuste esta propriedade para alinhar verticalmente */
color: white;
}
.linha{width: 70%; height: 1px; background-color: white; position: absolute; top: 3150px; left: 15%;
}
body{overflow-x: hidden;}

        .rodapé{ background-color: #001F3F;
    position: absolute;
    height: 350px;width: 100%;
top: 2950px;}

        .serviços ul{list-style: none;}
        
        .serviços{position: absolute;
            font-size: 17px;
        top: 3155px; left: 400px;color: white;
    list-style: none;}
    .contato ul{list-style: none;}
        .contato{position: absolute;
            font-size: 17px;
            left: 600px ;
           top: 3155px;
            color: white;
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
            .menu {
            margin-right: 1%;
            position: absolute;
            right: 29%;
            top: 50px;
        }

        .menu img {
            height: 40px;
            width: auto;
        }

            .lg {
                width: 350px;
                height: 70px;
                position: absolute;
                
                top: 50px;
                left: 38%;
                color: rgb(81, 7, 199);
            
            }
            .menu-rodape{position: absolute;
        top: 3155px; left: 200px; color:white;
    font-size: 17px;}
        .menu-rodape ul{list-style: none;}
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <div class="cabeçalho">
        <div class="logo">
            <img src="imagem/LOGO JBMIX.png" height="105px" width="206px">
        </div>
        <div class="lg">
            <center>
                <a href="home2.html" class="link">Inicio</a>
                <a href="empresa.html" class="link">Empresa</a>
                <a href="#" class="link">Produtos</a>
                <a href="contato.html" class="link">Contato</a>
            </center>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li>
                        <img src="imagem/download-removebg-preview.png" height="20px" width="20px">
                        <ul>
                            <li><a href="desinshow.html">desinshow <img src="imagem/desin show.png"></a></li>
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

    <!-- Formulário de Cadastro de Produtos -->
    <div class="formulario container">
        <h2>Cadastro de Produtos</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do Produto:</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Produto:</label>
                <input type="text" class="form-control" id="tipo" name="tipo">
            </div>
            <div class="form-group">
                <label for="preco">Preço do Produto:</label>
                <input type="text" class="form-control" id="preco" name="preco">
            </div>
            <div class="form-group">
                <label for="marca">Marca do Produto:</label>
                <input type="text" class="form-control" id="marca" name="marca">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


    <?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (isset($_POST["nome"]) && isset($_POST["tipo"]) && isset($_POST["preco"]) && isset($_POST["marca"]) && isset($_FILES["imagem"])) {
        // Obtém os valores dos campos do formulário
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $preco = $_POST["preco"];
        $marca = $_POST["marca"];
        $imagem_nome = $_FILES["imagem"]["name"];
        $imagem_tmp = $_FILES["imagem"]["tmp_name"];
        $imagem_destino = "imagens/" . $imagem_nome;

        // Move a imagem para o diretório de destino
        move_uploaded_file($imagem_tmp, $imagem_destino);

        // Conecta ao banco de dados (substitua os valores conforme necessário)
        $conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

        // Verifica se a conexão foi bem sucedida
        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Prepara a consulta SQL para inserir o produto no banco de dados
        $sql = "INSERT INTO produtos (nome, tipo, preco, marca, imagem) VALUES ('$nome', '$tipo', '$preco', '$marca', '$imagem_destino')";

        // Executa a consulta SQL
        if ($conexao->query($sql) === TRUE) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o produto: " . $conexao->error;
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}
?>

    <!-- Rodapé -->
    <div class="rodapé">
        <div class="logo">
            <img src="imagem/LOGO JBMIX.png" height="85px" width="206px">
        </div> 
        <div class="localidade">
            <strong>Rio Grande do Sul</strong><br>
            R. Venâncio Aíres, 205<br>
            Centro, Ijuí - RS<br>
            CEP  98700-000
        </div>
        <div class="redessociais">
            <strong>Acompanhe a JBmix nas redes sociais</strong><br>
            <a href="https://www.instagram.com/portaljbmix/"><img src="imagem/intagran (1).png" height="20px" width="20px"></a>
            <a href="https://www.facebook.com/p/Portal-JB-Mix-100082896894574/?locale=pt_BR"><img src="imagem/facebook (1).png" height="30px" width="30px"></a>
        </div>
        <div class="linha"></div>
        <div class="menu-rodape">
            <strong>Menu</strong>
            <ul>
                <li>Inicio</li>
                <li>Sobre nós</li>
                <li>Contato</li>
            </ul>
        </div>
        <div  class="serviços">
            <strong>Serviços</strong>
            <ul>
                <li>Portal do cliente</li>
            </ul>
        </div>
        <div class="contato">
            <strong>Contato</strong>
            <ul>
                <li><img src="imagem/telefone (1).png" height="15px" width="15px"> (55) 3332-6233</li>
            </ul>
        </div>
    </div>
</body>
</html>
