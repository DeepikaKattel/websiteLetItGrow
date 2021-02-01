<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
Use RealRashid\SweetAlert\Facades\Alert;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        $vacancy->name = request('name');
        $vacancy->email = request('email');
        $vacancy->address = request('address');
        $vacancy->phoneNumber = request('phoneNumber');

        if ($request->hasFile('cv')) {
            $cv = $request->cv;
            $fileName = $cv->getClientOriginalExtension();
            $destination_path = public_path("vacancyCV/");
            $cv->move($destination_path, $fileName);
            $vacancy->cv = $fileName;
        }
        $vacancy->save();
        $vacancySave = $vacancy->save();
        if ($vacancySave) {
            $data = array(
                'name' => $request['name'],
                'email' => $request['email'],
                'address' =>$request['address'],
                'phoneNumber' =>$request['phoneNumber'],
                'cv'=>$request->file('cv'),
            );


            Mail::to("vacancy@letitgrownepal.com")
                ->send(new SendMail($data));
            // ->attach($data['cv']->getRealPath(),array(
            //     'as' => $data['cv']->getClientOriginalName(),
            //     'mime' => $data['cv']->getMimeType()
            // )
            // );
            Alert::success('Thank you', 'We will contact you soon');
            return redirect()->back();
        } else {
            Alert::error('Oops', 'There is an error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
