<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Resources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resources">
    <div class="container container-padding">
    <h1><?= Html::encode($this->title) ?></h1>
<div class="content-resources">
    <input type="text" class="searchQuery" />
    <button onclick="getTedYoutubeVideos()">Get clips</button>
    
    <div class="tedVideoResults">
        <div class="resultsWrapper"></div>
    </div>
</div>
    
<div class="youtubeVideoModal">
    
    
    
</div>
    
</div>
</div>



<script src="js/youtubeVideos.js"></script>
<script src="https://apis.google.com/js/client.js?onload=init"></script>
