<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;

class RelationController extends Controller
{
    /**
     * one to one
     */
    public function oneToOne()
    {
        $emp = Employe::all();
        dd($emp);
        return view('backend.practice.one_to_one');
    }

    /**
     * one to many
     */
    public function oneToMany()
    {
        return view('backend.practice.one_to_many');
    }

    /**
     * many to many
     */
    public function manyToMany()
    {
        return view('backend.practice.many_to_many');
    }
}
