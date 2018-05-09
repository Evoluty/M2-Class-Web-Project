<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    public function newSubscription()
    {
        $email = request()->get('email');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            DB::table('newsletter')->insert([
                'email' => $email
            ]);
        }

        return redirect('/');
    }
}
