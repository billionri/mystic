<?php

namespace Mystic\Listusers\Controllers;
use Mystic\Listusers\Models\Listusers;
use Mystic\Reports\Models\Reports;

class ListusersController extends \BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */


    public function mystic_list()
    {
        $table = \DB::table('users');

        if (\Input::has('search')) {
            $table->where(function ($query) {
                $query->where('id', '=', \Input::get('search'))->orWhere('title', 'LIKE', '%' . \Input::get('search') . '%');
            });
        }

        $total = $table->count();

        $data = $table->skip(\Input::get('offset', 0))->take(\Input::get('limit', 10))->orderBy(\Input::get('sort', 'id'), \Input::get('order', 'asc'))->get();

        return \Response::json(array(
            'total' => $total,
            'data' => $data
        ));
    }

    public function edit($id)
    {
        $listusers_part = Listusers::find($id);
        return \View::make('dashboard::pages.forms.general', array('listusers_part' => $listusers_part));
    }

    public function update($user_id)
    {
    $input = \Input::all();
        $mysedit = Listusers::find($user_id);
        $mysedit->feedback=strip_tags($input['feedback']);
        $mysedit->save();
        return \Redirect::route('pages.layout.data')->with('message', array('type' => 'success', 'text' => 'User Updated Successfully.'));
    }
    public function downloadExcelUsersList()
    {
        $excel_user_list = new Reports();
        $excel_user_list->downloadExcelUsersList();

    }
}
