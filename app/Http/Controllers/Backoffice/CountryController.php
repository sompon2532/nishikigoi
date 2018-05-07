<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Countries;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::active()->get();

        return view('backoffice.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = Countries::create($request->all());

        // Image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $country->addMedia($image)->toMediaCollection('country');
            }
        }

        return redirect()
            ->route('country.edit', ['country' => $country->id])
            ->with(['success' => 'Create country success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Countries $country)
    {
        $country->load('media');

        return view('backoffice.country.update', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countries $country)
    {
        $country->update($request->all());

        $remove_images = array_get($request->all(), 'remove_images', []);

        $country->getMedia('country')->filter(function($image) use ($remove_images) {
            return in_array($image->id, $remove_images);
        })->map(function($image) { $image->delete(); });

        // Image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $country->addMedia($image)->toMediaCollection('country');
            }
        }

        return redirect()
            ->route('country.edit', ['country' => $country->id])
            ->with(['success' => 'Update country success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countries $country)
    {
        $country->delete();

        return;
    }
}
