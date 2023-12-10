<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
   public function index(){

    $project = Project::all();

    return response()->json($project);

   }

   public function getProjectSlug($slug){
      $project = Project::where('slug', $slug)->first();
      return response()->json($project);
  }

}
