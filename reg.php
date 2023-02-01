<?php
include 'conexao.php';
if(isset($_POST['SUB'])){
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cidade = $_POST['cidade'];
    $idade = $_POST['idade'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'],"imagem/".$_FILES['f1']['name']);
        $img = "imagem/".$FILES['f1']['name'];

    }
  $i = "insert into reg(usuario,senha, cidade, imagem, nome, idade)
  value('$usuario', '$senha', '$cidade', '$img', '$nome', '$idade')";
  mysqli_query($con, $i);
}

?>



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                        <input type="text" name="usuário">
                    </td>
                </tr>
                <tr>
                    <td>
                        Senha
                        <input type="Senha" name="senha">
                    </td>
                </tr>
                <tr>
                    <td>
                        Cidade
                        <select name="cidade">
                            <option value="">-select-</option>
                            <option value="Hortolandia">Hortolândia</option>
                            <option value="Campinas">Campinas</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        Idade
                        <input type="int"name="idade">
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        Image
                        <input type="file" name="f1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>