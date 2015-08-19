<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNoticeRequest;
use App\Notice;
use App\Provider;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Response;

class NoticesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $notices = Notice::all();

        return \Response::view('notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $providers = Provider::lists('name', 'id');

        return \Response::view('notices.create', compact('providers'));
    }

    /**
     * Validate the form before submitting.
     *
     * @param ValidateNoticeRequest $request
     * @return Response
     */
    public function confirm(ValidateNoticeRequest $request)
    {
        $data = $request->all() + [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ];
        $template = view()->file(app_path('Http/Templates/dmca.blade.php'), $data);

        \Session::flash('data', $data);

        return Response::view('notices.confirm', compact('template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = \Session::get('data') + [
                'template' => $request->get('template')
            ];

        $notice = new Notice($data);

        \Auth::user()->notices()->save($notice);

        return Response::redirectToAction('NoticesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
