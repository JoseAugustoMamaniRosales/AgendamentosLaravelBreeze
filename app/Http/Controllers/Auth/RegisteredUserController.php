<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Estado;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'endereco' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'cep' => ['required', 'string', 'max:9'],
            'cidade' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string'],
            'telefone'=> ['required', 'string', 'max:14'],
            'celular' => ['required', 'string', 'max:15']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'endereco' => $request->endereco,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'telefone' => $request->telefone,
            'celular' => $request->celular
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
