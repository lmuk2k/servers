<?php

class ServerController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all the servers
        $servers = Server::all();

        // load the view and pass the servers
        return View::make('servers.index')
                        ->with('servers', $servers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('servers.create');
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
            'server_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('servers/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $server = new Server;
            $server->name = Input::get('name');
            $server->email = Input::get('email');
            $server->server_level = Input::get('server_level');
            $server->save();

            // redirect
            Session::flash('message', 'Successfully created server!');
            return Redirect::to('servers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get the server
        $server = Server::find($id);

        // show the view and pass the server to it
        return View::make('servers.show')
                        ->with('server', $server);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get the server
        $server = Server::find($id);

        // show the edit form and pass the server
        return View::make('servers.edit')
                        ->with('server', $server);
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
            'server_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('servers/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $server = Server::find($id);
            $server->name = Input::get('name');
            $server->email = Input::get('email');
            $server->server_level = Input::get('server_level');
            $server->save();

            // redirect
            Session::flash('message', 'Successfully updated server!');
            return Redirect::to('servers');
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
        $server = Server::find($id);
        $server->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the server!');
        return Redirect::to('servers');
    }

}
