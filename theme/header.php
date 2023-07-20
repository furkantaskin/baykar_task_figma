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

<body class="overflow-x-hidden position-relative">

    <header
        class="header_lg d-none d-lg-block position-absolute top-0 start-0 w-100 py-6 z-3">
        <div class="cm-container d-lg-flex justify-content-between align-items-center">
            <a href="index.php" class="header_logo" title="Collers Sportswear">Collers</a>
            <nav role="navigation" aria-label="Main menu" class="d-flex align-items-center gap-4">
                <ul class="d-flex gap-4">
                    <li>
                        <a href="" title="Products" class="text-mf-amber fw-medium px-2">Products</a>
                    </li>
                    <li>
                        <a href="" title="Solutions" class="text-mf-amber fw-medium px-2">Solutions</a>
                    </li>
                    <li>
                        <a href="" title="Pricing" class="text-mf-amber fw-medium px-2">Pricing</a>
                    </li>
                    <li>
                        <a href="" title="Resources" class="text-mf-amber fw-medium px-2">Resources</a>
                    </li>
                    <li>
                        <a href="" title="Log In" class="text-mf-amber fw-medium px-2">Log In</a>
                    </li>
                </ul>
                <a href="" title="Sign up now" class="btn btn-primary px-7">Sign up now</a>

            </nav>
        </div>
    </header>

    <header class="header_sm position-relative d-flex d-lg-none justify-content-between align-items-center p-4 z-3">
        <a href="index.php" title="Collers Sportswear" class="header_logo">Collers</a>
        <div class="menuButton d-flex flex-column align-items-end">
            <svg width="24" height="24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000">
                <path d="M3 5h8m-8 7h13M3 19h18" stroke="#000" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <nav role="navigation" class="sm_nav position-absolute top-100 p-4 bg-mf-yellow" aria-label="Main menu">
            <ul class="d-flex flex-column align-items-start">
                <li>
                    <a href="" title="Products" class="d-block py-1 text-mf-dark fw-medium">Products</a>
                </li>
                <li>
                    <a href="" title="Solutions" class="d-block py-1 text-mf-dark fw-medium">Solutions</a>
                </li>
                <li>
                    <a href="" title="Pricing" class="d-block py-1 text-mf-dark fw-medium">Pricing</a>
                </li>
                <li>
                    <a href="" title="Resources" class="d-block py-1 text-mf-dark fw-medium">Resources</a>
                </li>
                <li>
                    <a href="" title="Log In" class="d-block py-1 text-mf-dark fw-medium">Log In</a>
                </li>
            </ul>
            <a href="" title="Sign up now" class="btn btn-primary mt-4 text-mf-dark border-mf-dark">Sign up now</a>
        </nav>
    </header>