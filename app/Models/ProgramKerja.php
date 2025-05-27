<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $table = 'program_kerjas';

    protected $fillable = [
        'nama_program',
        'deskripsi',
        'jadwal',
        'status'
    ];
}
// This model represents the Program Kerja entity in the application.
// It uses the HasFactory trait for factory support and defines the table name and fillable attributes.
// The fillable attributes include 'nama_program', 'deskripsi', 'jadwal', and 'status'.
// This allows mass assignment for these fields when creating or updating records in the database.
// The model can be used to interact with the 'program_kerjas' table in the database, allowing for CRUD operations.
// The 'nama_program' field is used to store the name of the program,
// 'deskripsi' for a description of the program, 'jadwal' for scheduling information,
// and 'status' to indicate the current status of the program (e.g., active, completed, etc.).
// This model can be extended with additional methods or relationships as needed for the application.
// It can also be used in conjunction with controllers to handle requests related to program kerja,
// such as creating, updating, retrieving, and deleting program kerja records.
// The model is a key part of the application's architecture, following the MVC (Model-View-Controller) pattern.
// It allows for clean separation of concerns, where the model handles data and business logic,
// the controller handles user input and application flow, and the view handles presentation.
// This model can be used in API endpoints to provide data to clients,          