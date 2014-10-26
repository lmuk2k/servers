<?php

class WebsiteController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all the websites
        $websites = Website::all();

        // load the view and pass the websites
        return View::make('websites.index')
                        ->with('websites', $websites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('websites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'website_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('websites/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $website = new Website;
            $website->name = Input::get('name');
            $website->email = Input::get('email');
            $website->website_level = Input::get('website_level');
            $website->save();

            // redirect
            Session::flash('message', 'Successfully created website!');
            return Redirect::to('websites');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get the website
        $website = Website::find($id);

        // show the view and pass the website to it
        return View::make('websites.show')
                        ->with('website', $website);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the website
        $website = Website::find($id);

        // show the edit form and pass the website
        return View::make('websites.edit')
                        ->with('website', $website);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'website_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('websites/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $website = Website::find($id);
            $website->name = Input::get('name');
            $website->email = Input::get('email');
            $website->website_level = Input::get('website_level');
            $website->save();

            // redirect
            Session::flash('message', 'Successfully updated website!');
            return Redirect::to('websites');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        // delete
        $website = Website::find($id);
        $website->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the website!');
        return Redirect::to('websites');
    }

}
