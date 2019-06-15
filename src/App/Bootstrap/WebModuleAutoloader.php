<?php


namespace App\Bootstrap;


use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\helpers\FileHelper;

class WebModuleAutoloader extends Component implements BootstrapInterface
{
    /**
     * @var array
     */
    public $modulePaths = [];

    public function bootstrap($app)
    {
        foreach ($this->modulePaths as $modulePath) {
            $dirs = FileHelper::findDirectories(\Yii::getAlias($modulePath), [
                'recursive' => false
            ]);

            foreach ($dirs as $dir) {
                $this->loadDir($dir);
            }
        }
    }

    public function loadDir($dir)
    {
        $config = require($dir . '/config.php');
        $id = $config['id'];
        $moduleClass = $config['__class'];
        $urlRules = $config['urlRules'] ?? [];

        \Yii::$app->setModule($id, $moduleClass);
        if (count($urlRules) > 0) {
            \Yii::$app->urlManager->addRules($urlRules);
        }
    }
}