<?php
namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Employee;

use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
class DashboardEmController extends Controller
{
    public function index()
{
    $user = Auth::user();

    // Get the employee record for this user
    $employee = Employee::where('user_id', $user->id)->first();

    // Check if employee exists and is linked to a service
    if (!$employee) {
        return redirect()->back()->with('error', 'Employee profile not found.');
    }

    $employeeServiceId = $employee->service_id;

    // Get appointments related to that service
    $appointments = Appointment::where('service_id', $employeeServiceId)->get();

    $totalAppointments = $appointments->count();
    $canceledAppointments = $appointments->where('status', 'Canceled')->count();
    $pendingAppointments = $appointments->where('status', 'Pending')->count();
    $completedAppointments = $appointments->where('status', 'Completed')->count();

    $canceledPercentage = $totalAppointments ? ($canceledAppointments / $totalAppointments) * 100 : 0;
    $pendingPercentage = $totalAppointments ? ($pendingAppointments / $totalAppointments) * 100 : 0;
    $completedPercentage = $totalAppointments ? ($completedAppointments / $totalAppointments) * 100 : 0;

    // Salary
    $salary = $employee->salary ?? 0;

    // Pets statistics
    $totalPets = Pet::count();
    $catsPercentage = $totalPets ? (Pet::where('type', 'cat')->count() / $totalPets) * 100 : 0;
    $dogsPercentage = $totalPets ? (Pet::where('type', 'dog')->count() / $totalPets) * 100 : 0;
    $rabbitsPercentage = $totalPets ? (Pet::where('type', 'rabbit')->count() / $totalPets) * 100 : 0;
    $birdsPercentage = $totalPets ? (Pet::where('type', 'bird')->count() / $totalPets) * 100 : 0;

    // Working days since user creation
    $workingDays = now()->diffInDays($user->created_at);

    return view('employee.index', compact(
        'salary',
        'totalAppointments',
        'canceledPercentage',
        'pendingPercentage',
        'completedPercentage',
        'totalPets',
        'catsPercentage',
        'dogsPercentage',
        'rabbitsPercentage',
        'birdsPercentage',
        'workingDays'
    ));
}
}
