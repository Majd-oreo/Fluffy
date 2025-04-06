<?php
namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Service;
use App\Models\Employee;

use Illuminate\Support\Facades\Auth;


class ReviewEmController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index(Request $request)
    {
        // Get the authenticated employee's record
        $employee = Employee::where('user_id', Auth::id())->first();
    
        if (!$employee) {
            abort(403, 'Unauthorized action.');
        }
    
        // Start query with only reviews related to this employee's service
        $query = Review::where('service_id', $employee->service_id);
    
        // Optional filters
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id);
        }
    
        if ($request->has('rating') && !empty($request->rating)) {
            $query->where('rating', $request->rating);
        }
    
        // Only get the reviews for that service
        $reviews = $query->paginate(8);
    
        // For filters
        $users = User::all();
        $services = Service::where('id', $employee->service_id)->get(); // Only the employee's service
    
        return view('employee.reviews.index', compact('reviews', 'users', 'services'));
    }

    /**
     * Display the specified review.
     */
    public function show(Review $review)
    {
        $employee = Employee::where('user_id', Auth::id())->first();
    
        if (!$employee || $review->service_id !== $employee->service_id) {
            abort(403, 'Unauthorized action.');
        }
    
        return view('employee.reviews.show', compact('review'));
    }

    /**
     * Remove the specified review from storage.
     */

}
