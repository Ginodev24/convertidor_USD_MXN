<!doctype html>
<html lang="en">

<head>
    <title>Convertir USD a MXN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="container">
            <br>
            <?php if (isset($_GET["error"])) { ?>

                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>

                    <?php echo $_GET["error"] ?>
                </div>

            <?php } ?>

            <?php if (isset($_GET["mensaje"])) { ?>

                <div
                    class="alert alert-info alert-dismissible fade show"
                    role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>

                    <?php echo $_GET["mensaje"] ?>
                </div>

            <?php } ?>



            <div class="card">
                <div class="card-header">Aplicación para convertir USD a MXN</div>
                <div class="card-body">
                    <form action="convertidor.php" method="post">

                        <div class="mb-3">
                            <label for="valor" class="form-label">Convertir de USD a MXN:</label>
                            <input
                                type="text"
                                class="form-control"
                                name="valor"
                                id="valor"
                                aria-describedby="helpId"
                                placeholder="Escriba la cantidad a convertir en MXN"
                                required />
                        </div>

                        <br>
                        <input type="submit" class="btn btn-success" value="Convertir a MXN (pesos mexicanos)">
                    </form>
                </div>
                <div class="card-footer text-muted"> by Gino</div>
            </div>
        </div>




    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>