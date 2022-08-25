<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use App\Models\Categorie;
use App\Models\Register;

class CategoriePolicy
{
    use HandlesAuthorization;

    public function isAdmin(Register $register){

       return $register->email === 'akash.bigm@gmail.com';
        
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Register $register)
    {
        return $register->email === 'akash.bigm@gmail.com'
        ? Response::allow()
        : Response::deny('you do not access this action');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Register  $register
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Register $register, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Register $register)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Register  $register
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Register $register, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Register  $register
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Register $register, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Register  $register
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Register $register, Categorie $categorie)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Register  $register
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Register $register, Categorie $categorie)
    {
        //
    }
}
