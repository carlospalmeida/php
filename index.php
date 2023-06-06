<!doctype html>
<html lang="pt-br">

<head>
    <title>Aula01 - PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <main>
        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <form action="./arquivos/calculo.php" method="get">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">X:</label>
                            <input type="number" class="form-control" name="numx">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Y:</label>
                            <input type="number" class="form-control" name="numy">
                        </div>

                        <button type="submit" name="calcular" class="btn btn-outline-primary">Calcular</button>
                    </form>

                    <a href="./arquivos/calculo.php?nome=Ana">Passar informacoes pelo link</a>

                </div>

            </div>

        </div>

    </main>
































    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>