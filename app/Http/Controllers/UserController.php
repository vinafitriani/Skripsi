<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_en()
    {
        return view('english.signup-en');
    }

    public function create_in()
    {
        return view('indo.signup-in');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /* English */
    public function about_en()
    {
        return view('english.about-en');   
    }
    public function apply_event_en()
    {
        return view('english.apply-event-en');   
    }
    public function category_en()
    {
        return view('english.category-en');   
    }
    public function edit_event_en()
    {
        return view('english.edit-event-en');   
    }
    public function events_en()
    {
        return view('english.events-en');   
    }     
    public function inbox_en()
    {
        return view('english.inbox-en');   
    } 
    public function index_en()
    {
        return view('english.index-en');   
    } 
    public function index_model_en()
    {
        return view('english.index-model-en');   
    } 
    public function index_plk_en()
    {
        return view('english.index-plk-en');   
    } 
    public function post_event_en()
    {
        return view('english.post-event-en');   
    } 
    public function profile_model_en()
    {
        return view('english.profile-model-en');   
    } 
    public function profile_plk_en()
    {
        return view('english.profile-plk-en');   
    } 
    public function signin_en()
    {
        return view('english.signin-en');   
    }

    /* Indo */
    public function about_in()
    {
        return view('indo.about-in');   
    }
    public function apply_event_in()
    {
        return view('indo.apply-event-in');   
    }
    public function category_in()
    {
        return view('indo.category-in');   
    }
    public function edit_event_in()
    {
        return view('indo.edit-event-in');   
    }
    public function events_in()
    {
        return view('indo.events-in');   
    }     
    public function inbox_in()
    {
        return view('indo.inbox-in');   
    } 
    public function index_in()
    {
        return view('indo.index-in');   
    } 
    public function index_model_in()
    {
        return view('indo.index-model-in');   
    } 
    public function index_plk_in()
    {
        return view('indo.index-plk-in');   
    } 
    public function post_event_in()
    {
        return view('indo.post-event-in');   
    } 
    public function profile_model_in()
    {
        return view('indo.profile-model-in');   
    } 
    public function profile_plk_in()
    {
        return view('indo.profile-plk-in');   
    } 
    public function signin_in()
    {
        return view('indo.signin-in');   
    }
}
