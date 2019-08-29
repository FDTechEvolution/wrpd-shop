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
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WRPD - Shop</title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.css') ?>
        <!-- Font awesome 5 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" type="text/css" rel="stylesheet">

        <!-- plugin: fancybox  -->
        <?= $this->Html->css('/plugins/fancybox/fancybox.min.css') ?>
        <!-- plugin: owl carousel  -->
        <?= $this->Html->css('/plugins/owlcarousel/assets/owl.carousel.min.css') ?>
        <?= $this->Html->css('/plugins/owlcarousel/assets/owl.theme.default.css') ?>

        <!-- custom style -->
        <?= $this->Html->css('ui.css') ?>
        <?= $this->Html->css('responsive.css') ?>

        <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.bundle.min.js') ?>
        <?= $this->Html->script('/plugins/fancybox/fancybox.min.js') ?>
        <?= $this->Html->script('/plugins/owlcarousel/owl.carousel.min.js') ?>
        <?= $this->Html->script('script.js') ?>


    </head>
    <body>
        <?= $this->element('layout/header'); ?>
        <section class="section-content bg padding-y-sm">
            <?= $this->Flash->render() ?>

            <div class="container clearfix">
                <?= $this->fetch('content') ?>
            </div>
        </section>    

        <footer>
            <?= $this->element('layout/footer'); ?>
        </footer>
    </body>
</html>
