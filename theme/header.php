<?php

include "components/define-domain.php";
include "components/svg-sprite.php";

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Starter kit for people">
    <title>Collers</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= domain ?>assets/css/<?= $call_css ?>.css?v=<?= rand() ?>">
</head>

<body>

    <header class="header_lg">
        <div class="container">
            <a href="index.php" class="header_logo" title="Collers Sportswear">Collers</a>
            <nav role="navigation" aria-label="Main menu">
                <ul>
                    <li>
                        <a href="" title="Products">Products</a>
                    </li>
                    <li>
                        <a href="" title="Solutions">Solutions</a>
                    </li>
                    <li>
                        <a href="" title="Pricing">Pricing</a>
                    </li>
                    <li>
                        <a href="" title="Resources">Resources</a>
                    </li>
                    <li>
                        <a href="" title="Log In">Log In</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <header class="header_sm p-rel">
        <div class="container d-flex j-b a-c">
            <a href="index.php" title="Collers Sportswear" class="header_logo">Collers</a>
            <div class="menuButton d-flex f-c a-e">
                <svg width="24" height="24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg"
                    color="#000">
                    <path d="M3 5h8m-8 7h13M3 19h18" stroke="#000" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <nav role="navigation" class="sm_nav" aria-label="Main menu">
            <ul class="d-flex f-c a-s">
                <li>
                    <a href="" title="Products">Products</a>
                </li>
                <li>
                    <a href="" title="Solutions">Solutions</a>
                </li>
                <li>
                    <a href="" title="Pricing">Pricing</a>
                </li>
                <li>
                    <a href="" title="Resources">Resources</a>
                </li>
                <li>
                    <a href="" title="Log In">Log In</a>
                </li>
            </ul>
            <a href="" title="Sign up now" class="btn-primary">Sign up now</a>
        </nav>
    </header>