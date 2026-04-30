20:00
New messages
<?php

if (isset($_POST['nome'], $_POST['n1'], $_POST['n2'], $_POST['n3'])) {

    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Aluno: $nome <br>";
    echo "Média: $media <br>";

    if ($media >= 6) {
        echo "Resultado: Aprovado";
    } else {
        echo "Resultado: Reprovado";
    }

    echo "<br><br><a href='index.html'>Voltar</a>";

} else {
    echo "Acesse pelo formulário.";
}

?>