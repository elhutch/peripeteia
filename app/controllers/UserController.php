<?php
/**
 * Created by PhpStorm.
 * User: Erin
 * Date: 11/15/2014
 * Time: 6:33 PM
 */

class UserController extends BaseController
{
    public function index()
    {
        if(Session::has('users'))
        {$users = Session::get('users');}
        else
        {$users = "";}
        return View::make('directories/teacherdirectory')->with('allusers', $users);

    }

    public function search()
    {
        $searchFilter = Input::all();
        $filterText = $searchFilter['filter_text'];
        $users = DB::table('users')
                   ->where($searchFilter['filter'], 'LIKE', "$filterText%")
                   ->get();
        return Redirect::action('UserController@index')
                       ->with('users', $users);
    }
}