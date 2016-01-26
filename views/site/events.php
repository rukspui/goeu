<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Get Inspired';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="container container-padding">
    <h1><?= Html::encode($this->title) ?></h1>
<div class="content-about">
    
    
    
      <form action="#">
          <p>I am a</p>
    <p>
      <input name="group1" type="radio" id="male" />
      <label for="male">male</label>
    </p>
    <p>
      <input name="group1" type="radio" id="female" />
      <label for="female">female</label>
    </p>

     <div class="input-field col s12 m6">
         <p>My age</p>
    <select>
      <option value="" disabled selected>is between</option>
      <option value="1">16-21 yo</option>
      <option value="2">22-35 yo</option>
      <option value="3">35+ yo</option>
    </select>
   
  </div>

    
    <p>who is a</p>
<p>
      <input type="checkbox" id="young professional" />
      <label for="young professional">young professional</label>
    </p>
    <p>
      <input type="checkbox" id="student"/>
      <label for="student">student</label>
    </p>
     <p>
      <input type="checkbox" id="intern"/>
      <label for="intern">working student/trainee/intern</label>
    </p>
     <p>
      <input type="checkbox" id="freelancer"/>
      <label for="freelancer">freelancer</label>
    </p>
     <p>
      <input type="checkbox" id="entrepreneur"/>
      <label for="entrepreneur">entrepreneur</label>
    </p>
     <p>
      <input type="checkbox" id="volunteer"/>
      <label for="volunteer">volunteer</label>
    </p>

    
      <p>and I am interested in</p>
      <p>
      <input type="checkbox" id="science" />
      <label for="science">science</label>
    </p>
    <p>
      <input type="checkbox" id="music"/>
      <label for="music">music</label>
    </p>
     <p>
      <input type="checkbox" id="dance"/>
      <label for="dance">dance</label>
    </p>
     <p>
      <input type="checkbox" id="IT"/>
      <label for="IT">IT</label>
    </p>

    
    
    
          <p>I prefer resources that are</p>
      <p>
      <input type="checkbox" id="video" />
      <label for="video">video</label>
    </p>
       <p>
      <input type="checkbox" id="audio" />
      <label for="audio">audio</label>
    </p>
       <p>
      <input type="checkbox" id="text" />
      <label for="text">text</label>
    </p>
<button type="submit" class="btn btn-primary" name="login-button">Surprise me</button>
  </form>
   
    
</div>
</div>
</div>
