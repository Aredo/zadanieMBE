<?php

namespace App\Http\Controllers;

use App\Offerts;
use Illuminate\Http\Request;
use App\Services\JobOffertsServiceInterface;

class JobOffertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param JobOffertsServiceInterface $jobOffertsService
     * @return \Illuminate\Http\Response
     */
    public function index(JobOffertsServiceInterface $jobOffertsService)
    {

        $offerts = $jobOffertsService->getOfferts();


        return view('offerts.list',compact('offerts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function testStore(JobOffertsServiceInterface $jobOffertsService){

        $offerts = $jobOffertsService->getOfferts();

        foreach ($offerts as $offert) {


            Offerts::create([
                'admin_name'=>$offert->admin_name,
                'title'=>$offert->content->title

            ]);



        }

        return back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offert = Offerts::findOrFail($id);
        return view('offerts.details', compact('offert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
