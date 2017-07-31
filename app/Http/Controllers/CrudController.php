<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function index()
    {
        echo "Index method of Crud class";
    }
    
    public function create()
    {
        echo "Create method of Crud class";
    }
    
    public function store(Request $request)
    {
        echo "Store method of Crud class";
    }
    
    public function update(Request $request)
    {
        echo "Update method of Crud class";
    }
    
    public function show($id)
    {
        echo "Show method of Crud class";
    }
    
    public function edit($id)
    {
        echo "Edit method of Crud class";
    }
    
    public function destroy($id)
    {
        echo "Destory method of Crud class";
    }
}
