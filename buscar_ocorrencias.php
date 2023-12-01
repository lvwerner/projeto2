<!DOCTYPE html>
<html>
<head>
    <title>Dados da Tabela</title>
    <style>
        /* Estilos para a tabela */
        table {
            border-collapse: collapse;
            width: 60%;
            max-width: 800px;
            margin: 0 auto;
            border: 2px solid lightblue;
            border-radius: 8px; /* Adicionando bordas arredondadas */
        }
        th, td {
            border: 1px solid lightblue;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #e6f0ff; /* Um tom mais escuro de azul para o cabeçalho */
            color: #14406e; /* Cor do texto mais escura para o cabeçalho */
        }

        /* Estilos para tornar a tabela responsiva */
        @media only screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }
        #body {
            background-color: rgba(173, 172, 191, 0.361);
            font-family: 'Open Sans', coursive;
        }
        .tabelinha {
            background-color: #ffffff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .tabelinha a{
            color: #14406e;
            text-decoration: none;
        }
        .tabelinha:hover{
            background-color: #e6f7ff;
        }
    </style>
</head>
<body id="body">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sa_bombeiros";
    $tablename = "ficha_ocorrencia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM $tablename";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td class="tabelinha"><a href="#" onclick="showDetails(' . $row['id'] . ')">Ficha de Ocorrência ' . $row['id'] . ' +</a></td>';
            echo '</tr>';
            echo '<tr class="details" id="details_' . $row['id'] . '" style="display: none;">';
            echo '<td colspan="2">';
            echo '<table style="border-collapse: collapse; width: 100%; border: 2px solid lightblue; border-radius: 8px;">';
            foreach ($row as $key => $value) {
                echo '<tr>';
                echo '<th style="background-color: #e6f0ff; color: #14406e; text-align: left; padding: 8px; border: 1px solid lightblue;">' . htmlspecialchars($key) . '</th>';
                echo '<td style="border: 1px solid lightblue; text-align: left; padding: 8px;">' . htmlspecialchars($value) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</td>';
            echo '</tr>';
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado na tabela '$tablename'.";
    }

    $conn->close();
    ?>

    <script>
        function showDetails(id) {
            const details = document.getElementById('details_' + id);
            if (details.style.display === 'none') {
                details.style.display = 'table-row';
            } else {
                details.style.display = 'none';
            }
        }
    </script>
</body>
</html>
