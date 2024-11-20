<?php

namespace Modules\Emailbuilder\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\EmailBuilder\App\Models\EmailTemplate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmailbuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('emailbuilder::email-builder');
    }

    public function storeJson(Request $request)
    {
        $jsonData = $request->json()->all();
        DB::table('email_templates')->insert([
            'content' => json_encode($jsonData),
            'name' => 'Template',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return response()->json(['message' => 'JSON data saved successfully!','Data'=> $jsonData] , 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emailbuilder::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('emailbuilder::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('emailbuilder::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
