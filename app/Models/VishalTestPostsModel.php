<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VishalTestUsersModel;

class VishalTestPostsModel extends Model
{
    use HasFactory;

    protected $table = 'vishal_test_posts';

    protected $fillable = ['id', 'title' , 'user_id'];
    
    public function posts()
    {
        return $this->belongsTo(VishalTestUsersModel::class);
    }
}
