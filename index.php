<?php

//Meu código PHP vem aqui.

$pg = isset($_GET['pg']);

if ($pg) {

//verdadeiro
    switch ($_GET['pg']) {

        case 'inicio':
            include_once 'pagina/includes/header.php';
            include_once 'pagina/inicio.php';
            include_once 'pagina/includes/footer.php';
            break;

        case 'sobre':
            include_once 'pagina/includes/header.php';
            include_once 'pagina/sobre.php';
            include_once 'pagina/includes/footer.php';
            break;

        case 'servicos':
            include_once 'pagina/includes/header.php';
            include_once 'pagina/servicos.php';
            include_once 'pagina/includes/footer.php';
            break;

        case 'produtos':
            include_once 'pagina/includes/header.php';
            include_once 'pagina/produtos.php';
            include_once 'pagina/includes/footer.php';
            break;

        case 'contato':
            include_once 'pagina/includes/header.php';
            include_once 'pagina/contato.php';
            include_once 'pagina/includes/footer.php';
            break;

        default:
//            página de erro
            echo 'Página não encontrada';
            break;
    }
} else {
    include_once 'pagina/includes/header.php';
    include_once 'pagina/inicio.php';
    include_once 'pagina/includes/footer.php';
}