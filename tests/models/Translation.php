<?php

namespace NovemBit\active;


use NovemBit\ActiveData;
use PDO;

/**
 * @property int    id
 * @property string source
 * @property int    from_language
 * @property int    type
 * @property int    to_language
 * @property string translate
 * @property int    level
 * @property int    created_at
 * @property int    updated_at
 */
class Translation extends ActiveData\ActiveRecord {

    public static $table_name = "bli18n_translations";

}