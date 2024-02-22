<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserServise;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class UserController extends BaseController
{


    public function __construct(UserServise $UserServise)
    {
        $this->UserServise = $UserServise;
    }


    public function index(Request $request)
    {
        try {
            $tenantId = $request->header('tenant_id');
            $users = $this->UserServise->apiindex($tenantId);
            return $this->sendResponse($users, 'Users  Fetch successfully.');
        } catch (\Exception $e) {
            info($e->getMessage());
            return $this->sendError($e, 'Some thing is wrong!');

        }

    }

    public function users()
    {

        try {

            $tenants = $this->UserServise->index();
            return view('users', compact('tenants'));
        } catch (\Exception $e) {


        }

    }
}
