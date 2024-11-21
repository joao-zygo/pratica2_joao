<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/htmx.org@2.0.3" integrity="sha384-0895/pl2MU10Hqc6jd4RvrthNlDiE9U1tWmX7WRESftEDRosgxNsQG/Ze9YMRzHq" crossorigin="anonymous"></script>
</head>
<body>
    <div class="filter">
        <form hx-target="main" hx-get="solicitacao.php">
            <label for="status">Status</label>
            <select id="status" name="filter">
                <option value="0">Todos</option>
                <option value="1">Aberto</option>
                <option value="2">Fechado</option>
            </select>
            <button>Filtrar</button>
        </form>
    </div>
    <main hx-get="solicitacao.php" hx-trigger="load"></main>
    <a href="Create.html">Criar</a>
</body>
</html>