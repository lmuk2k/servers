<?php

class WebsiteController extends BaseController {

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct() {
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }
    
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
        $servers = Server::all();
        return View::make('websites.create')
                        ->with('servers', $servers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        $validator = Validator::make(Input::all(), Website::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('websites/create')
                            ->withErrors($validator);
        } else {
            // store
            $website = new Website;
            $website->name = Input::get('name');
            $website->full_name = Input::get('full_name');
            $website->url = Input::get('url');
            $website->production = Input::get('production');
            $website->description = Input::get('description');
            $website->notes = Input::get('notes');
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
        $validator = Validator::make(Input::all(), Website::$rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('websites/' . $id . '/edit')
                            ->withErrors($validator);
        } else {
            // store
            $website = Website::find($id);
            $website->name = Input::get('name');
            $website->full_name = Input::get('full_name');
            $website->url = Input::get('url');
            $website->production = Input::get('production');
            $website->description = Input::get('description');
            $website->notes = Input::get('notes');
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
