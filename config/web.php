return \yii\helpers\ArrayHelper::merge(
    (require _DIR_ . '/overrides/base.php'),
    (require _DIR_ . '/overrides/web_base.php'),
    (require _DIR_ . '/overrides/local.php')
);