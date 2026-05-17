<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['user_id', 'course_id', 'payment_method_id', 'startdate'];
    protected $guarded = [];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {

        return $this->belongsTo(Course::class, 'course_id');
    }
    public function paymentMethod()
    {

        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function review()
    {

        return $this->belongsTo(Review::class, 'report_id');
    }
}
