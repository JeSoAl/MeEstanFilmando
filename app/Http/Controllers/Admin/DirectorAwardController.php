<?php

namespace App\Http\Controllers;

use App\Exports\AwardExport;
use App\Exports\DirectorExport;
use App\Models\DirectorAward;
use App\Models\Award;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorAwardController extends Controller
{
    public function __invoke() {}

    /**
     * Display a listing of the resource.
     */
    public function index(Director $director)
    {
        $awards = DirectorAward::where('director_id', $director->id);
        return view('matriculation.index', compact('awards', 'director'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Director $director)
    {
        $awards = award::all();
        $directorAward = new DirectorAward();
        return view('matriculation.create', compact('directorAward', 'awards', 'director'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $directorAwards = DirectorAward::all();
        $error = "";
        foreach ($directorAwards as $directorAward) {
            if ($directorAward->award_id == $request->input('award_id') && $directorAward->director_id == $request->input('director_id')) {
                $error = "El director ya tiene este tipo de galardones";
            }
        }
        $director = Director::where('id', $request->input('director_id'))->first();
        if ($error == "") {
            DirectorAward::create($request->all());
            return to_route('matriculation.index', compact('director'));
        }
        else {
            $awards = Award::all();
            $directorAward = new DirectorAward();
            return view('matriculation.directorCreate', compact('directorAward', 'awards', 'director', 'error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function directorDestroy(director $director, award $award)
    {
        $directorAward = directorAward::where('award_id', $award->id)->where('director_id', $director->id)->first();
        $directorAward->delete();
        return to_route('matriculation.directorIndex', compact('director'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function awardDestroy(director $director, award $award)
    {
        $directorAward = directorAward::where('award_id', $award->id)->where('director_id', $director->id)->first();
        $directorAward->delete();
        return to_route('matriculation.awardIndex', compact('award'));
    }

    /**
     * Download the specified resource from storage.
     */
    public function awardExport(award $award)
    {
        $directors = $award->directors;
        return Excel::download(new directorExport($directors), 'EstudiantesCurso'. $award->id .'.xlsx');
    }

    /**
     * Download the specified resource from storage.
     */
    public function directorExport(director $director)
    {
        $awards = $director->awards;
        return Excel::download(new awardExport($awards), 'CursosEstudiante'. $director->id .'.xlsx');
    }
}