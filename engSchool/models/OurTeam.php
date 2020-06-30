<?php
/**
 * Created by PhpStorm.
 * User: zheni
 * Date: 6/30/2020
 * Time: 3:05 PM
 */

namespace app\models;


use yii\db\ActiveRecord;

class OurTeam extends ActiveRecord
{
    public static function tableName()
    {
        return 'ourteam';
    }

}