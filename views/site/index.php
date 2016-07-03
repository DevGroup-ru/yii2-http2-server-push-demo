<?php

/* @var $this yii\web\View */

$this->title = 'yii2-http2-server-push DEMO';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hi there!</h1>

        <p class="lead">You are running yii2-http2-server-push DEMO.</p>


    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Font awesome</h2>

                <p>
                    <i class="fa fa-floppy-o fa-3x"></i>
                    <i class="fa fa-magic fa-3x"></i>
                    <i class="fa fa-3x fa-code-fork"></i>
                </p>

                <p>
                    This font-awesome images are served by cdnjs @ https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css
                </p>
            </div>
            <div class="col-lg-6">
                <h2>Bootbox</h2>

                <p>Bootbox.js is served by cdnjs with protocol-relative URL //cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js</p>

                <p><a class="btn btn-default bootbox-btn" href="#">Run example</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>AssetManager</h2>

                <p>
                    All CSS and JS files are represented in standard app\assets\AppAsset class.
                </p>

                <p>
                    This package determines if the URL is absolute or relative and adds crossorigin if needed.
                </p>
            </div>
        </div>

    </div>
</div>
<?php
$js = <<<js
$('.bootbox-btn').click(function(){
  bootbox.alert("Hello world!");
});
js;
$this->registerJs($js);