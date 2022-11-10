<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Categorie;

class RelationController extends Controller
{
    /**
     * one to one
     */
    public function oneToOne()
    {
        //get employee id then return only one data department table which on mathches
        $emp = Employe::find(27)->department;

        //return two table data 
        $emp1 = Employe::with('department')->get();
        
        foreach ($emp1 as $val) {
            echo 'Employee Name: '.$val->ename.'</br>';
            echo 'Department Name: '.$val->department->dname;
            echo '<hr></br>';
            // echo '<pre>';
            // print_r($val);
            // echo '</pre>';
            
        }
        exit;
        // dd($emp1);


        return view('backend.practice.one_to_one');
    }

    /**
     * one to many
     */
    public function oneToMany()
    {
        $emp = Categorie::find(1)->subcategorie;

        //return two table data 
        $emp1 = Categorie::with('subcategorie')->get();
        // dd($emp1);
        foreach ($emp1 as $cat) {
           echo 'Category Name: '.$cat->en_name;
            foreach ($cat->subcategorie as $sub) {
                echo '<br>';
                echo 'SubCategory Name: '.$sub->en_name;
            }
            echo '<hr></br>';    
        }
        exit;
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
