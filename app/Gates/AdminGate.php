<?php

namespace App\Gates;

class AdminGate {

    public function check_admin($user){
        // dd($user);
            if ($user->email === 'akash.bigm@gmail.com') {
                return true;
            }{
                return false;
            }
    }
}

?>