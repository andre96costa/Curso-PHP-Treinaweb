<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto PHP Fundamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Treinaweb</span>
        </div>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Versão</th>
                <th scope="col">Carga Horaria</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursoRepositorio->todos() as $curso) :?>
                    <tr>
                        <th>
                            <?= $curso->nome ?>
                        </th>
                        <td>
                            <?=  $curso->versao; ?>
                        </td>
                        <td>
                            <?= $curso->carga_horaria; ?>
                        </td>
                        <td>
                            <?=  $curso->status == 1 ? 'Ativo' : 'Desativado'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>