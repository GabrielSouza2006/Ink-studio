<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/text.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Adicionar produto</title>
</head>

<body>
    <?php include('home-admin.php') ?>

    <main class="container-fluid">
        <section class="container" style="padding-top: 100px;">
            <form method="post" action="envia-prod.php" name="formulario-prod">
                <div class="row g-3">
                    <div class="col">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="number" name="preco" class="form-control" placeholder="R$0,00" aria-label="Last name">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Enviar</button>
            </form>
        </section>
    </main>
</body>

</html>