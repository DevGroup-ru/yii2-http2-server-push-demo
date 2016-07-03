<?php

return [
    'adminEmail' => 'admin@example.com',
    'serverPush' => [
        'scriptsPositions' => [
            \yii\web\View::POS_HEAD,
            \yii\web\View::POS_BEGIN, // right after <body>
            \yii\web\View::POS_END,   // right before </body>
        ],
    ],
];
