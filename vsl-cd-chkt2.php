<?php

    /* Variaveis Globais ------------------------------------- */
    include "includes/config/var-globais.php";

    /* Título da Página -------------------------------------- */
    $title_page = ''; 

    /* Configuração Navbar ----------------------------------- */
    $nav_Logo = true; 
    $nav_ComprarAgora = true; 
    $nav_Aviso = true;
    $nav_AvisoPersonalizado= '';
    $nav_StepsCheckout = false;

    /* Variações necessárias na página -------------------- */
    $nav_Home['url'] = '#hero';
    $tag_Video ='396179535';
    $delay = true;
    $delay_time = 600;
    $ticket = "197,00";
    $urlTicto = "https://pay.ticto.com.br/c/A4A8FEDE?pid=MTYwODI1NzUzOTQ5Nzk5";

    /* Visibilidade dos Elementos na Navbar ------------------- */
    //Quando adicionar um item novo no menu, é necessário incluir no var-globais.php
    $nav_Home['visivel'] = true;
    $nav_Depoimentos['visivel'] = false;
    $nav_Beneficios['visivel'] = true;
    $nav_ParaQuem['visivel'] = true;
    $nav_ComoTomar['visivel'] = true;
    $nav_Sobre['visivel'] = true;
    $nav_Garantia['visivel'] = true;
    $nav_Oferta['visivel'] = true;
    $nav_Duvidas['visivel'] = true;
    $nav_Contato['visivel'] = true;


    /* Ordenação dos elementos na Navbar ---------------------- */
    // Atentar a ordem dos números, não repetir e nem pular algum
    // Os primeiros items aparecem na navbar (5 itens), o footer exibe todos.
    $nav = array(
        1 => $nav_Home,
        2 => $nav_Beneficios,
        3 => $nav_ParaQuem,
        4 => $nav_ComoTomar,
        5 => $nav_Sobre,
        6 => $nav_Garantia,
        7 => $nav_Oferta,
        8 => $nav_Duvidas,
        9 => $nav_Contato
    );
        
    /* Includes Necessários ---------------------------------- */
    include "{$inc}header.php";
    include "{$inc}navbar.php";


    /* -------------------------*/
    /*    Conteudo da Página    */
    /* -------------------------*/
    include "{$row}hero_video.php";
    ?>
    <div class="delay">
    <?php
        include "{$row}beneficios.php";
        include "{$row}paraquem.php";
        include "{$row}comotomar.php";
        include "{$row}sobre.php";
        include "{$row}produtos.php";
        include "{$row}garantia.php";
        include "{$row}faq.php"; 
        include "{$row}contato.php";
        include "{$row}pagamento.php";
    ?>
    </div>
    <?php

    /* Includes Necessários ---------------------------------- */                      
    include "{$inc}footer.php"

?>
