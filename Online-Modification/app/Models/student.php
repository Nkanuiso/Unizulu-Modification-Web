<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "Surname",
        "Student_number",
        "Email",
        "Contact_number",
        "Old_Programme",
        "New_Programme",
        "Modules",
        "Semesta",
        "Module_Descriptions",
        "Reasons",
        "Module",
        "Semester",
        "Module_Description",
        "Reason",
    ];

}
