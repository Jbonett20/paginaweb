<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        input.no-spin::-webkit-outer-spin-button,
        input.no-spin::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Para Firefox */
        input.no-spin {
            -moz-appearance: textfield;
        }
    </style>

</head>

<body class="bg-gradient-primary">

<div class="container">

<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <img src="../assets/img/Logo1.png" class="img-fluid" style="max-width: 150px;" alt="Logo">
                    </div>

                    <!-- Login form -->
                    <div class="col-12">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h5 text-gray-900 mb-4">Inicia sesión</h1>
                            </div>

                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                            <?php endif; ?>

                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="identification" id="identification" placeholder="Usuario" require>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" id="password" placeholder="Contraseña" require>
                                </div>
                                <button  class="btn btn-primary btn-user btn-block" id="lg_entrar">
                                    Entrar
                                </button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>