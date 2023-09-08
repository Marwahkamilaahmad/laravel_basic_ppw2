<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResources;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::latest()->get();
        return response()->json([UserResources::collection($data), 'Programs fetched.']);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        $mentioned = User::find($id);
        if (is_null($mentioned)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([new UserResources($mentioned)]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
