<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,300italic,400italic,700italic|Roboto|Raleway|PT+Sans+Narrow|Cuprum|Titillium+Web|Fjalla+One|Cabin' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  
  <title><?php echo Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   <link href="css/site.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   
   
</head>
<body>
  <?php $this->beginBody() ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="index.php?r=site%2Findex" class="brand-logo">startITup</a>
	  		<?php
                        
                        
				echo Menu::widget([
				'options' => ['id' => "nav-mobile", 'class' => 'right side-nav'],
				'items' => [
                                ['label' => 'Home', 'url' => ['site/index']],   
				['label' => 'Resources', 'url' => ['site/resources']],
				['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
				],
				]);
				?>
        <!--- <div class="search"><input id="search"><i class="material-icons">search</i>
        <div class="search-results"></div>
        </div> --->
          
          <img src="images/targethalf.png">
          
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
 

  <?php echo $content; ?>
 

  <div class="container">
    <div class="section">

     
      
    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="orange">
    <div class="container">
      <div class="row">
        
          
        <div class="col s5">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="index.php?r=site%2Fabout">About</a></li>
            <li><a class="white-text" href="index.php?r=site%2Fcontact">Contact</a></li>
             <li><a class="white-text" href="index.php?r=site%2Ffaq">FAQ</a></li>
            <li><a class="white-text" href="index.php?r=site%2Fprivacy">Privacy Policy</a></li>
             <li><a class="white-text" href="index.php?r=site%2Fterms">Terms and Conditions</a></li>
          </ul>
        </div>
          
           <div class="col s0">
          <h5 class="white-text"></h5>
          <ul>
              <li><a class="white-text" href="#!"><img src="images/instagram.png"></a></li>
            <li><a class="white-text" href="#!"><img src="images/youtube.png"></a></li>
            <li><a class="white-text" href="#!"><img src="images/google.png"></a></li>
          </ul>
        </div>
          
        <div class="col s1">
          <h5 class="white-text"></h5>
          <ul>
              <li><a class="white-text" href="#!"><img src="images/facebook.png"></a></li>
            <li><a class="white-text" href="#!"><img src="images/twitter.png"></a></li>
            <li><a class="white-text" href="#!"><img src="images/linkedin.png"></a></li>
          </ul>
        </div>
          <div class="col s5">
          <h5 class="white-text">Subscribe</h5>
          <p class="grey-text lighten-4"></p>
          <div class="input-field col4">
          <input id="email" type="email" class="validate">
          <label for="email">to our newsletter</label>
          </div>
        </div>
          
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text lighten-3">Ruxandra Pui, CLIW 2015</a>
      </div>
    </div>
  </footer>  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>