<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminRegister;
use App\Http\Requests\StoreAdminRegisterRequest;
use App\Http\Requests\UpdateAdminRegisterRequest;

class AdminRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRegisterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRegisterRequest $request, AdminRegister $adminRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminRegister $adminRegister)
    {
        //
    }
}
