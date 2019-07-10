<?php
    /**
     * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
     * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
     *
     * Licensed under The MIT License
     * For full copyright and license information, please see the LICENSE.txt
     * Redistributions of files must retain the above copyright notice.
     *
     * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
     * @link          https://cakephp.org CakePHP(tm) Project
     * @since         0.10.0
     * @license       https://opensource.org/licenses/mit-license.php MIT License
     */

    $cakeDescription = 'Verano';

    // Datos de usuario
    $user = [
        'avatar' => 'A',
        'name' => 'Administrador',
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('materialize.css') ?>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
        <div class="header-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons primary-text">menu</i></a>
            <?php echo $this->Html->link(
              $this->Html->image('logos/Logo_verano.png'),
              ['controller'=>'Pages', 'action'=>'home'],
              ['escape' => false,'class'=>'header-logo']
            );?>
            <nav data-topbar role="navigation">
            </nav>
            <div class="header-user dropdown-trigger" data-target='dropdownUser'>
                <div class="header-user-content">
                    <h2><?= $user['name'] ?></h2>
                </div>
                <div class="header-user-avatar"><?= $user['avatar'] ?></div>
            </div>
            <ul id='dropdownUser' class='dropdown-content'>
                <li class="dropdown-user">
                    <div class="header-user-avatar"><?= $user['avatar'] ?></div>
                    <div class="dropdown-user-content">
                        <h2><?= $user['name'] ?></h2>
                    </div>
                </li>
                <li class="divider primary" tabindex="-1"></li>
                <li><a href="/login" class="primary-text"><i class="material-icons">exit_to_app</i>Salir</a></li>
            </ul>
        </div>
    </header>

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view primary ma-0">
                <h2 class="white-text name"><?= $user['name'] ?></h2>
            </div>
        </li>
        <li><a href="/login"><i class="material-icons mr-2">exit_to_app</i>Salir</a></li>
    </ul>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <figure><?= $this->Html->image('logos/Logo_verano.png') ?></figure>
            <!-- <figure></?= $this->Html->image('mmcv.png') ?></figure> -->
            <ul class="footer-info">
                <!-- <li>Of. Principal Cra. 9 # 73-44 Piso 6 </li>
                <li>PBX: (571)3268000 - FAX: (571)3268010</li>
                <li>Bogotá D.C., Colombia</li> -->
            </ul>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('select').formSelect();
            $('.tooltipped').tooltip();
            $('.modal').modal();
            $('.collapsible').collapsible();
            $('.dropdown-trigger').dropdown();
            $('.dropdown-hover').dropdown({
                hover: true,
            });
        });
    </script>
</body>
</html>
