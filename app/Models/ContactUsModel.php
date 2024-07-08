<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class ContactUsModel extends Model
{
    use HasFactory;

    protected $table = 'contactus';

    static public function getRecordAll()
    {
        $return = self::select('contactus.*')
                ->orderBy('id', 'desc');

                if(!empty(Request::get('id'))){
                    $return = $return->where('contactus.id', '=', Request::get('id'));
                }

                if(!empty(Request::get('name'))){
                    $return = $return->where('contactus.name', 'like', '%'.Request::get('name').'%');
                }

                if(!empty(Request::get('email'))){
                    $return = $return->where('contactus.email', 'like', '%'.Request::get('email').'%');
                }

                if(!empty(Request::get('subject'))){
                    $return = $return->where('contactus.subject', 'like', '%'.Request::get('subject').'%');
                }

                if(!empty(Request::get('message'))){
                    $return = $return->where('contactus.message', 'like', '%'.Request::get('message').'%');
                }

                $return = $return->paginate(20);
                return $return;
    }
}
