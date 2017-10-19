<?php
namespace app\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Katanyoo Ubalee <ubalee.k@gmail.com>
 */
class Country extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'country';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['code'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }
}
