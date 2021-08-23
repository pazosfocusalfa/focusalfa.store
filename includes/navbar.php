
    
 <?php

    //Verificação se tem algum menu
    $temMenu = false;

    for ($verificaMenu = 1; $verificaMenu <= count($nav); $verificaMenu++){     
        if ($nav[$verificaMenu]['visivel'] == true) {
            $temMenu = true;
        } 
    }

        if($nav_StepsCheckout == false) { 

            if ($nav_Aviso  == true){
                ?>
                <!-- Data -->
                <div id="date" <?php if ($delay == true ) echo("class='delay'") ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <?php if ($nav_AvisoPersonalizado == '') /* Mensagem Default */ { ?>
                                   
                                    <b>ATENÇÃO: </b>Devido a alta demanda, há uma quantidade limitada de suplementos em estoque
                                    no dia de hoje: <b><span id="date-label"></span></b>
                               
                                    <?php } else { 
                                        echo $nav_AvisoPersonalizado;
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data -->
            <?php
            }
        ?>

        <?php 
        
            if($temMenu == true) {
                
                ?> 
                   
    <!-- Navbar Mobile --> 
    <div class="overlay">
        <nav class="overlay-menu">
            <ul>
            <?php 
                for ($i = 1; $i <= 5; $i++){        
                    if ($nav[$i]['visivel'] == true){
                        ?>
                            <li class="item-nav"><a href="<?php print_r($nav[$i]['url']); ?>"><?php print_r($nav[$i]['label']); ?></a></li>
                        <?php
                    }
                }
               
                if ($nav_ComprarAgora == true){ ?>
                    <li class="item-nav"><a href="#product" class="destaque">Comprar</a></li>
                <?php } ?>
                
                <li><img class="close-menu" src="img/close.svg" alt="" /></li>
            </ul>
        </nav>
    </div>
    <!--/Navbar Mobile -->


    <!--  Navbar Desktop -->
    <nav class="navbar navbar-expand-lg" id="navbar-stick.bkp">
        <div class="container">


        <?php
            if ($nav_Logo == true){
                ?>
                 <a class="navbar-brand" href="#">
                    <img src="img/logotipo.png" class="logotipo">
                </a>
            <?php
            }

            if ($delay == true) {
        ?>
                <div class="delay"><img class="navbar-toggler open-menu" src="img/menu.svg" alt="" /></div>
            <?php } else { ?>
                <img class="navbar-toggler open-menu" src="img/menu.svg" alt="" />
            <?php } ?>


        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <?php 
                        if ($delay == true) {
                            for ($i = 1; $i <= 5; $i++){        
                                if ($nav[$i]['visivel'] == true){
                                    ?>
                                        <li class="nav-item delay">
                                            <a class="nav-link" href="<?php print_r($nav[$i]['url']); ?>">
                                                <?php print_r($nav[$i]['label']); ?>
                                            </a>
                                        </li>
                                    <?php
                                };
                            };
                        } else {
                        for ($i = 1; $i <= 5; $i++){        
                            if ($nav[$i]['visivel'] == true){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php print_r($nav[$i]['url']); ?>">
                                            <?php print_r($nav[$i]['label']); ?>
                                        </a>
                                    </li>
                                <?php
                            };
                        };}
                    ?>



            <?php 
            if ($delay == true) {
                if ($nav_ComprarAgora == true){
                    ?>
                    <li class="nav-item delay" href="#product">
                            <a href="#oferta"> <!-- #oferta !-->
                                <div class="#product-btn">
                                    <button type="button" class="btn btn-primary">Comprar Agora</button>
                                </div>
                            </a>
                        </li>
                <?php
                } 
            } else { 
                if ($nav_ComprarAgora == true){
                    ?>
                    <li class="nav-item" href="#product">
                         <a href="https://focusalfa.com/#oferta"> <!-- #oferta !-->
                                <div class="product-btn">
                                    <button type="button" class="btn btn-primary">Comprar Agora</button>
                                </div>
                            </a>
                        </li>
                <?php
                } }
                ?>
                </ul>
            </div>

    </nav>
    <!-- Navbar -->
                
                <?php

            } else {
                ?>

            <div  id="aviso">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                <a class="navbar-brand" href="#">
                    <img src="img/logotipo.png" class="logotipo">
                </a>
                </div>
            </div>
        </div>
        </div>
                <?php

            }
        
        ?>

        <?php } else { ?>

        <!-- Checkout -->
        <section id="aviso">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 logo-aviso">
                            <span class="align-middle">
                                <a class="navbar-brand" href="#">
                                    <img src="img/logotipo.png" class="logotipo">
                                </a>
                            </span>
                        </div>
                        <div class="col-md-8">
                            <ul id="progressbar">
                                <li id="account">Seleção</li>
                                <li id="personal">Pagamento</li>
                                <li class="active" id="payment">Oferta</li>
                                <li id="confirm" style="color: #3f3d52">Concluir</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <!-- / Checkout -->
        <?php } ?>