<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Catagory;
use App\Models\Track;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class budgetcontroller extends Controller
{
    //
    public function store_login(User $user)
    {
        $users = $user->get();
        //validate
        $attributes = request()->validate([

            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)]
        ]);

        //attempt
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'email or password is incorrect'
            ]);
        }

        request()->session()->regenerate();


        foreach ($users as $use) {
            if ($use['email'] == request('email')) {
                $user = [
                    'first_name' => $use['first_name'],
                    'last_name' => $use['last_name'],
                    'email' => request('email'),
                    'password' => request('password')
                ];
                session(['user' => $user]);
                return view('home', ['user' => $user]);
            }
        }
    }
    public function home(User $users)
    {
        $user = session('user');
        return view('home', ['user' => $user]);
    }
    public function budget()
    {
        return view('budget/budgets');
    }
    public function create_budget()
    {
        return view('budget/create');
    }
    public function store_budget()
    {
        request()->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'balance' => 'required|numeric',
            'saving_goal' => 'required|numeric'


        ]);
        Budget::create([

            'user_id' => Auth::user()->id,
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'balance' => request('balance'),
            'saving_goal' => request('saving_goal')

        ]);
        return redirect('/show');
    }
    public function show_budget(Budget $budget, User $user)
    {
        $budget->load('user');
        $budgets = $budget::with('user')->latest()->simplePaginate(1);
        $users = $user->latest()->simplePaginate(1);
        foreach ($budgets as $b) {
            if ($b->user_id != Auth::user()->id) {
                abort(403);
            }
        }

        return view('budget/show', ['budget' => $budgets, 'user' => $users]);
    }
    public function edit_budget(Budget $budget, User $user)
    {
        $users = $user->latest()->simplePaginate(1);
        $budget->load('user');
        $budgets = $budget::with('user')->latest()->simplePaginate(1);
        foreach ($budgets as $b) {
            if ($b->user_id != Auth::user()->id) {
                abort(403);
            }
        }
        return view('budget/edit', ['budget' => $budgets, 'user' => $users]);
    }
    public function update_budget(Budget $budget, User $user)
    {
        $users = $user->latest()->simplePaginate(1);
        $budgets = Budget::latest()->simplePaginate(1);
        //validate

        request(null)->validate(
            [
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'balance' => 'required|numeric',
                'saving_goal' => 'required|numeric'
            ]
        );
        foreach ($budgets as $budget) {
            $budget->update([
                'start_date' => request('start_date'),
                'end_date' => request('end_date'),
                'balance' => request('balance'),
                'saving_goal' => request('saving_goal')
            ]);
        }
        return view('budget/show', ['budget' => $budgets, 'user' => $users]);
    }
    public function track(Budget $budget, Catagory $catagory)
    {
        $budget = Budget::latest()->simplePaginate(1);
        $catagory = Catagory::latest()->simplePaginate(1);

        return view('track', ['catagory' => $catagory, 'budget' => $budget]);
    }
    public function catagory()
    {
        return view('catagory');
    }
    public function about()
    {
        return view('about');
    }
    public function signup()
    {
        return view('auth.signup');
    }
    public function login()
    {
        return view('auth.loginuser');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function store_signup(User $user)
    {


        //validate
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8), 'confirmed']
        ]);
        //create
        $user = User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
        ]);

        Auth::login($user);

        $users = User::latest()->simplePaginate(1);
        foreach ($users as $use) {

            $user = [
                'first_name' => $use['first_name'],
                'last_name' => $use['last_name'],
                'email' => request('email'),
                'password' => request('password')
            ];
            session(['user' => $user]);
            return view('home', ['user' => $user]);
        }
    }
    public function store_expense(Catagory $catagory, Budget $budgets, User $users)
    {
        $val1 = request('value1');
        $val2 = request('value2');
        $val3 = request('value3');
        $val4 = request('value4');
        $total = $val1 + $val2 + $val3 + $val4;
        $type = [request('rent'), request('food'), request('transport'), request('entertainment')];


        $catagory = Catagory::create([

            'track_id' => '1',
            'Todays_date' => date('d/m/y'),
            'catagory_type' => $type,
            'expense_value' =>  $total,



        ]);
        $budgets = Budget::latest()->simplePaginate(1);
        $user = $users::latest()->simplePaginate(1);
        $catagory = Catagory::latest()->simplePaginate(1);


        return view('/track', ['catagory' => $catagory, 'budget' => $budgets, 'user' => $user]);
    }
    public function store_track(Track $track, Budget $budgets, Catagory $catagory, User $users)
    {
        $catagory = Catagory::latest()->simplePaginate(1);
        $budgets = Budget::latest()->simplePaginate(1);
        $user = $users::latest()->simplePaginate(1);

        foreach ($budgets as $bud) {
            $balance = $bud['balance'];
        }
        foreach ($catagory as $cat) {
            $expense = $cat['expense_value'];
        }
        $remain = $balance - $expense;
        $track = Track::create([

            'date' => date('d/m/y'),
            'income' => $balance,
            'expense' => $expense,
            'budget_id' => '1',

        ]);

        Budget::create([

            'user_id' => Auth::user()->id,
            'start_date' => $bud['start_date'],
            'end_date' => $bud['end_date'],
            'balance' => $remain,
            'saving_goal' => $bud['saving_goal']

        ]);




        return view('budget/show', ['catagory' => $catagory, 'budget' => $budgets, 'track' => $track, 'user' => $user]);
    }


    public function home_store(User $user)
    {
        $users = $user->get();
        return view('home', ['user' => $users]);
    }
}
