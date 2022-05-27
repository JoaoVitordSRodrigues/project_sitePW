<html>
    <head>
        <meta charset="UTF-8"/>
        <title> 
            <?php if(isset($_GET['opcao'])){ echo $_GET['opcao']; ?>
            <?php } else { echo "Home - Desenhos animados" ?>
            <?php } ?>
        </title>
        <link href="style.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>               
    
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="bootstrap" viewBox="0 0 118 94">
                <title>Bootstrap</title>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
            </symbol>
            <symbol id="facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </symbol>
            <symbol id="instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </symbol>
            <symbol id="twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </symbol>
        </svg>
    </head>
    <body>      
        <div class="container">
            <?php if(isset($_GET['opcao'])){ ?>
                <?php if($_GET['opcao'] == 'Pica-Pau') { ?>
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-light bg-dark">
                                <div class="container-fluid">
                                    <img src="imgs/picapau/logo_picapau.png" alt="" width="100" height="80" class="d-inline-block align-text-top">
                                </div>
                            </nav>    
                        </div>              
                    </div>
                <?php }elseif($_GET['opcao'] == 'Bob Esponja'){ ?>
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-light bg-dark">
                                <div class="container-fluid">
                                    <img src="imgs/bobesponja/logo_bobesponja.png" alt="" width="170" height="84" class="d-inline-block align-text-top">
                                </div>
                            </nav>    
                        </div>              
                    </div>
                <?php }else{ ?>
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-light bg-dark">
                                <div class="container-fluid">
                                    <img src="imgs/tomejerry/logo-tom-ejerry.png" alt="" width="120" height="100" class="d-inline-block align-text-top">
                                </div>
                            </nav>    
                        </div>              
                    </div>
                <?php } ?>
            <?php }else{ ?>
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-light bg-dark">
                            <div class="container-fluid2">
                            Desenhos animados
                            </div>
                        </nav>    
                    </div>              
                </div> 

            <?php } ?>  

            <!-- MENU DE TODAS AS PAGINAS-->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid" style="background-color: steelblue;">
                            <p class="p-nav">Menu</p>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" style="color: white;" aria-label="Toggle navigation" >
                                <span class="navbar-toggler-icon"></span>
                            </button>      
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
                                    </li>                  
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                        Desenhos Animados
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="index.php?opcao=Pica-Pau">Pica-pau</a></li>
                                            <li><a class="dropdown-item" href="index.php?opcao=Bob Esponja">Bob Esponja</a></li>
                                            <li><a class="dropdown-item" href="index.php?opcao=Tom e Jerry">Tom e Jerry</a></li>                                          
                                        </ul>
                                    </li>
                                </ul>
                            </div>      
                        </div>
                    </nav>
                </div>            
            </div>

            <div class="row">
                <div class="col">
                    &nbsp;  
                </div>            
            </div> 
            
            <?php if(isset($_GET['opcao'])){ ?>
                <?php if($_GET['opcao'] == 'Pica-Pau') { ?>
                    <div class="row">
                        <div class="col">
                            <img src="imgs/picapau/index_slide_picapau.jpg" class="d-block w-100" />
                                <br>
                            <h3>A história do Pica-Pau</h3>
                            <h5 style="text-align: justify;">
                                Pica-Pau: A história desse icônico personagem e suas curiosidades
                            </h5>
                            <br>
                            <div style="text-align:justify;">
                                <p>Quem viveu sua infância durante a década de 1990 (ou antes disso), deve se lembrar do Pica-Pau, um personagem de desenho animado. Que marcou época. O pássaro azul e vermelho ainda é lembrado pela esperteza que pregava, principalmente no seu vizinho, Leôncio. Fala a verdade, quem não se lembra do seu fiel companheiro Pé de Pano? Tocando uma música ou dando uma piscadinha, o cavalo encerrava a maior parte dos episódios.</p>

                                <p>Em 2020, o Pica-Pau completou 80 anos de história. O desenhista, animador e dublador norte-americano Walter Lantz criou o personagem em 1940. Inicialmente, os traços do desenho eram diferentes dos atuais, e foi nomeado de “Pica-Pau Maluco”.</p>

                                <p>O desenho já foi transmitido pela Globo, SBT e Record. Apesar disso, chegou ao Brasil em 1950, sendo transmitido pela TV Tupi. Além dos desenhos, alguns curtas surgiram até o ano de 1972.</p>
                            </div>
                        </div> 

                        <div class="col">
                            <h3 style="text-align: center;">Conteúdo Programático</h3>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" >
                                    <h2 class="accordion-header" id="headingOne" >
                                        <button class="accordion-button" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Continuação do texto ao lado
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                <strong>
                                                Ademais, em 1999, o desenho ganhou outras histórias inéditas, produzidas pela Universal Pictures Animation. Essa nova leva durou até 2003. Mesmo com a atualização do desenho, certamente a risada continua garantindo a diversão.                     
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Mas, antes disso, outras mudanças de design doo personagem aconteceram. Sobretudo, ele passou da imagem de maluco dos anos 1940, para um visual mais leve, em 1951. Além disso, a transformação não foi apenas na aparência, já que em 1961; sua personalidade passou a ser mais séria e mais tranquila, se comparada à versão inicial. Por fim, Walter Lantz conduziu o personagem até 1972, quando fechou o seu estúdio.
                                                </strong>
                                            </p>
                                            <br>
                                            <div>
                                                <img src="imgs/picapau/picapau_versoes.webp" class="d-block w-100"/>
                                                <p style="text-align: center;">1ª versão do personagem e depois com traços mais leves</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Quem foi o criador do Pica-Pau?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div style="text-align: center;">
                                                <img src="imgs/picapau/criador_picapau.webp" class="d-block w-100"/>
                                            </div>
                                            <br>
                                            <p>
                                                <strong>
                                                Walter Lantz nasceu em 1899, em New Rochelle, em Nova York. Ademais, aos 15 anos, mudou-se para Manhattan. Então, começou a trabalhar como mensageiro e entregador para um doa maiores jornais da época. Dessa forma, enquanto trabalhava para o jornal, Lantz aperfeiçoava sua técnica de desenho. Em suma, após dois anos conseguiu se tornar animador em uma divisão criada para desenvolver animações com os personagens das tirinhas dos jornais.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Por fim, em 1922, Lantz vai trabalhar na Bray Productions. Estúdio que já dominava o mercado de animação dos EUA. Então, o primeiro personagem que Lantz cria é Dinky Doodle, um garotinho que andava sempre acompanhado do seu cachorro. Começando, então, uma série de desenhos animados com ele. E assim, Lantz seguiu criando inúmeros personagens de animação. E com o sucesso, Lantz foi chamado para criar uma abertura para um live-action chamado King of Jazz. Que marcou como a primeira animação feita em Technicolor.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Mas, foi em 1935 que Lantz criou seu próprio estúdio, levando seu personagem coelho Oswaldo, que fez muito sucesso com ele. Além da parceria com os estúdios da Universal. Em suma, Lantz criava os desenhos, a empresa de Carl Laemmle distribuía para os cinemas.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Já em 1940, Lantz cria o personagem Andy Panda e, foi através dessa animação que surgiu o personagem Pica-Pau. Cuja ideia veio enquanto Lantz estava em lua de mel com sua segunda esposa, a atriz Grace Stafford. Graças a um pica-pau que passou a noite bicando a madeira do telhado e fazendo muito barulho. Enfim, o personagem foi tão marcante. Que acabou ofuscando o próprio Andy Panda. O que proporcionou na criação de uma série exclusiva para o personagem carismático.
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Curiosidades sobre o Pica-Pau
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                <strong>
                                                Foi durante a lua de mel de Walter Lantz que o personagem principal da animação foi criada. A inspiração surgiu após um pássaro -um pica-pau -, surgir em sua noite de núpcias. O criador do personagem nasceu em 1889 e sua primeira profissão foi mecânico. Mesmo com interesse em animação já aos 12 anos, foi só em 1928 que ingressou no universo dos desenhos animados, ao conduzir “Oswald, o Coelho Sortudo“.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                O Pica-Pau tem tanto reconhecimento que, acima de tudo, possui uma estrela na calçada da fama em Hollywood, na Califórnia. E sobre a risada? Ela surgiu antes mesmo do personagem, criada pelo dublador Mel Blanc (que, anteriormente, dublava o Pernalonga). Ademais, Pica-Pau também teve uma dubladora, Grace Stafford, esposa de Walter Lantz.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Por fim, o desenho animado Pica-Pau já foi indicado duas vezes ao Oscar. Como “Melhor Curta Metragem” e “Melhor Canção Original”.  Em 2018 foi lançado Pica-Pau O Filme e o Brasil foi o primeiro país a prestigiar a estreia nas telas do cinema. Contudo, não há confirmação da espécie do Pica-Pau apesar de ter o nome de uma ave. 
                                                </strong>
                                            </p>         
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;"  type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Metáforas do desenho de Pica-Pau
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div style="text-align: center;">
                                                <img src="imgs/picapau/picapau_tapeado.gif" class="d-block w-100"/>
                                            </div>
                                            <br>
                                            <p>
                                                <strong>
                                                O personagem do Pica-Pau não atrai apenas as crianças, sendo, também, objeto de atenção dos adultos. Contudo, também ilustra pesquisas científicas e é base para teses e estudos. O imaginário infantil é capaz de reproduzir diversas situações e o apego a um desenho pode contribuir com esse processo. No entanto, apesar de cenas que podem ser interpretadas como agressão, o Pica-Pau tem o apelo do herói que luta pelo bem.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                A tese de doutorado da psicóloga Elza Dias Pacheco “O Pica-Pau: Herói ou Vilão? Representação Social da Criança e Reprodução da Ideologia Dominante” traz essa reflexão. Inicialmente a pesquisadora tinha a ideia de que a representação de desenhos com certo grau de violência poderia influenciar negativamente as crianças e, diante disso, imaginou outro cenário. Portanto, os resultados trouxeram dados diferentes.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Dentre os desenhos mais mencionados pelas crianças entrevistadas, o Pica-Pau estava à frente do Pernalonga e demais figuras ocidentais. Assim, uma das primeiras constatações da pesquisa foi que desenhos mais tecnológicos eram interesses, mas passageiros. Por isso, Pica-Pau chamava a atenção pelas cores, tamanho e pela destreza de defender o que lhe pertence.
                                                </strong>
                                            </p> 
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;"  type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Personagens mais lembrados de Pica-Pau
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div style="text-align: center;" >
                                                <h3>Bruxa</h3>
                                                    <img src="imgs/picapau/acrdon_bruxa.webp" class="d-block w-100" style="border-radius: 10px;"/>
                                                <br>
                                                <h3>Corvo Jubileu</h3>
                                                    <img src="imgs/picapau/acrdon_corvo.webp" class="d-block w-100" style="border-radius: 10px;"/>
                                                <br>
                                                <h3>Puxa-Frango</h3>
                                                    <img src="imgs/picapau/acrdon_pxFrango.webp" class="d-block w-100" style="border-radius: 10px;"/>
                                                <br>
                                                <h3>Leôncio</h3>
                                                    <img src="imgs/picapau/acrdon_leoncio.webp" class="d-block w-100" style="border-radius: 10px;"/>
                                                <br>
                                                <h3>Pé de Pano</h3>
                                                    <img src="imgs/picapau/acrdon_pedePano.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            </div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                                    
                                &nbsp;
                                
                            </div>

                            <h3>Ir para Home:</h3>
                            <a href="index.php">Home</a>
                        </div>
          
                    </div>

                <?php }elseif($_GET['opcao'] == 'Bob Esponja'){ ?>
                    <div class="row">
                        <div class="col">
                            <img src="imgs/bobesponja/index_slide_bobesponja.jpg" class="d-block w-100" />
                                <br>
                            <h3>A história do Bob Esponja</h3>
                            <h5 style="text-align: justify;">
                                Bob Esponja: as lições do coaching motivacional de calça quadrada
                            </h5>
                            <br>
                            <div style="text-align:justify;">
                                <p>Bob Esponja Calça Quadrada. O que talvez você não saiba, é que o desenho animado já está completando 22 anos. A animação foi lançada em 1º de maio de 1999 e, com muita alegria e personagens marcantes, conquistou uma geração de telespectadores, que cresceram e, mesmo adultos, continuam fãs. Todos esses 22 anos de história nas telinhas faz com que o personagem amarelo tenha muita coisa pra ensinar. Pensando nisso, separamos três dessas lições que vão ajudar você a levar a vida de forma mais leve.</p>

                                <p>Bob Esponja foi criado pelo biólogo marinho e animador Stephen Hillenburg. Os primeiros rascunhos do desenho ele começou a fazer em 1984, quando dava aulas de biologia marinha no Instituto Ocean, na Califórnia. Mas os traços mais conhecidos do personagem principal, com a famosa calça quadrada, só surgiram anos depois.</p>           
                            </div>
                        </div>

                        <div class="col">
                            <h3 style="text-align: center;">Conteúdo Programático</h3>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" >
                                    <h2 class="accordion-header" id="headingOne" >
                                        <button class="accordion-button" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Continuação do texto ao lado
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                <strong>
                                                Os desenhos, que levam em média 15 minutos de duração, somam quase 250 episódios que já foram traduzidos para mais de 60 idiomas. Os personagens começaram a ganhar fama e se deslocaram para os cinemas.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Em 2004 houve a estreia do primeiro filme. Stephen escreveu, produziu e dirigiu o longa. Onze anos depois foi lançado Bob Esponja: Um herói fora d'água, em fevereiro de 2015. Desta vez, o criador atuou como roteirista e produtor executivo.                   
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Em 2018, uma triste notícia aos fãs: Stephen Hillenburg morreu meses depois de ter sido diagnosticado com esclerose lateral amiotrófica (ELA). 
                                                Mesmo assim, a Nickelodeon não deixou a alegria do personagem acabar. A empresa continuou produzindo e lançou, em novembro de 2020, o filme Bob Esponja: O Incrível Resgate, como um tributo ao criador do personagem. O filme, que tinha lançamento planejado para os cinemas, foi cancelado por conta da pandemia do novo coronavírus, mas está disponível no catálogo da Netflix.
                                                </strong>
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Três lições de vida, por Bob Esponja:
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div style="text-align: center;">
                                                <img src="imgs/bobesponja/acrdn_bobesponja.webp" class="d-block w-100"/>
                                            </div>
                                            <p>
                                                <strong>
                                                <h5>1 - Ver o lado bom das coisas</h5>
                                                Se tem uma coisa que o Bob Esponja é, é positivo. Não importa se ele está acordando cedo numa segunda-feira ou se tem que fazer hora extra na sexta-feira. Ele sempre encara com positividade qualquer situação e não tira o sorriso do rosto. E aí entra mais um atributo...
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                <h5>2 - Ser esforçado</h5>
                                                O Bob Esponja é extremamente dedicado ao trabalho no Siri Cascudo. Ele é o funcionário do mês que todo chefe quer. Tudo bem que não tem muito com quem ele competir, né? Afinal, o Lula Molusco é carregado de preguiça e desânimo. Mas o Bob, como um bom colega de trabalho, não se afeta com isso e sempre tenta incentivar o atendente de caixa. Sim! Mais uma qualidade do personagem...
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Mas, foi em 1935 que Lantz criou seu próprio estúdio, levando seu personagem coelho Oswaldo, que fez muito sucesso com ele. Além da parceria com os estúdios da Universal. Em suma, Lantz criava os desenhos, a empresa de Carl Laemmle distribuía para os cinemas.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                <h5>3 - Ser amigável</h5>
                                                O melhor amigo dele, o Patrick Estrela, é um verdadeiro sortudo em ter um colega como Bob Esponja. Nos momentos de diversão e brincadeira, o Bob sempre leva alegria. E nas enrascadas, adivinha quem também está lá? O felizão amarelinho da calça quadrada. E ele dá tanto valor à amizade que é capaz de rodar toda a Fenda do Biquíni para encontrar o Gary, seu bichinho de estimação (e melhor companhia).
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                E é essa a aventura do mais novo filme da turma. Em Bob Esponja: O Incrível Resgate, Gary foi roubado pelo temível Rei Poseidon como parte de mais um dos planos malignos de Plankton e levado para a cidade perdida de Atlantic City. Com a ajuda do Patrick, ele sai em uma missão de resgate e nesta jornada os dois conhecem novos personagens e vivem aventuras inimagináveis.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                No meio disso tudo, acontece, o que para mim, é a melhor parte do filme. Todos os personagens já conhecidos no desenho animado contam como conheceram o Bob Esponja. São histórias lindas que emocionam quem já é fã do Calça Quadrada e promete encantar quem ainda é resistente ao desenho.
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Conheças os personagens de Bob Esponja
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h3>Bob Esponja</h3>
                                                <img src="imgs/bobesponja/acrdnp_bobesponja.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            <br>
                                            <p>É o mais atrapalhado e engraçado personagem, que mora dentro de um abacaxi, na Fenda do Bikini, com um caracol chamado Gary. Trabalha como cozinheiro no restaurante de hamburguer Siri Cascudo, e lá apronta muitas confusões. Ele adora caçar água-viva, jogar jogos de tabuleiro, fazer bolhas e se divertir com seus amigos Sandy, Lula Molusco e Patrick.</p>
                                            <br>

                                            <h3>Patrick Estrela</h3>
                                                <img src="imgs/bobesponja/acrdn_patrick.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            <br>
                                            <p>É o melhor amigo do Bob Esponja, uma estrela-do-mar rosa. Juntos, eles estão sempre envolvidos em encrencas. Ele vive debaixo de uma pedra e às vezes parece ser um pouco? Lento?</p>
                                            <br>

                                            <h3>Lula Molusco</h3>
                                                <img src="imgs/bobesponja/acrdn_lulamolusco.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            <br>
                                            <p>Colega de trabalho do Bob Esponja no Siri Cascudo, é o personagem mais mal-humorado e que adora artes.</p>
                                            <br>

                                            <h3>Sandy Bochechas</h3>
                                                <img src="imgs/bobesponja/acrdn_sandy.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            <br>
                                            <p>Outra melhor amiga do Bob Esponja, Sandy é um esquilo que vive dentro de uma cúpula de vidro fantasiada de astronauta. Ela é muita inteligente e faz muitas invenções.</p>
                                            <br>

                                            <h3>Gary</h3>
                                                <img src="imgs/bobesponja/acrdn_gary.jpg" class="d-block w-100" style="border-radius: 10px;"/>
                                            <br>
                                            <p>É um caracol que vive com o Bob Esponja, sendo seu animal de estimação. Ele diz palavras que só o Bob Esponja consegue entender.</p>
                                            <br>

                                            <h3>Sr. Sirigueijo</h3>
                                                <img src="imgs/bobesponja/acrdn_srsirigueijo.jpg" class="d-block w-100" style="border-radius: 10px;"/> 
                                            <br>
                                            <p>O dono do restaurante em que trabalha Bob Esponja. Conhecido por ser muito pão-duro.</p>
                                            <br> 

                                            <h3>Plankton</h3>
                                                <img src="imgs/bobesponja/acrdn_plankton.png" class="d-block w-100" style="border-radius: 10px;"/> 
                                            <br>
                                            <p>Inimigo do Sr. Sirigueijo, ele também tem um restaurante e tenta sempre roubar a fórmula do famoso hamburguer do Siri Cascudo.</p>
                                            <br>                    
                                        </div>
                                    </div>
                                </div>
                    
                                &nbsp;
                                
                            </div>
                            <h3>Ir para Home:</h3>
                            <a href="index.php">Home</a>
                        </div>

                    </div>
                
                <?php }else{ ?>
                    <div class="row">
                        <div class="col">
                            <img src="imgs/tomejerry/index_slide_tom_ejerry.jpg" class="d-block w-100" />
                                <br>
                            <h3>A história do Tom e Jerry</h3>
                            <h5 style="text-align: justify;">
                                Tom e Jerry: as suas aventuras
                            </h5>
                            <br>
                            <div style="text-align:justify;">
                                <p>Quem olha para Tom e Jerry dificilmente se aperceberá, mas esta dupla de gato e rato já tem mais de 80 anos de idade. Foi em fevereiro de 1940 que estreou a curta de animação que apresentou estas personagens ao mundo, ainda que, na altura, com outros nomes (Jasper e Jinx). Na curta seguinte, contudo, os criadores William Hanna e Joseph Barbera adotariam os nomes que acompanhariam várias gerações – Tom e Jerry.  </p>

                                <p>O nascimento de Tom e Jerry ocorreu na sombra da grande estrela da animação da época: o Rato Mickey, sendo que essa rivalidade corporizava a competição entre os estúdios MGM e Walt Disney. O sucesso inicial de Tom e Jerry fez com que a MGM apostasse na dupla durante os anos seguintes. No total, os criadores originais produziram 114 curtas, até 1958, altura em que abandonaram o projeto, para vir a produzir outros sucessos como Os Flintstones, The Jetsons ou Scooby-Doo. </p>

                                <p>Três anos depois, em 1961, a MGM decidiu voltar a apostar na dupla Tom e Jerry. Desta vez, seria um estúdio checoslovaco, com a direção de Gene Deitch, a produzir 13 episódios que trouxeram grandes mudanças à relação entre felino e roedor. Alguns anos depois, a aparência da dupla seria alterada, aproximando-se mais do aspeto atual, até que, em 1967, se realizou a transição do cinema para a televisão. </p>
                            </div>
                        </div>

                        <div class="col">
                            <h3 style="text-align: center;">Conteúdo Programático</h3>
                            <br>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" >
                                    <h2 class="accordion-header" id="headingOne" >
                                        <button class="accordion-button" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Rivais e amigos
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <img src="imgs/tomejerry/acrdn_tom_ejerry.jpg" class="d-block w-100" />
                                            <br>
                                            <p>
                                                <strong>
                                                Até à década de 70, a violência era uma das marcas de Tom e Jerry. Habitualmente, Tom encontrava os finais mais dolorosos, sendo esmagado, fatiado ou pulverizado das mais variadas formas. A partir de 1975, contudo, a dupla de criadores original volta a trabalhar as personagens, dando-lhe um tom menos violento e introduzindo até uma nova componente – a amizade entre gato e rato.                    
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Essa marca ficaria para sempre presente, nas edições que se seguiram, como em 1989 (numa série para crianças) ou em 1992 (na sua primeira longa-metragem). Como escreve Andrew Pulig, no portal Hypebeast, Tom e Jerry têm uma “relação quase de irmãos que se perseguem e atormentam”. Uma proximidade que fica clara, acrescentam, nas alturas em que outras personagens levam a que Tom e Jerry “se ajudem e quase se protejam mutuamente”.  
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    A mais recente adição à coleção Tom e Jerry chega em abril, depois de vários adiamentos. Numa versão que mistura live-action e animação (ao estilo de Quem Tramou Roger Rabbit), a luta entre gato e rato toma lugar num hotel de Nova Iorque, durante um casamento. Entre a rivalidade de gato e rato, escreve Andrew Pulig, fica a certeza: “estes dois animais partilham o entendimento de que estão, para todos os efeitos, destinados a estar juntos”. 
                                                </strong>
                                                </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Fatos e curiosidades sobre Tom & Jerry!
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div style="text-align: center;">
                                                <img src="imgs/tomejerry/hanna_ebarbera.jpeg" class="d-block w-100"/>
                                            </div>
                                            <br>
                                            <p>
                                                <strong>
                                                A primeira animação de Tom & Jerry foi produzida em 1940.

                                                Trata-se de um curta-metragem lançado no cinema e intitulado Puss Gets The Boot.
                                                
                                                A animação foi o primeiro trabalho da aclamada dupla William Hanna e Joseph Barbera como diretores e foi indicada ao Oscar de melhor curta-metragem de animação.
                                                
                                                No entanto, os protagonistas ainda não se chamavam Tom & Jerry.
                                                
                                                Na verdade, Puss Gets The Boot nem mesmo apresentou o nome dos personagens, mas os criadores chamavam a dupla de Jasper & Jinx!
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" style="background-color: steelblue; color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Trilha Sonora
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <iframe src="https://www.youtube.com/embed/a96iFs0U0hk" class="d-block w-100" height="250px" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                                            <br>
                                            <p>
                                                <strong>
                                                A música é um dos elementos mais importantes nos episódios de Tom & Jerry.Graças à trilha sonora, as ações tornam-se muito mais dramáticas, garantindo ainda mais emoção às cenas.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                O diretor musical, Scott Bradley, criou uma série de trilhas complexas que combinava elementos de jazz com músicas clássicas e até mesmo pop, mas eram as tradicionais músicas clássicas que ditavam o ritmo.
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                Isso acontecia, pois a MGM não tinha uma verba muito grande para investir na composição ou aquisição de novas trilhas sonoras exclusivas para o desenho, assim, os produtores de Tom & Jerry tinham de se virar com as trilhas que o estúdio já havia adquirido para produções anteriores. Essas eram, em sua maioria, músicas clássicas!
                                                </strong>
                                            </p>         
                                        </div>
                                    </div>
                                </div>
                        
                                &nbsp;
                                
                            </div>
                            <h3>Ir para Home:</h3>
                            <a href="index.php">Home</a>
                        </div>

                    </div>

                <?php } ?>

            <?php }else{ ?>
                <div class="row">
                    <div class="col">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>    
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="index.php?opcao=Pica-Pau">
                                        <img src="imgs/picapau/index_slide_picapau.jpg" class="d-block w-100" alt="...">
                                    </a>   
                                </div>
                                <div class="carousel-item">
                                    <a href="index.php?opcao=Bob Esponja">
                                        <img src="imgs/bobesponja/index_slide_bobesponja.jpg" class="d-block w-100" alt="...">  
                                    </a>   
                                </div>
                                <div class="carousel-item">
                                    <a href="index.php?opcao=Tom e Jerry">
                                        <img src="imgs/tomejerry/index_slide_tom_ejerry.jpg" class="d-block w-100" alt="...">
                                    </a>     
                                </div>
                            </div>    
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>    
                        </div>
                    </div>            
                </div>      

                <div class="row">
                    <div class="col">
                    &nbsp;  
                    </div>            
                </div>      

                <div class="row" style="align-items: center;">
                    <div class="col">
                        <figure class="figure">
                            <a href="index.php?opcao=Pica-Pau">
                                <img src="imgs/picapau/index_picapau.gif" class="figure-img img-fluid rounded"  alt="...">
                            </a>
                            <figcaption class="figure-caption">GIF do Pica-Pau com o corvo Jubileu.</figcaption>
                        </figure>
                    </div>   
                    
                    <div class="col" style="text-align: center;">
                        <figure class="figure">
                            <a href="index.php?opcao=Bob Esponja">
                                <img src="imgs/bobesponja/index_bobesponja.gif" class="figure-img img-fluid rounded"  alt="...">
                            </a>
                            <figcaption class="figure-caption">GIF do Bob Esponja.</figcaption>
                        </figure>
                    </div>   

                    <div class="col" style="text-align:right">
                        <figure class="figure">
                            <a href="index.php?opcao=Tom e Jerry">
                                <img src="imgs/tomejerry/index_tom_ejerry.gif" class="figure-img img-fluid rounded" alt="...">
                            </a>
                            <figcaption class="figure-caption">GIF do Tom & Jerry.</figcaption>
                        </figure>
                    </div>   
                </div> 
            
            <?php } ?>

            <!-- FOOTER DE TODAS AS PAGINAS-->
            <div class="row">
                <div class="col">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">         
                    <div class="col-md-4 d-flex align-items-center">
                    <span> Copyright 2022 - Todos os direitos reservados</span>
                    </div>       
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="color: white;">
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                    </ul>
                </footer>
                </div>            
            </div>               
        </div>
    </body>
</html>