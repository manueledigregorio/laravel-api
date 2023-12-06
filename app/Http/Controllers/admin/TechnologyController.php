<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tecnology;
use App\Http\Requests\TechonologyRequest;
class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Tecnology::orderBy('id')->paginate(10);
        return view('admin.technologies.index', compact('technologies'));
    }

    public function technologyProjects(Tecnology $tecnology){

        return view('admin.technologies.projects-tecnology', compact('tecnology'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TechonologyRequest $request)
    {
        $form_data= $request->all();

         // avendo creato la proprità $fillable (coin tutti i campi), posso usare il metodo fill()
        // lo slug, on essendo presente nel form lo devo in ogni caso creare
        $new_technology = new Tecnology();

        $form_data['slug'] = Helper::generateSlug($form_data['name'], Tecnology::class);
        $new_technology->fill($form_data);
        // lo salvo nel db
        $new_technology->save();
        return redirect()->route('admin.technologies.create',$new_technology->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnology $technology)
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
    public function destroy(Tecnology $technology)
    {
        $technology->delete();

        return redirect()->route('admin.technologies.index')->with('deleted', "La pasta $technology->name è stata eliminata correttamente");
    }
}
