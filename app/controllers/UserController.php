<?php
/**
 * Created by PhpStorm.
 * User: Erin
 * Date: 11/15/2014
 * Time: 6:33 PM
 */

class UserController extends BaseController {
    public function index()
    {
        return View::make('directories/teacherdirectory');
    }
} 