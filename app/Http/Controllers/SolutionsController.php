<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SolutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $solutions = Solution::visible()->orderBy('name', 'asc')->get();

        return view('main.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Solution $solution
     * @return Application|Factory|Response|View
     */
    public function show(Solution $solution)
    {
        return view('main.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Solution $solution
     * @return Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Solution $solution
     * @return Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Solution $solution
     * @return Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
