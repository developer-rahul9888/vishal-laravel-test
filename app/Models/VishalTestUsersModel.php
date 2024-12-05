<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VishalTestPostsModel;


class VishalTestUsersModel extends Model
{
    use HasFactory;

    protected $table = 'vishal_test_users';

    protected $fillable = ['id','email','username'];


    public function posts()
    {
        return $this->hasMany(VishalTestPostsModel::class,'user_id');
    }
}
