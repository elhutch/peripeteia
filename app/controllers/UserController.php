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
<<<<<<< HEAD
        $searchFilter = Input::all();
        $filterText = $searchFilter['filter_text'];
        $users = DB::table('users')
                   ->where($searchFilter['filter'], 'LIKE', "$filterText%")
                   ->get();
        return Redirect::action('UserController@index')
                       ->with('users', $users);
=======
        $rules = [
            'filter_text' => array('required', 'regex:/^\s*[a-zA-Z]+\s*[a-zA-Z]*\s*$/')
        ];

        $messages = array(
            'required' => 'The search field is required',
            'regex' => 'Searches can only contain one space'
        );

        $validator = Validator::make(Input::all(), $rules, $messages);

        if($validator->fails()) {
            return Response::json(['errors' => $validator->errors()]);
        } else {
            $filterText = Input::all();
            //$searchFilter = Input::all();
            //$preFilterText = trim($searchFilter['filter_text']);
            $filterText = explode( " ", $preFilterText);

            if(sizeof($filterText) == 1) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->orWhere('last_name', 'LIKE', "$filterText[0]%")
                    ->get();
            } elseif(sizeof($filterText) == 2) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->where('last_name', 'LIKE', "$filterText[1]%")
                    ->get();
            }

            return Response::json($users);

        }



>>>>>>> 929af2ce36cd7cd3ce2a20542974995d7501eacd
    }
}