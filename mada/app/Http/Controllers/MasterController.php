<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Validator;
use View;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::all();
        return view('master.index', ['masters' => $masters]);
    }


    public function list(Request $request)
    {
        
        if ($request->sort) {
            if ($request->sort == 'default' || $request->sort == 'name') {
                if ($request->order == 'default' || $request->order == 'asc') {
                    $masters = Master::orderBy('name')->get();
                }
                else if ($request->order == 'desc') {
                    $masters = Master::orderBy('name', 'desc')->get();
                }
                else {
                    $masters = Master::all();// neturetu nutikti
                }
            }
            else if ($request->sort == 'date') {
                if ($request->order == 'default' || $request->order == 'asc') {
                    $masters = Master::orderBy('updated_at')->get();
                }
                else if ($request->order == 'desc') {
                    $masters = Master::orderBy('updated_at', 'desc')->get();
                }
                else {
                    $masters = Master::all();// neturetu nutikti
                }
            }
            else {
                $masters = Master::all();// neturetu nutikti
            }
        }
        else {
            $masters = Master::all();
        }
        
        

        
        
        
        
        
        $listRender = View::make('master.list')->with(['masters' => $masters])->render();
        
        return response()->json([
            'hell' => 'hello, little one',
            'listHtml' => $listRender
        ]);
        
        
        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),
            [
                'master_name' => ['required', 'min:3', 'max:64'],
                'master_surname' => ['required', 'min:3', 'max:64'],
                'master_portret' => ['sometimes','mimes:jpg,gif,png'],
            ]
        );


        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $master = new Master;

        if ($request->has('master_portret')) {
            $portret = $request->file('master_portret');
            $imageName = 
            $request->master_name. '-' .
            $request->master_surname. '-' .
            time(). '.' .
            $portret->getClientOriginalExtension();
            $path = public_path() . '/portrets/'; // serverio vidinis kelias
            $url = asset('portrets/'.$imageName); // url narsyklei (isorinis)
            $portret->move($path, $imageName); // is serverio tmp ===> i public folderi
            $master->portret = $url;
        }
        
        $master->name = $request->master_name;
        $master->surname = $request->master_surname;
        $master->save();
        return redirect()->route('master.index')->with('success_message', 'New Masters has arrived.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        return view('master.edit', ['master' => $master]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'master_name' => ['required', 'min:3', 'max:64'],
                'master_surname' => ['required', 'min:3', 'max:64'],
                'master_portret' => ['sometimes','mimes:jpg,gif,png'],
            ],
            [
                'master_name.min' => 'Tavo labai mažas yra vardas',
                'master_name.max' => 'Tavo labai didelis yra vardas',
            ]
        );


        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
            
        if ($request->has('master_portret')) {

            if ($master->portret) {
                $imageName = explode('/', $master->portret);
                $imageName = array_pop($imageName);
                $path = public_path() . '/portrets/'.$imageName;
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $portret = $request->file('master_portret');
            $imageName = 
            $request->master_name. '-' .
            $request->master_surname. '-' .
            time(). '.' .
            $portret->getClientOriginalExtension();
            $path = public_path() . '/portrets/'; // serverio vidinis kelias
            $url = asset('portrets/'.$imageName); // url narsyklei (isorinis)
            $portret->move($path, $imageName); // is serverio tmp ===> i public folderi
            $master->portret = $url;
        }
        $master->name = $request->master_name;
        $master->surname = $request->master_surname;
        $master->save();
        return redirect()->route('master.index')->with('success_message', 'The Masters was edited succesfuly.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        if ($master->masterOutfits->count()) {
            return redirect()->back()->with('info_message', 'This Master can not be deleted.');
        }
        if ($master->portret) {
            $imageName = explode('/', $master->portret);
            $imageName = array_pop($imageName);
            $path = public_path() . '/portrets/'.$imageName;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $master->delete();
        return redirect()->route('master.index')->with('success_message', 'The Masters has gone.');
    }
}
