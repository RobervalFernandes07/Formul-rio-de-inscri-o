<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-formulario.css">
    <title>Inscrição Curso Técnico</title>
   
</head>
<body>
    <header><h1>Formulário - Inscrição Curso Técnico</h1></header>
    <nav><h2></h2></nav>
    <main>
        <form action="Prova.php" method="POST">
            <table>
                <tr><td>Nome:</td><td><input type="text" name="nome" required></td></tr>
                <tr><td>Telefone:</td><td><input type="text" name="tel" required></td></tr>
                <tr>
                    <td>Curso:</td>
                    <td>
                        <select name="curso" id="curso" required>
                            <option value="" disabled selected>Escolha</option>
                            <option value="Administração">Administração</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Mecânica">Mecânica</option>
                        </select>
                    </td>
                </tr>
                <tr><td>Prova ampliada</td><td><input type="checkbox" name="ampliada" value="Sim"></td></tr>
                <tr><td>Acesso mínimo (térreo)</td><td><input type="checkbox" name="acesso" value="Sim"></td></tr>
                <tr><td>Outro</td><td><input type="checkbox" name="outro" value="Sim"></td></tr>
                <tr><td>Qual:</td><td><input type="text" name="resposta"></td></tr>
                <tr>
                    <td>Já trabalha na área do curso?</td>
                    <td>
                        <input type="radio" name="trabalha" value="Sim"> Sim
                        <input type="radio" name="trabalha" value="Não"> Não
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="reset" value="Limpar">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
        <button onclick="window.location.href='Lista.php'" style="margin-top: 20px; padding: 10px 20px; background-color: #1EA665; color: white; font-size: 16px; border: none; border-radius: 4px; cursor: pointer;">
            Ver Lista de Inscrições
        </button>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"] ?? "");
            $tel = htmlspecialchars($_POST["tel"] ?? "");
            $curso = htmlspecialchars($_POST["curso"] ?? "");
            $ampliada = isset($_POST["ampliada"]) ? "Sim" : "Não";
            $acesso = isset($_POST["acesso"]) ? "Sim" : "Não";
            $outro = isset($_POST["outro"]) ? "Sim" : "Não";
            $resposta = htmlspecialchars($_POST["resposta"] ?? "");
            $trabalha = htmlspecialchars($_POST["trabalha"] ?? "Não respondido");

            if ($curso == "") {
                echo "<p>ATENÇÃO !!! SELECIONE UM CURSO.</p>";
            } else {
                echo "<p>Nome: $nome</p><p>Telefone: $tel</p><p>Curso: $curso</p>";
                echo "<p>Prova ampliada: $ampliada</p><p>Acesso fácil (térreo): $acesso</p><p>Outro: $outro. $resposta</p>";
                echo "<p>Trabalha na área: $trabalha</p><p>____________________________________</p>";
                
                $texto = "$nome - $tel - $curso\nProva ampliada: $ampliada\nAcesso fácil: $acesso\nOutro: $outro. $resposta\nTrabalha na área: $trabalha\n____________________________________\n";
                $arquivo = preg_replace("/[^a-zA-Z0-9]+/", "", $curso) . ".txt";
                file_put_contents($arquivo, $texto, FILE_APPEND);
                echo "<p>Dados cadastrados com sucesso!</p>";
            }
        }
        ?>
    </main>
    <footer><h2>Formulário desenvolvido para fins didáticos</h2></footer>
</body>
</html>