<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use App\Models\Pet;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEarnings = Appointment::where('appointments.status', 'Completed')
        ->join('services', 'appointments.service_id', '=', 'services.id')
        ->join('categories', 'categories.service_id', '=', 'services.id')
        ->sum('categories.price');
    
        $totalEmployees = User::where('role', 'employee')->count();
        $totalUsers = User::count();
        $totalAppointments = Appointment::count();
        $canceledAppointments = Appointment::where('status', 'Canceled')->count();
        $pendingAppointments = Appointment::where('status', 'Pending')->count();
        $completedAppointments = Appointment::where('status', 'Completed')->count();
    
        $canceledPercentage = $totalAppointments ? ($canceledAppointments / $totalAppointments) * 100 : 0;
        $pendingPercentage = $totalAppointments ? ($pendingAppointments / $totalAppointments) * 100 : 0;
        $completedPercentage = $totalAppointments ? ($completedAppointments / $totalAppointments) * 100 : 0;
    
        $totalPets = Pet::count();
        $cats = Pet::where('type', 'Cat')->count();
        $dogs = Pet::where('type', 'Dog')->count();
        $rabbits = Pet::where('type', 'Rabbit')->count();
        $birds = Pet::where('type', 'Bird')->count();
    
        $catsPercentage = $totalPets ? ($cats / $totalPets) * 100 : 0;
        $dogsPercentage = $totalPets ? ($dogs / $totalPets) * 100 : 0;
        $rabbitsPercentage = $totalPets ? ($rabbits / $totalPets) * 100 : 0;
        $birdsPercentage = $totalPets ? ($birds / $totalPets) * 100 : 0;
    
        return view('admin.index', compact(
            'canceledPercentage', 'pendingPercentage', 'completedPercentage',
            'catsPercentage', 'dogsPercentage', 'rabbitsPercentage', 'birdsPercentage',
            'totalEarnings', 'totalPets', 'totalEmployees', 'totalUsers', 'totalAppointments'
        ));
    }
    

}
