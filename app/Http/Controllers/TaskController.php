<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $details     = session()->all();
    //    dd($details['formdata']);
       return view('task.index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(session()->all());

        return view('task.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $url = null;
        if ($request->hasfile('file')) {
            $file       = $request->file('file');
            $filePath   = 'storage/upload/';
            if (empty($fileName)) {
                $ext        = $file->getClientOriginalExtension();
                $fileName   = time() . '-' . mt_rand(1000, 9999) . '.' . $ext ;
            }
            $file->move($filePath, $fileName);
            @chmod($filePath . $fileName, 0777);
            $url    = url('/') . '/' . $filePath . $fileName;
        }
        
        $session       = session()->all();
        $data           = $request->all();
        $data['file'] = $url;
        $session['formdata'][] = $data;
        // dd($session);
        // $array = array_merge(session()->all(), $request->all());
        session($session);

        // $request->session()->put($request->all());

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $key = $id-1;
        $task = session('formdata')[$key];
        return view('task.update',compact('task','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url        = null;
        $session    = session()->all();
        if ($request->hasfile('file')) {
            $file       = $request->file('file');
            $filePath   = 'storage/upload/';
            if (empty($fileName)) {
                $ext        = $file->getClientOriginalExtension();
                $fileName   = time() . '-' . mt_rand(1000, 9999) . '.' . $ext ;
            }
            $file->move($filePath, $fileName);
            @chmod($filePath . $fileName, 0777);
            $url    = url('/') . '/' . $filePath . $fileName;
        }
        $data           = $request->all();
        $data['file']   = $url;
        $session['formdata'][$id-1] = $data;
        session($session);
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $session    = session()->all();
        // print_r($session['formdata'][$id-1]);
        unset($session['formdata'][$id-1]);
        // dd($session['formdata']);
        session(['formdata'=>$session['formdata']]);
        return redirect()->route('task.index');
    }
    public function taskSave()
    {
        $session    = session()->all();
        foreach ($session['formdata'] as $key => $value) {
            # code...
            $users            = Users::create($value);
        }
        session()->flush();
        $users            = Users::all();
        return redirect()->route('task.create');
    }
}
