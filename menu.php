<?php

 session_start();
  //print_r($_SESSION);

  if((!isset($_SESSION['username']) == true) && (!isset($_SESSION['senha']) == true)){
    header('Location: login.php');
  }
  $user = $_SESSION['username'];
  $tag = $_SESSION['usertag'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!--Icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
        
    <!--Favicon-->
    <link rel="shortcut icon" href="img/001padrao.png" type="image/x-icon">
    <script src="js/code.js" defer></script>
    <script src="js/bootstrap.bundle.js"></script>
    <title>Menu</title>
</head>
<body class="bg-5 oswald-font" id="body" theme-dicender=default>
    <nav class="navbar fw-300 navbar-expand-lg bg-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="" class="logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><p class="text-clean fs-5 m-2 fw-500">Social</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><p class="text-clean fs-5 m-2 fw-500">Notificações</p></a>
              </li>

              <li class="nav-item dropdown m-2">
                <div class="bg-5 profile row mx-0 rounded-5 container">
                  <div class="h-100 col-md-3 p-0">
                    <img style="max-height: 80%;" class="w-auto position-relative top-50 end-0 translate-middle-y rounded-circle" src="https://media.discordapp.net/attachments/1067528111396229243/1120141859067531334/1_LuA7n8viWUZK_5n10YrwV6nIF5XRluf.png" alt="">
                  </div>
                  <div class="h-100 col-md-7 px-0">
                    <h6 class="m-0 text-1 mt-1"><?php echo "<?> $user </?>"?></h6>
                    <p class="m-0 text-clean" style="font-size: 0.8rem;"><?php echo "@<?> $tag </?>" ?></p>
                  </div>
                    <div class="h-100 col-md-2 position-relative dropdown">
                      <i class="bi-three-dots-vertical position-absolute start-50 translate-middle text-1" style="font-size: 1.5rem; top: 45%;" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="config"></i>
                      <ul class="dropdown-menu dropdown-menu-end dropdown drop-menu" id="dropdownPerfil">
                        <li>
                          <a class="dropdown-item switch-item" id="">
                            <i class="bi-person-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Meu perfil</p>
                          </a>
                        </li>
                        <li class="dropdown-item dropstart switch-item" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi-brush-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Meus temas</p>
                            <ul class="dropdown-menu dropdown drop-menu" style="margin-right: -3% !important; box-shadow: 0 10px 40px #000;" id="colorList">
                              <li>
                                <a class="dropdown-item switch-item" id="default"><button class="switch-color" id="defaultcolor">
                                    <img src="img/001.svg" class="switch-img" alt="">
                                  </button> 
                                  <p class="text-2 text-center m-1" >Tema padrão</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="coloryellow"><button class="switch-color" id="yellow">
                                  </button>
                                  <p class="text-2 text-center m-1" >Tema amarelo</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorgreen"><button class="switch-color" id="green">
                                  </button>
                                  <p class="text-2 text-center m-1" >Tema verde</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorred"><button class="switch-color" id="red">
                                  </button>
                                  <p class="text-2 text-center m-1" >Tema vermelho</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorblack"><button class="switch-color" id="black">
                                  </button>
                                  <p class="text-2 text-center m-1" >Tema preto</p>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item switch-item" id="colorwhite"><button class="switch-color" id="white">
                                  </button>
                                  <p class="text-2 text-center m-1" >Tema branco</p>
                                </a>
                              </li>
                            </ul>
                        </li>
                        <li>
                          <a class="dropdown-item switch-item" href="login.php" id="">
                            <i class="bi-person-fill-add text-2 fs-5"></i>
                            <p class="text-2 m-1">Adicionar conta</p>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item switch-item" id="">
                            <i class="bi-gear-fill text-2 fs-5"></i>
                            <p class="text-2 m-1">Configurações</p>
                          </a>
                        </li>
                        <li><hr></li>
                        <li><a href="logout.php" class="dropdown-item" id=""><p class="text-danger m-1">Logout</p></a></li>
                      </ul>
                    </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      <?php
      
      echo "<h1>Bem vindo <?>$user</?>!</h1>"
      
      ?>
      <div class="my-5">
        <div class="c-up bg-3 fs-4">
          <p class="my-1 mx-5">Explorar</p>
        </div>
        <div class="c-menu bg-3">
          <div class="row wrap">
            <i id="wrapLeft" class="bi-chevron-compact-left wrap-i"></i>
            <i class="bi-plus wrap-plus"></i>
            <ul id="wrapcar" class="wrap_car">
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1_LuA7n8viWUZK_5n10YrwV6nIF5XRluf" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque!</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2" ></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1a-1ZgJ7S03LNAbEuWmfFy2q0_XtWxrJE" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1J7z-UPubcRKserhavJTfrRjHgBamGBx5" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=18dTh9iWvt2mOM26oe9r3CX0KJp2tmMWs" height="186px" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1-KxxEmI_Q7fuqOteY7peIthnwjjrwt1-" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1uhQdGJVfArxB2pkeAz2Kusm1qTGLbyhc" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=10OEfai5w2s6cKfmaO-U0JycLZTwdggIk" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1bsRYeuUtirMbIc1K_3KMW3zS5LQaN_4w" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=1NWjPyetFGsyXvuIGVj0Vc4Uygszp43CM" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="https://docs.google.com/uc?id=178piqIWe387KK3iAT0nsWVrKfyyGC5uN" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="mb-3">
                      <i class="bi-heart-fill mx-1 text-2"></i>
                      <i class="bi-chat-right-fill mx-1 text-2"></i>
                      <i class="bi-share-fill mx-1 text-2"></i>
                    </div>
                    <div class="text-center m-1">                
                      <a href="#" class="text-2 text-decoration-underline">Saiba mais</a>
                    </div>

                  </div>
                </div>
              </li>
            </ul>
            <i id="wrap-right" text-anchor="middle" class="bi-chevron-compact-right wrap-i"></i>            
          </div>
        </div>  
      </div>     
      
      <div class="my-5">
        <div class="c-up bg-3 fs-4">
          <p class="my-1 mx-5">Expandir</p>
        </div>
        <div class="c-menu bg-3">
          <div class="row wrap-map">
            <i id="wrapLeft" class="bi-chevron-compact-left wrap-i"></i>
            <ul id="wrapcar" class="wrap_car-map">
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque!</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" height="186px" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
              <li class="wrap_card-map">
                <div class="card bg-5 text-clean p-0 mx-3" style="width: 18rem;">
                  <img src="img/bg_sign.svg" class="card-img-top img-card-menu" alt="...">
                  <div class="card-body ">
                    <h5 class="card-title title-limit">Card title</h5>
                    <p class="card-text card-limit my-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="text-center m-1">                
                      <div class=" mt-3">
                        <button type="submit" class="btn btn-primary btn-glass w-100">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>
              </li>
            </ul>
            <i id="wrap-right" text-anchor="middle" class="bi-chevron-compact-right wrap-i"></i>            
          </div>
        </div>  
      </div> 

    <div class="footer"></div>
</body>
</html>