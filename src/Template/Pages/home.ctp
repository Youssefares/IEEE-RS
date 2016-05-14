<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

echo $this->layout = false;
echo $this->Html->css('bootstrap.min');
echo $this->Html->css('freelancer');

echo $this->Html->css(['font-awesome','g2font','gfont']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        <!-- Header -->
        <header style = "background-color: #1a80bd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->Html->image('notebook.png',['class' => 'img-responsive']); ?>
                        <div class="intro-text">
                            <span class="name">Registration System</span>
                            <span class="skills">IEEE AlexSB Software Development Committee</span>
                            <br><br><br>

                            <div class="row btn-grp">
                                <br>
                                <button class="btn btn-primary btn-reg">
                                    <a <?= $this->Html->link('Events',['controller'=>'Events', 'action'=>'index']) ?> </a>
                                </button>
                                <button class="btn btn-primary btn-reg">
                                    <a <?= $this->Html->link('Courses',['controller'=>'Courses', 'action'=>'index']) ?> </a>
                                </button>
                                <button class="btn btn-primary btn-reg">
                                    <a <?= $this->Html->link('Membership',['controller'=>'Membership', 'action'=>'index']) ?> </a>
                                </button>
                                <br>
                                <br>
                                <button class="btn btn-primary btn-reg">
                                    <a <?= $this->Html->link('Seminars',['controller'=>'Seminars', 'action'=>'index']) ?> </a>
                                </button>
                                <button class="btn btn-primary btn-reg">
                                  <a <?= $this->Html->link('Visits',['controller'=>'Visits','action'=>'index'])?> </a>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>


        <?= $this->Html->script(['jquery','bootstrap.min','classie.js','cbpAnimatedHeader','jqBootstrapValidation','contact_me','freelancer']); ?>
        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    </body>

    </html>
</html>
