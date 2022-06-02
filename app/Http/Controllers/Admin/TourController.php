<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tours = Tour::all();

        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTourRequest $request)
    {
        $tour = $request->all();

        if ($request->hasFile(key: 'imageDep')) {


            if ($image = $request->file('imageDep')) {
                $destPath = 'storage/tours/';
                $rutaImage = "dep" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destPath, $rutaImage);
                $tour['imageDep'] = $rutaImage;
            }

            if ($image = $request->file('imageDes')) {
                $destPath = 'storage/tours/';
                $rutaImage = "des" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destPath, $rutaImage);
                $tour['imageDes'] = $rutaImage;
            }
        }

        Tour::create($tour);

        return redirect()->route('admin.tours.index')->with('info', 'El Tour ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTourRequest $request, Tour $tour)
    {
        $input = $request->all();
        if ($request->hasFile(key: 'imageDep')) {


            if ($image = $request->file('imageDep')) {
                $destPath = 'storage/tours/';
                $rutaImage = "dep" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destPath, $rutaImage);
                $input['imageDep'] = $rutaImage;
            } else {
                unset($input['imageDep']);
            }
            
        }
            if ($request->hasFile(key: 'imageDes')) {
            if ($image = $request->file('imageDes')) {
                $destPath = 'storage/tours/';
                $rutaImage = "des" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destPath, $rutaImage);
                $input['imageDes'] = $rutaImage;
            } else {
                unset($input['imageDes']);
            }
          
        }
        $tour->update($input);


        return redirect()->route('admin.tours.index')->with('info', 'La ruta ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tour->delete();

        return redirect()->route('admin.tours.index')->with('info', 'La ruta ha sido eliminado con éxito');
    }
}
