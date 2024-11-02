<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inscrições - Curso Técnico</title>
    <link rel="stylesheet" href="style-lista.css">
    
</head>
<body>
    <header><h1>Lista de Inscrições - Curso Técnico</h1></header>
    <main>
        <form action="Lista.php" method="POST">
            <label for="curso">Curso:
                <select name="curso" id="curso" required>
                    <option value="">Escolha</option>
                    <option value="Administração">Administração</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Mecânica">Mecânica</option>
                </select>
            </label>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["curso"])) {
            $curso = preg_replace("/[^a-zA-Z0-9]+/", "", $_POST["curso"]);
            $arquivo = $curso . ".txt";

            if (file_exists($arquivo) && is_readable($arquivo)) {
                echo "<pre>" . htmlspecialchars(file_get_contents($arquivo)) . "</pre>";
            } else {
                echo "<p>Nada encontrado.</p>";
            }
        } else {
            echo "<p>Selecione o curso para ler os dados cadastrados.</p>";
        }
        ?>
    </main>
    <footer><h2>Lista para fins didaticos</h2></footer>
</body>
</html>
