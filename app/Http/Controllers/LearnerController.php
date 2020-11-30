<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index(){
        $learners = Learner::join('users', 'users.id', '=', 'learners.user_id')
                        ->select('users.lname', 'users.fname', 'learners.*')->orderByRaw('lname', 'fname')->get();
        return view('learners.index', ['learners'=>$learners]);
    }

    public function create(){
        return view('learners.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id'=>'required|numeric',
            'level'=>'required',
            'status'=>'required'
        ]);

        Learner::create($request->all());

        return redirect('/learners')->with('info', 'A new learner has been created');
    }

    public function edit($id){
        $learner = Learner::find($id);
        return view('learners.edit', ['learner'=>$learner]);
    }

    public function update(Request $request, $id){
        $learner = Learner::find($id);
        $learner->update($request->all());

        return redirect('/learners')->with('info', "The record of " . $learner->user->fname . " has been updated.");
    }

    
}
