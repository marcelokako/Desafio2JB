<?php
    function inserir_dados(){

        $hs = "localhost"; // host
        $us = "root"; // user
        $ps = ""; // senha
        $db = "cadastrosjb"; // database
        $tb = "dados_cadastro"; // tabela
        
        $mysqli = new mysqli($hs, $us, $ps, $db);
        
        if ($mysqli->connect_error){
            die("conexão com mysql não estabelecida");
        }
        
        if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["telefone"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            $sql = "INSERT INTO $tb (nome, email, telefone) VALUES ('$nome', '$email', $telefone)";
        }
        
        if ($mysqli->query($sql) === TRUE) {
            echo "<br>Item adicionado com sucesso<br>";
        } else {
            echo "<br>Erro ao adicionar item: " . $mysqli->error;
        }
    }

    function listar_dados(){
           
        $hs = "localhost"; // host
        $us = "root"; // user
        $ps = ""; // senha
        $db = "cadastrosjb"; // database
        $tb = "dados_cadastro"; // tabela

        $mysqli = new mysqli($hs, $us, $ps, $db);
        if ($mysqli->connect_error){
            die("conexão com mysql não estabelecida");
        }
        $sql = "SELECT * FROM $tb";

        $dados = $mysqli->query($sql);

        if ($dados->num_rows > 0) {
            // Exibe os dados encontrados

            echo '<table border = "solid" align = "center" text-align="center" style="text-align: center">';
            echo "<tr>";
            echo '<th colspan=4> Dados Cadastrados </th>';
            echo "<tr><td><b>ID</b></td><td><b>Nome</b></td><td><b>E-mail</b></td><td><b>Telefone</b></td></tr>";
            
            while ($row = $dados->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["telefone"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum dado encontrado na tabela";
        }
    }
?>
