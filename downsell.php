<?php

    /* Variaveis Globais ------------------------------------- */
    include "includes/config/var-globais.php";

    /* Título da Página -------------------------------------- */
    $title_page = 'Pague 2, Leve 3!'; 

    /* Configuração Navbar ----------------------------------- */
    $nav_Logo = true; 
    $nav_ComprarAgora = false; 
    $nav_Aviso = false;
    $nav_AvisoPersonalizado = '';
    $nav_StepsCheckout = true;

    /* Visibilidade dos Elementos na Navbar ------------------- */
    //Quando adicionar um item novo no menu, é necessário incluir no var-globais.php
    $nav_Home['visivel'] = false;
    $nav_Depoimentos['visivel'] = false;
    $nav_Beneficios['visivel'] = false;
    $nav_ParaQuem['visivel'] = false;
    $nav_ComoTomar['visivel'] = false;
    $nav_Sobre['visivel'] = false;
    $nav_Garantia['visivel'] = false;
    $nav_Oferta['visivel'] = false;
    $nav_Duvidas['visivel'] = false;
    $nav_Contato['visivel'] = false;


    /* Ordenação dos elementos na Navbar ---------------------- */
    // Atentar a ordem dos números, não repetir e nem pular algum
    // Os primeiros items aparecem na navbar (5 itens), o footer exibe todos.
    $nav = array(
        1 => $nav_Home,
        2 => $nav_Depoimentos,
        3 => $nav_Beneficios,
        4 => $nav_ParaQuem,
        5 => $nav_ComoTomar,
        6 => $nav_Sobre,
        7 => $nav_Garantia,
        8 => $nav_Oferta,
        9 => $nav_Duvidas,
        10 => $nav_Contato
    );
        
    /* Includes Necessários ---------------------------------- */
    include "{$inc}header.php";
    include "{$inc}navbar.php";


    /* -------------------------*/
    /*    Conteudo da Página    */
    /* -------------------------*/
    include "{$row}downsell.php";
 
    
    /* Includes Necessários ---------------------------------- */                      
    include "{$inc}footer.php"

?>
