<?php
namespace App\models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Participant extends Model{
    use hasFactory;
    protected $table= "participant";
    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
        'is_confirmed',
        'is_team_leader',
        'is_team',
        'registration_group_id',
        'team_name',
        'auth_key',
    ];
}
