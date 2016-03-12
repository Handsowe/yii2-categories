<?php
/*
 * This file is part of the YiiModules.com
 *
 * (c) Yii2 modules open source project are hosted on <http://github.com/yiimodules/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace yiimodules\categories;


/**
 * categories module definition class
 */
class Module extends \yii\base\Module
{
	//Path where category images will be uploaded
	public $uploadDir = '@webroot/uploads/category-images';
	public $uploadUrl = '@web/uploads/category-images';
	/*
	Array of Image thumb sizes will create different image version after resizing
	Thumb directory will be "{uploadPath}/{thumb name}
	*/
	public $uploadThumbs = ["small" => [80,80],"medium" => [120,120]];
	
	public $assets = "";

     /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->setAliases([
            '@categories-assets' => __DIR__ . '/assets'
        ]);
        // custom initialization code goes here
		
    }
}
