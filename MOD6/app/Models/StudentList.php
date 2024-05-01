<?php

namespace App\Models;

use App\Http\Controllers\StudentListController;

use  Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentList extends Model
{
    use HasFactory;

    protected $table = "StudentList";
}