<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'description', 'report_id'];
    protected $guarded = [];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function report()
    {

        return $this->belongsTo(Report::class, 'report_id');
    }
}
