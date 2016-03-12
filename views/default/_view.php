<?php
/*
 * This file is part of the YiiModules.com
 *
 * (c) Yii2 modules open source project are hosted on <http://github.com/yiimodules/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use yiimodules\categories\models\Categories;
use yii\helpers\Html;
use yii\widgets\DetailView;
?>

<div class="clearfix">&nbsp;</div>

<?= DetailView::widget([
	'model' => $model,
	'attributes' => [
		[
			'attribute'=>'image',
			'value' => Categories::getImage($model->id,'small',['class'=>'thumbnail']),
			'format'=>'raw'
		],
		'id',
		[
			'attribute'=>'parent_id',
			'value' => Html::a(Html::getAttributeValue($model,'parentCategory[name]'),['/categories','id'=>$model->parent_id]),
			'format'=>'raw',
			'visible'=>($model->parent_id==0) ? false : true
		],
		'name',
		'slug',
		'description',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'is_active',
		'created_at',
		'updated_at',
	],
]) ?>
