<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $NewsID
 * @property string $img
 * @property int $sort
 */
class NewsImgs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newstestimgs';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'NewsID', 'img', 'sort'];





}
