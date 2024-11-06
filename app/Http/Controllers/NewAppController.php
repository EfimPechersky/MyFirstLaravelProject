<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class NewAppController extends Controller{
    public function showmain(): View
    {
        return view('main');
    }
    public function showform()
    {
        return view('form');
    }
    public function storeinfo(Request $request){
        $request->validate([
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'phone' => ['required','min:11','numeric'],
            'birthdate'=>['required','date_format:Y-m-d'],
            'policy' =>['accepted']
        ]);
        $data=['firstname'=> $request->input('firstname'),
        'lastname'=> $request->input('lastname'),
        'phone'=>$request->input('phone'),
        'birthdate'=> $request->input('birthdate')];
        $data=json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('./files/info'.strval(rand(0, 1000000)).'.json', $data);
        return view('form', ['alvar'=>"Данные сохранены!"]);
    }
    public function showtable(){
        $filelist=scandir("./files");
        $info=[];
        for ($i=2; $i<sizeof($filelist); $i++){
            $json = file_get_contents('./files/'.$filelist[$i]);
            $data = json_decode($json);
            $info[]=['firstname'=>$data->firstname,
            'lastname'=>$data->lastname,
            'phone'=>$data->phone,
            'birthdate'=>$data->birthdate];
        }
        return view('table', ['info'=>$info]);
    }
    public function welcome() {
        return view('welcome');
    }
}
?>