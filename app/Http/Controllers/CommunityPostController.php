<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use App\Http\Requests\StoreCommunityPostRequest;
use App\Http\Requests\UpdateCommunityPostRequest;

class CommunityPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCommunityPostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CommunityPost $communityPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommunityPost $communityPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommunityPostRequest $request, CommunityPost $communityPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommunityPost $communityPost)
    {
        //
    }
}
