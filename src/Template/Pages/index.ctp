<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;
$year = date('Y', time());

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->meta(
    'keywords',
    ['Figourd', 'fashion', 'african', 'africa', 'african fashion', 'men fashion', 'men', 'exquisite', 'exquisity', 'when it comes to exquisity']
);
?>
  <?= $this->Html->meta(
    'description',
    "Out of the richness of Africa... When it comes to being exquisite, we've got you covered"
);
?>
    <title>
        Figourd
    </title>
<!-- 
    <?= $this->Html->meta('icon') ?> -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
    <div class="container">
        <div class="row">
            <div>
                <center>
                    <img src="/img/logo.png" class="logo">   
                </center>           
            </div>
            <center class="main-menu">
                <a href="/figourd/about"><button>About</button></a>

                <button>Samples</button>

                <button>Order</button>

                <button>Blog</button>
            </center>
            <div>

                <footer class="footer"><strong> Copyright &copy <?= $year ?> Figourd. All rights reserved. </strong></footer> 
            </div>
        </div>
    </div>
</body>
</html>
