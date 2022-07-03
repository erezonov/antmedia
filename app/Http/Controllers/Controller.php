<?php

namespace App\Http\Controllers;

use App\Http\Requests\StreamCreateRequest;
use App\Library\Services\APIClass;
use App\Models\Streams;
use Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Auth\Events\Validated;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
           
    }
    public function index()
    {

        return view('index');
    }

    public function formAdd()
    {
        return view('add');
    }

    public function saveStreamtoApi(APIClass $API) {

        $api = $API->ConferenceRoomsCreate();
        dump($api->getStatusCode()) ;
     
        
    }

    public function saveStream(StreamCreateRequest $request)
    {
        $file = $request->file('image');

        $Stream = Streams::create($request->all());
        $originalname = $Stream->id . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $originalname);

        $Stream->image = $originalname;
        $Stream->save();
        return redirect('getstream');
    }

    public function getStream(Request $request)
    {
        $Streams = Streams::all();
        return view('streams', [
            'streams' => $Streams,
        ]);
    }
}
