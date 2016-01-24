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
    
    
    <label for="birthdate" class="">Birthdate</label>
      <input type="date" class="datepicker">

    
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

  </form>
   
    
</div>
</div>
</div>
