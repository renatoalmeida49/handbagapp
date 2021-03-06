<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleLogin.css" />
        <title>BagApp</title>
    </head>

    <body class="text-center">

    <header class="fixed-top">
        <div class="row">
            <div class="col-auto">
                <strong>Bem vindo, <?= $name; ?></strong>
            </div>
        </div>
    </header>

    <div class="row">

        <?php if($name == 'admin'): ?>
            <a href="<?=$base;?>/handbags/insert" class="btn-danger">Adicionar bolsas</a>
        <?php endif;?>

        <a href="<?=$base;?>/logoff" class="btn-danger">Sair</a>

    </div>

    <?= $render('footer'); ?>