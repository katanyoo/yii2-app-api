<?php
namespace app\modules\v1\models;
use yii\db\ActiveRecord;

/**
 * Country Model
 *
 * @author Katanyoo Ubalee <ubalee.k@gmail.com>
 */
class Country extends ActiveRecord
{
	/**
     * Declares the name of the database table associated with this AR class.
     * @return  string The table name
     */
	public static function tableName()
	{
		return 'country';
	}

    /**
     * Returns the primary key name(s) for this AR class.
     * @return string[] The primary keys of the associated database table.
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['name'], 'required']
        ];
    }
}
