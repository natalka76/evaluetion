return \yii\helpers\ArrayHelper::merge(
    (require _DIR_ . '/overrides/base.php'),
    (require _DIR_ . '/overrides/console_base.php'),
    (require _DIR_ . '/overrides/local.php')
);