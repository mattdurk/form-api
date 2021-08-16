<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Str;

class FormSubmissionController extends Controller
{
    //
    public function inquery(Request $request) {

       $inquiry = new Inquiry();
       $inquiry->uid = Str::uuid();
       $inquiry->category_id  = isset( $request->category_id ) ? $request->category_id  : 1;
       $inquiry->fullname = isset( $request->fullname ) ?  $request->fullname : 'n/a';
       $inquiry->furigana = isset( $request->furigana ) ?  $request->furigana : 'n/a';
       $inquiry->age = isset( $request->age ) ? $request->age : 1;
       $inquiry->gender = isset( $request->gender ) ? $request->gender : 'n/a';
       $inquiry->meta_data = json_encode( $request->all() );
       $inquiry->save();

       return true;

    }
}
