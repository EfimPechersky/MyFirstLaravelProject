<?php
use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    /**
     * Показать профиль конкретного пользователя.
     */
    public function show(string $id): View
    {
        alert($id);
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
?>