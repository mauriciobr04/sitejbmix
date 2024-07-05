<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Comentários</title>
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

    <!-- Formulário de Comentários -->
    <div class="formulario">
        <h2>Deixe um Comentário</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="comentario">Comentário:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Comentário</button>
        </form>
    </div>

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

<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo de comentário foi preenchido
    if (isset($_POST["comentario"]) && !empty($_POST["comentario"])) {
        // Obtém o valor do campo do formulário
        $comentario = $_POST["comentario"];
        $codigo_revisao = 'n'; // Define o valor padrão para o código de revisão

        // Conecta ao banco de dados (substitua os valores conforme necessário)
        $conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

        // Verifica se a conexão foi bem sucedida
        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Prepara a consulta SQL para inserir o comentário no banco de dados
        $sql = "INSERT INTO comentarios (comentario, codigo_revisao) VALUES ('$comentario', '$codigo_revisao')";

        // Executa a consulta SQL
        if ($conexao->query($sql) === TRUE) {
            echo "Comentário enviado com sucesso!";
        } else {
            echo "Erro ao enviar o comentário: " . $conexao->error;
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
    } else {
        echo "Por favor, preencha o campo de comentário.";
    }
}
?>