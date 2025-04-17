<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class CheckEmployeeStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();  // Get the authenticated user
        
        // Check if user is an employee and has an 'inactive' status
        $employee = Employee::where('user_id', $user->id)->first();
        
        if ($employee && $employee->status === 'inactive') {
            // Redirect to a different page if the employee status is inactive
            return redirect()->route('not-available');  // Or any other route you want
        }

        return $next($request);
    }
}
