<?php

/* @var $this yii\web\View */
/** @var $users array */

$this->title = 'View users';
$this->registerJs('var locations = ' . json_encode($users) .'', yii\web\View::POS_HEAD);
$this->registerJsFile('@web/js/google_map_view_users.js', ['depends' => 'yii\web\JqueryAsset']);
?>
<div class="site-index">

    <div class="body-content">

        <div id="map"></div>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.11&key=<?= Yii::$app->params['mapApiKey'] ?>&sensor=false"
            type="text/javascript"></script>
</div>
