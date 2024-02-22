<?php

namespace App\Services;

use App\Models\Tenant;
use App\Models\User;


class UserServise
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */
    public function index()
    {
        return $data = Tenant::with('users')->get();
    }

    public function apiindex($tenantId)
    {
        return User::with(['tenant' => function ($query) use ($tenantId) {
            $query->where('id', $tenantId);
        }])->get();
    }


}
