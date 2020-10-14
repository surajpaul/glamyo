<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendCode extends Model
{
    public static function sendCode($phone){
    	$code=rand(1111,9999);
    	$nexmo=app('Nexmo\Client');
    	$nexmo->message()->send([
    		'to'=>'+91'.(int) $phone,
    		'from'=> 'Suraj Testing',
    		'text'=>'Verify code: '.$code,
    	]);
    	return $code;
    }
}
