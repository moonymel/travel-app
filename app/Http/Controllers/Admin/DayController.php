<?php

namespace App\Http\Controllers\Admin;

use App\Models\Day;
use App\Http\Requests\StoreDayRequest;
use App\Http\Requests\UpdateDayRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::all();
        
        return view('admin.days.index', compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.days.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDayRequest $request)
    {
        $form_data = $request->all();
        $day = new Day();

        // upload immagine
        if($request->hasFile('preview_image')) {
            $path = Storage::disk('public')->put('days_image', $form_data['preview_image']);
            $form_data['preview_image'] = $path;
        } else {
            $form_data['preview_image'] = null;
        }
            
        $day->fill($form_data);
        $day->save();

        return redirect()->route('admin.days.index', ['day' => $day]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        return view('admin.days.show', compact('day'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDayRequest  $request
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDayRequest $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        //
    }
}
