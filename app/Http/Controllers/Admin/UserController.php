<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UsersService;

class UserController extends Controller
{
    private $usersService;

    public function __construct(UsersService $usersService) {
        $this->usersService = $usersService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = $this->usersService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.users.index', compact('users', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request = new Request;
        $user = new User();
        return view('admin.users.create', compact('user', 'request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('password_confirmation') && $request->input('password') == $request->input('password_confirmation')) {
            User::create();
            return to_route('admin.users.index');
        }
        else {
            return view('admin.users.create', compact('user', 'request'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        User::firstWhere('id', $id) or abort(404);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update();

        return to_route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.users.index');
    }
}
