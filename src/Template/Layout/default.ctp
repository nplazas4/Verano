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
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; font-src 'self' data: fonts.gstatic.com;">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->script(['jquery-3.3.1.min.js']) ?>
    <?= $this->Html->css('materialize.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="header">
        <div class="header-wrapper">
            <?php echo $this->Html->link(
              $this->Html->image('logos/Logo_verano.png'),
              ['controller'=>'Pages', 'action'=>'home'],
              ['escape' => false,'class'=>'header-logo']
            );?>
            <nav data-topbar role="navigation">
            </nav>
            <div class="header-user dropdown-trigger">
                <h3 class="primary-text bold-title">Verano Cloud</h3>
            </div>
         </div>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <figure><?= $this->Html->image('logos/Logo_verano.png') ?></figure>
              <ul class="footer-info">
                <li>Verano Ingeniería LTDA,</li>
                <li>Av Cra 7 #156-80. Oficina 1103.</li>
                <li>Telefono: +57 (1) 702 1518</li>
                <li>E-mail: info@verano.com.br </li>
                <li><a href="https://verano.com.co">https://verano.com.co</a></li>
              </ul>
            <ul style="text-align: center;" class="ml-auto mr-auto">
                <li class="disclaimer-font-size">El contenido de este sitio es para uso exclusivo de consultores y/o coloboradores de VERANO INGENIERÍA LTDA. El uso inapropiado</li>
                <li class="disclaimer-font-size">de estas herramientas por parte de terceros para ambientes PRODUCTIVOS NO esta permitido, el uso de este sitio es exclusivo </li>
                <li class="disclaimer-font-size">para casos de uso, auto aprendizaje, demostraciones y pruebas de concepto.</li>
            </ul>
        </div>
    </footer>
</body>
</html>
