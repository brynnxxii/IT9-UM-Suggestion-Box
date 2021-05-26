<?php

namespace App\Http\Controllers;

use App\Models\Postdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postdetails = Postdetail::latest()->paginate(5);
    
        return view('postdetails.index',compact('postdetails'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('postdetails.create'); /
        if(Auth::user()->hasRole('user')){
            return view('dashboard.create');
       }elseif(Auth::user()->hasRole('teacher')){
            return view('dashboard.create');
       }elseif(Auth::user()->hasRole('admin')){
        return view('postdetails.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'scid' => 'required',
            'fullname' => 'required',
            'office' => 'required',
            'category' => 'required',
            'post' => 'required',
            'post_date' => 'required',
            ]);
    
        Postdetail::create($request->all());
     
        // return redirect()->route('postdetails.index')
        //                 ->with('success','Form sent successfully.');

        if(Auth::user()->hasRole('user')){
            return redirect()->route('dashboard.userpost')
             ->with('success','Submitted form sent successfully. 
             We appreciate that you’ve taken the time to write us.');

        }elseif(Auth::user()->hasRole('teacher')){
            return redirect()->route('dashboard.teacherpost')
             ->with('success','Submitted form sent successfully. 
             We appreciate that you’ve taken the time to write us.');

        }elseif(Auth::user()->hasRole('admin')){
            return redirect()->route('postdetails.index')
            ->with('success','Submitted form sent successfully. 
            We appreciate that you’ve taken the time to write us.');
        }
    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postdetail  $postdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Postdetail $postdetail)
    {
        
        return view('postdetails.show',compact('postdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postdetail  $postdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Postdetail $postdetail)
    {
        return view('postdetails.edit',compact('postdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postdetail  $postdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postdetail $postdetail)
    {
        $request->validate([
            'scid' => 'required',
            'fullname' => 'required',
            'office' => 'required',
            'category' => 'required',
            'post' => 'required',
            'post_date' => 'required',
        ]);
    
        $postdetail->update($request->all());
    
        return redirect()->route('postdetails.index')
                        ->with('success','Submited form was been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postdetail  $postdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postdetail $postdetail)
    {
        $postdetail->delete();
    
        return redirect()->route('postdetails.index')
                        ->with('success','Submited form deleted successfully');
    }
    

    public function search(Request $request){
    
    $search_text = $request->get('query');
    $postdetail = Postdetail::where('category','LIKE', '%'.$search_text.'%')->orWhere('office','LIKE','%'.$search_text.'%')->get();
    return view('postdetails.search',compact('postdetail'));
    }
}
