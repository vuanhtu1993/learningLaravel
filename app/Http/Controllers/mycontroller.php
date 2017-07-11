<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class mycontroller extends Controller
{
    public function XinChao(){
        echo 'xin chao cac ban';
    }
    public function Course($name){
        echo 'Course:'.$name;
    }
    public function getURL(Request $request){
        if ( $request->isMethod('get'))
            echo "get method";
        else echo "not get method";
    }
    public function getForm(Request $request){
       echo $request->url();
    }
    public function postForm(Request $request){
        echo 'Ten toi la: ';
        echo $request->input('HoTen');
    }
    /*WORKING WITH COOKIE*/
    public function setCookie(){
        $response = new Response();
        $response->withCookie('khoahoc', 'laravel', '0.5');
        echo 'da set cookie';
        return $response;

    }
    public function getCookie(Request $request){
        echo 'da get cookie';
        return $request->cookie('khoahoc');
    }

    /*UPLOAD FILE TO CODING FOLDER PUBLIC->IMAGES*/
    public function postFile(Request $request){
        if($request->hasFile('myFile'))                     //kiểm tra xem có file hay không
        {
            $file = $request->file('myFile');               // quét file
            if($file->getClientOriginalExtension()=='jpg'){ //check right file extention
                $filename = $file->getClientOriginalName(); //đặt tên file đứng với gốc
                $file->move('images',$filename);            // save file at location 'images'
                echo 'have uploaded file';
            }
            else{
                echo 'not compatible file';
            }

        }
        else echo 'non any file';
    }

    /*CREATED FILE .JSON*/
    public function getJson(){
        $array=['php','html','css','javascript'];
        return response()->json($array);
    }

    /*CREATED VIEW*/
    public function myView(){
        return view('myview');
    }

    /*truyen tham so tren view*/
    public function Time($t){
        return view('myview',['time'=>$t]);
    }
}
