<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsModel extends Model
{
    protected $table = 'items_models';
    protected $dateFormat = 'Y/m/d H:i:s';
    protected $connection = 'mysql';
    public $timestamps = true;


    public function testDatabase()
    {
        //$Question = factory(App\PostQuestionModel::class)->create();
    }

    protected $fillable = [
        'name', 'description', 'image', 'price',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'remember_token',
    ];
}
