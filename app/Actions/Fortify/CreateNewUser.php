<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'num_celu' => ['required'],
            'num_docu' => ['required'],
            'cod_sede' => ['required'],
            'cod_area' => ['required'],
            'tip_usua' => ['required'],
            'cod_ciud' => ['required']
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'num_celu' => $input['num_celu'],
            'num_docu' => $input['num_docu'],
            'cod_sede' => $input['cod_sede'],
            'cod_area' => $input['cod_area'],
            'tip_usua' => $input['tip_usua'],
            'cod_ciud' => $input['cod_ciud'],
        ]);
    }
}
