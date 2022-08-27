<?php

namespace App\Http\Controllers;

use App\traits\ProductPolicy;
use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    use ProductPolicy;
    //
    function index() {
        $users = User::latest()->get();
        return $users;
    }

    public function destroy($id,Cars $car) {
        $car = Cars::find($id);
       $this->authorize_delete($car);
        Session::flash("error","Product Deleted");
        return redirect('/');
    }
}
