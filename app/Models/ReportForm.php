<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportForm extends Model
{
    use HasFactory;
	protected $table = 'reports';
	protected $fillable = ['query','fname','lname','email','subject'];
}
