<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AssginContoller extends Controller
{

    public function assgin()
    {
        $users = User::all();
       foreach ($users as $user) {
           $number = rand(1, 5);

           $this->random_tenant($number, $user->id);
        }

    }

    public function random_tenant($number, $u)
    {

        $outputarray = [];
        for ($a = 0; $a <= $number; $a++) {
            $tenant = new Tenant();
            $tenant->tenant_hash = Str::uuid();
            $tenant->user_id = $u;
            $tenant->save();

        }


    }
    public function store(Request $request)
    {
        $testing = new Testing();


       $supplier= $request->Supplier;
        foreach ($supplier as $key=>$item)
        {
            $testing->Supplier = $request->Supplier[$key];
            $testing->Reference_no = $request->Reference_no[$key];
            $testing->Purchase_date = $request->Purchase_date[$key];
            $testing->save();
        }

        return redirect('testing')->with('success', 'Testing records created successfully!');
    }


}
}
