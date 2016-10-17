<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Note extends Model
{
	protected $fillable = ['body'];

    public function card()
    {
    	return $this->belongsTo(Card::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    // This setter is not being used currently. It is just demonstrating how it is done.
    public function by(User $user)
    {
    	$this->user_id = $user->id;
    }
}
