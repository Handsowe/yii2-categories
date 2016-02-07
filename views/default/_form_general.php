<div class="clearfix">&nbsp;</div>
<?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('Enter name for your category.'); ?>
<?= $form->field($model, 'slug')->textInput(['maxlength' => true])->hint('Specify url name of your category (eg. home-apliances) '); ?>
<?= $form->field($model, 'description')->textarea(['rows' => 6])->widget(\yii\redactor\widgets\Redactor::className())->hint('Add description to category.'); ?>