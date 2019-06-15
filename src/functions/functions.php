<?php

/**
 * @return \yii\console\Application|\yii\web\Application
 */
function app()
{
    return Yii::$app;
}

/**
 * @return \yii\db\Connection
 */
function db()
{
    return app()->db;
}