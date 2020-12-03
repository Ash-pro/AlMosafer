<?php

namespace App\Http\Controllers\Dashboard;

use App\Consultation_requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Consultation_requestsController extends Controller
{
    public function __construct()
    {
        //Parent Path
        $this->path = "dashboard.consultation_requests.";

        //Permissions
        $this->middleware('permission:read_categories')->only(['index']);
        $this->middleware('permission:create_categories')->only(['create','store']);
        $this->middleware('permission:update_categories')->only(['edit','update']);
        $this->middleware('permission:delete_categories')->only(['destroy']);

    }

    public function index()
    {
        $consultation_requests = Consultation_requests::WhenSearch(request()->search)->paginate(5);
        return view($this->path.'index',compact('consultation_requests'));
    }//end of index

    public function create()
    {
        return view($this->path.'create');
    }//end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        Consultation_requests::create($request->all());

        session()->flash('success',__('site.DataAddSuccessfully'));
        return view('welcome');
    }//end of store

    public function show($id)
    {
        //
    }//end of show

    public function edit(Consultation_requests $consultation_requests)
    {
        return view($this->path.'create',compact('consultation_requests'));
    }//end of edit

    public function update(Request $request, Consultation_requests $consultation_requests)
    {
        $request->validate([
            'name' => 'required|unique:consultation_requests,name,'.$consultation_requests->id,
        ]);
        $consultation_requests->update($request->all());
        session()->flash('success',__('site.DataUpdatedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of update

    public function destroy(Consultation_requests $consultation_requests)
    {
        $consultation_requests->delete();
        session()->flash('success',__('site.DataDeletedSuccessfully'));
        return redirect()->route($this->path.'index');
    }//end of destroy
}
