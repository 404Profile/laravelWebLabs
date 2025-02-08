<?php

namespace App\Actions;

use Illuminate\Http\Request;

class ValidateTestAction
{
    public function validateTest(Request $request): bool
    {
        if (!preg_match("/^[А-Яа-яёЁ]+\s[А-Яа-яёЁ]+\s[А-Яа-яёЁ]+$/u", $request->name)) {
            return false;
        }

        if ($request->elementEcosystem != 4) {
            return false;
        }

        if (!in_array($request->eating, ["Человек", "человек"])) {
            return false;
        }

        if ($request->wolf !== true) {
            return false;
        }

        if ($request->rabbit !== false) {
            return false;
        }

        if ($request->bear !== true) {
            return false;
        }

        return true;
    }
}
