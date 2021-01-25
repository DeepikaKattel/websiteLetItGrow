<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Career;
use App\Models\AdminCareer;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
Use RealRashid\SweetAlert\Facades\Alert;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminCareer = DB::table('admin_careers')->get();
        return view('career.index', compact('adminCareer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career();
        $career->name = request('name');
        $career->email = request('email');
        $career->address = request('address');
        $career->phoneNumber = request('phoneNumber');
        $career->designation_id = request('designation_id');
        if ($request->hasFile('cv')) {
            $cv = $request->cv;
            $fileName = $cv->getClientOriginalExtension();
            $destination_path = public_path("careerCV/");
            $cv->move($destination_path, $fileName);
            $career->cv = $fileName;
        }
        $career->save();
        $careerSave = $career->save();
        if ($careerSave) {
            $data = array(
                'name' => $request['name'],
                'email' => $request['email'],
                'address' =>$request['address'],
                'phoneNumber' =>$request['phoneNumber'],
                'cv'=>$request->file('cv'),
            );


            Mail::to("career@letitgrownepal.com")
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminCareer = AdminCareer::find($id);
        return view('career.edit', compact('adminCareer'));
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
