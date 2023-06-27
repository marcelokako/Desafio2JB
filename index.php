<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Desafio Estagio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php include "imports.php"; ?>
</head>

<body>

    <div style="width: 400px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">
        
        <h2 align="center">Formulário</h2>
        <hr>
            <div id="bloco" class="form-group">
                <form method="POST" id="form">
                    <div class="form-group">
                        
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input name="telefone" type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                    </div>
                    <hr>
                    <div align="center">
                        <button name="inserir" type="submit" class="btn btn-primary">Enviar</button>
                        <?php
                        if (isset($_POST['inserir'])){
                            inserir_dados();
                        }
                        ?>
                    </div>
                </form>
                
             
          
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </div>
    </div>

    <hr><form method="post" align="center">
        <button name="listar" type="submit" class="btn btn-primary">Listar</button>
        </form>
            <?php
            if (isset($_POST['listar'])){
                listar_dados();
            }
            ?>
</body>

</html>
