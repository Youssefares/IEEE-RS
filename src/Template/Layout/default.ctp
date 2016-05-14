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
 use Cake\Datasource\ConnectionManager;

$connection = ConnectionManager::get('default');
$results = $connection->execute('SELECT * FROM courses WHERE remaining_seats <= 5')->fetchAll();
$cakeDescription = 'IEEE AlexSB Registration System';
if(isset($_COOKIE['idforColor'])){
if($this->name == 'EventRegistrants'){
  $id = $_COOKIE['idforColor'];
  $r = $connection->execute('SELECT color FROM events WHERE id = :id',['id' => $id])->fetchAll();
  $eventName = $connection->execute('SELECT title FROM events WHERE id = :id',['id' => $id])->fetchAll()[0][0];
  $color = $r[0][0];
  $rgb = str_split($color,2);
  $color = '#'.$color;
  $Darker_rgb = '#'.dechex(hexdec($rgb[0]) - 22).dechex(hexdec($rgb[1]) - 22).dechex(hexdec($rgb[2]) - 22);
  $IDs = ['.top-bar.expanded','a','.title-area','th','legend','.heading'];
}
else if( $this->name == 'VisitRegistrants'){
  $id = $_COOKIE['idforColor'];
  $r = $connection->execute('SELECT color FROM visits WHERE id = :id',['id' => $id])->fetchAll();
  $eventName = $connection->execute('SELECT title FROM visits WHERE id = :id',['id' => $id])->fetchAll()[0][0];
  $color = $r[0][0];
  $rgb = str_split($color,2);
  $color = '#'.$color;
  $Darker_rgb = '#'.dechex(hexdec($rgb[0]) - 22).dechex(hexdec($rgb[1]) - 22).dechex(hexdec($rgb[2]) - 22);
  $IDs = ['.top-bar.expanded','a','.title-area','th','legend','.heading'];
}
else if($this->name == 'SeminarRegistrants'){
  $id = $_COOKIE['idforColor'];
  $r = $connection->execute('SELECT color FROM seminars WHERE id = :id',['id' => $id])->fetchAll();
  $eventName = $connection->execute('SELECT title FROM seminars WHERE id = :id',['id' => $id])->fetchAll()[0][0];
  $color = $r[0][0];
  $rgb = str_split($color,2);
  $color = '#'.$color;
  $Darker_rgb = '#'.dechex(hexdec($rgb[0]) - 22).dechex(hexdec($rgb[1]) - 22).dechex(hexdec($rgb[2]) - 22);
  $IDs = ['.top-bar.expanded','a','.title-area','th','legend','.heading'];
}
  ?>
<style>
<?php
foreach($IDs as $id){
  echo $id."{ color:".$color."!important;}";
}

?>
fieldset legend {
    border-bottom: 2px solid <?= $color?>!important;
}
</style>
<?php }?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?php if(($this->name == 'EventRegistrants' || $this->name == 'VisitRegistrants' || $this->name == 'SeminarRegistrants') && isset($_COOKIE['idforColor'])){?>

  <style>.img {
      position: relative;
      width: 100%;
      height: 400px;
      background-position: 50% 0%;
      background-repeat:   no-repeat;
      background-size:     cover;
      position: absolute;;
      -webkit-filter: blur(8px);
      z-index: 1;
  }
  #TitleH{
    z-index: 2;
    left: 26%;
    top: 30%;
    position: absolute;
    height: 400px;
  }
  </style>
  <div style = "position: relative; height: 400px;">
  <section class = 'img' style="background-image:url('/img/<?= $eventName?>.jpg')";> </section>
  <section class = 'img' style="background-image:url('/img/<?= $eventName?>.png')";> </section>
  <div id = "TitleH">
     <h1 style = "-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #FFFFFF; font-size: 70px"> <?= $eventName ?></h1>
   </div>
</div>

<?php } else{?>


    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
          <a href= "/">
            <?= $this->Html->image("ieee_alexsb_white_small.png",['align'=> 'right', 'style' => 'margin-right: 60px; margin-top: 8px;'])?>
          </a>
        </section>
    </nav>
<?php }?>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
        <?= $this->fetch('content') ?>
        <?php
        if($this->name == 'Registrants' ||$this->name == 'Courses'){
        echo "<div class = 'related alert alert-danger columns large-9 meduim-8'>";
        foreach ($results as $result)  echo "<strong>Warning</strong>: The course $result[1] has only $result[2] seats remaining.<br>";
        echo "</div>";
      }
        ?>
    </section>
    <footer>
    </footer>
</body>
</html>
