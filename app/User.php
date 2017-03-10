<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Kbwebs\MultiAuth\PasswordResets\CanResetPassword;
use Kbwebs\MultiAuth\PasswordResets\Contracts\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'postalcode',
        'prefecture',
        'address1',
        'address2',
        'address3',
        'phone',];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    public function favorites()
    {
        return $this->belongsToMany(Mc::class, 'favorites','user_id','mc_id')->withTimestamps();
    }
    
     public function like($mcId)
    {
        $exist = $this->already_liked($mcId);
        
        if($exist){
            return false;
        }else{
            $this->favorites()->attach($mcId);
            return true;
        }
    }
    
    public function unlike($mcId)
    {
        $exist = $this->already_liked($mcId);
        
        if($exist){
            $this->favorites()->detach($mcId);
            return true;
        }else{
            return false;
        }
    }
    
    public function already_liked($mcId)
    {
        return $this->favorites()->where('mc_id', $mcId)->exists();
    }
}
