<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <?php
    if ($_SERVER['REQUEST_URI']==='/maintenance/') { ?>
        <title>ECFMG News</title>
        <?php
    } elseif (strpos($_SERVER['REQUEST_URI'],'maintenance/')) { ?>
        <title>ECFMG News | <?php the_title(); ?></title>
    <?php } else { ?>
        <title><?php echo $title; ?></title>
    <?php } ?>
    <meta name="insight-app-sec-validation" content="a84ba6b8-58eb-42e2-9d77-3b4344115f8d" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/images/intealth.favicon.png" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="/redesign-style.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,500;0,600;1,300&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ebf7d29d40.js" crossorigin="anonymous"></script>
</head>

<body class="<?php echo $pagebodyclass; ?>">