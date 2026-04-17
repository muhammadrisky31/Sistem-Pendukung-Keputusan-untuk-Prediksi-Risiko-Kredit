<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
});


Route::get('/prediksi', function () {
    return view('predict');
})->name('prediksi');

Route::get('/dashboard', function () {
    return view('dashboard');
});
// ================= REGISTER =================

Route::get('/register', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function (Request $request) {

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/users');
});

Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ================= LOGIN TANPA AUTH =================

// FORM LOGIN
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// PROSES LOGIN
Route::post('/login', function (Request $request) {

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'Email tidak ditemukan');
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Password salah');
    }

    // SIMPAN SESSION
    session([
        'user_id' => $user->id,
        'user_name' => $user->name
    ]);

    return redirect('/users');
});

// LOGOUT
Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});


// ================= TAMPIL DATA =================

Route::get('/users', function () {

    // PROTEKSI LOGIN
    if (!session('user_id')) {
        return redirect('/login');
    }

    $users = User::all();
    return view('users', compact('users'));
});