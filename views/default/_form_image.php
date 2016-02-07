<?php
use app\vendor\yiimodules\categories\models\Categories;
?>

<div class="clearfix">&nbsp;</div>

<?= $form->field($model, 'image')->fileInput() ?>

<?php
if($model->id!=""){
echo Categories::getImage($model->id,'medium',['class'=>'thumbnail']);
}
?>
