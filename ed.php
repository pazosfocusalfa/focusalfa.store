<?php

/* Variaveis Globais ------------------------------------- */
include 'includes/config/var-globais.php';

/* Título da Página -------------------------------------- */
$title_page = '';

/* Configuração Navbar ----------------------------------- */
$nav_Logo = true;

$nav_ComprarAgora = true;

$nav_Aviso = true;
$nav_AvisoPersonalizado = '';
$nav_StepsCheckout = false;

/* Variações necessárias na página -------------------- */
$nav_Home['url'] = '#hero';
$tag_Video = '561508188';
$edipoPage = true;

/* Visibilidade dos Elementos na Navbar ------------------- */
//Quando adicionar um item novo no menu, é necessário incluir no var-globais.php
$nav_Home['visivel'] = true;
$nav_Depoimentos['visivel'] = true;
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
// Os primeiros items aparecem na navbar ( 5 itens ), o footer exibe todos.
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

include "{$row}edipo-hero_video.php";
include "{$row}edipo-thiagofinch.php";
include "{$row}edipo-beneficios.php";
include "{$row}edipo-paraquem.php";
include "{$row}edipo-depoimentos.php";
include "{$row}edipo-comotomar.php";
include "{$row}edipo-citacao.php";
include "{$row}edipo-sobre.php";
include "{$row}edipo-produtos.php";
include "{$row}edipo-garantia.php";
include "{$row}faq.php";
include "{$row}edipo-contato.php";
include "{$row}edipo-pagamento.php";

/* Includes Necessários ---------------------------------- */
include "{$inc}footer.php"

?>
