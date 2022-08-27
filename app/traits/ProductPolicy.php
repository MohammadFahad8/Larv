<?php
namespace App\Traits;
use Illuminate\Support\Facades\Gate;

trait ProductPolicy {
    public function authorize_delete($car) {
    if(!Gate::allows('delete-car',$car)) {
            abort(403);
        }
    }
}
?>