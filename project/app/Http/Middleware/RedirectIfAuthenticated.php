namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guard = $guards[0] ?? 'web';

        if (Auth::guard($guard)->check()) {
            return $guard === 'guest' 
                ? redirect('/guest/dashboard') 
                : redirect('/dashboard');
        }

        return $next($request);
    }
}
