<?php

namespace App\Http\Controllers;

use App\Actions\ValidateTestAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Test/Index');
    }

    public function validateTest(Request $request, ValidateTestAction $validateTestAction)
    {
        $validate = $validateTestAction->validateTest($request);

        if ($validate) {
            return Redirect::back()->with('success', 'Test sent');
        } else {
            return Redirect::back()->with('error', 'Test have some errors');
        }
    }
}
