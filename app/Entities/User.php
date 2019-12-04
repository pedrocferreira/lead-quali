<?php

namespace App\Entities;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    #use SoftDeletes;
    use Notifiable;

    /**
     * ========================================================================== *
     * The ORM databse attributes
     * ========================================================================== *
     */
    public    $timestamps   = true;
    protected $table        = 'users';
    protected $fillable = [ 'nome','empresa_id','login','password','tipo_user' , 'email',  'satatus', 'permission'];
    protected $hidden       = ['password', 'remember_token'];


    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups');
	}
	
	public function moviments(){
		return $this->hasMany(Moviment::class);
	}



	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
	}
    


}
