<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/ico/fontawesome-free/css/all.min.css">

    <!--CSS -->
    <link rel="stylesheet" href="./assets/css/home/style.css">
    <link rel="stylesheet" href="./assets/css/Common/style.css">
    <title>Banca</title>
</head>

<body>
    <main class="container-fluid h-100 m-0 p-0">
        <div class="row h-100">
            <section class="col-2">
                <div class="sidebar h-100">
                    <div class="d-flex p-3">
                        <img src="./assets/img/user2-160x160.jpg" class="user-image pr-2" alt="user-image"/>
                        <p class="m-0 pt-2">Rogerio Pantozzi</p>
                        
                    </div>
                    <hr class="user-line"/>
                    <ul class="nav nav-pills nav-sidebar flex-column ml-2" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header" contenteditable="true">MINHA BANCA</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <i class="nav-icon far fa-image p-2"></i>
                                <p class="pt-1">INICIO</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <i class="nav-icon far fa-image p-2"></i>
                                <p class="pt-1">APOSTAS</p>
                            </a>
                        </li>


                        <li class="nav-header">MOVIMENTAÇÃO</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <i class="nav-icon far fa-image p-2"></i>
                                <p class="pt-1">DEPOSITO</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <i class="nav-icon far fa-image p-2"></i>
                                <p class="pt-1">SAQUE</p>
                            </a>
                        </li>


                        <li class="nav-header">CONTATO</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-flex flex-row">
                                <i class="nav-icon far fa-envelope p-2"></i>
                                <p class="pt-1">CONTATO</p>
                            </a>
                        </li>


                    </ul>
                </div>
            </section>
            <section class="col">
                <h1 class="mb-4">Início</h1>
                <div class="d-flex flex-row justify-content-between">
                    
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">BANCA INICIAL</p>
                            <p><?php echo 3+2;?></p>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">BANCA ATUAL</p>
                            <p><?php echo 2+2;?></p>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">STAKE</p>
                            <p><?php echo 2+5;?></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-between mt-4">
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">GREEN'S</p>
                            <p><?php echo 3+2;?></p>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">RED'S</p>
                            <p><?php echo 2+2;?></p>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body text-center">
                            <p class="card-title">MEDIA DIA</p>
                            <p><?php echo 2+5;?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
</body>

</html>