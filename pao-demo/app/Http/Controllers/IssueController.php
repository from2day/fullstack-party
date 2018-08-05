<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\GitHub\GitHubManager;
// use GrahamCampbell\GitHub\Facades\GitHub;

class IssueController extends Controller
{

    protected $github;

    public function __construct(GitHubManager $github)
    {
        $this->github = $github;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = $this->github->issues()->all(
            config('github.project.username'), 
            config('github.project.reponame')
        );
        // dd($issues);
        return view('issues.index')->with('issues', $issues);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $issue = $this->github->issues()->show(config('github.project.username'), config('github.project.reponame'), $id);
        if (!$issue)
            return abort(404, "GitHub has no issue with number: $id");

        return view('issues.show')->with('issue', $issue);

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
