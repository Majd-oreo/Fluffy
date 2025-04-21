<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .bg-gradient-primary {
    background-color: #FF5B2E!important; /* Use your desired color */
    background-image: none !important;
}

.pagination .page-link {
        color: #ff5b2e;
        border: 1px solid #ddd;
    }

    .pagination .page-link:hover {
        background-color: #ff5b2e;
        color: white;
    }

    .pagination .page-item.active .page-link {
        background-color: #ff5b2e;
        border-color: #ff5b2e;
        color: white;
    }









    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              
                <div class="sidebar-brand-text mx-4"> 
                 {{ optional(optional(Auth::user()->employee)->service)->name ?? 'Service Not Assigned' }}
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
            <a class="nav-link" href="{{ route('employee.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
          

          
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('employee.pets.index') }}" >
                <i class="fa fa-paw" aria-hidden="true"></i>
                <span>Pets</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
          

            <!-- Nav Item - Tables -->
          
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('employee.blogs.index') }}" >
                <i class="fa fa-th" aria-hidden="true"></i>
                <span>Blogs</span>
                </a>
                
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee.appointments.index') }}">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span>Appointments</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee.reviews.index') }}">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <span>Reviews</span></a>
            </li>
      
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <img src="{{ asset(path: 'assets/images/fluffy-logo.png')}}" style=" height: 100%;"> 


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

<!-- Nav Item - Alerts -->
@php
    $notifications = Auth::user()->unreadNotifications;
    
@endphp

<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        @if ($notifications->count())
            <span class="badge badge-danger badge-counter">{{ $notifications->count() }}</span>
        @endif
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="alertsDropdown" style="min-width: 300px;">
        <h6 class="dropdown-header">Notifications</h6>

        @forelse ($notifications as $notification)
            <li>
                <a class="dropdown-item d-flex align-items-center" href="{{ route('employee.appointments.index') }}">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-calendar-check text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">{{ $notification->created_at->diffForHumans() }}</div>
                        <span class="font-weight-bold">{{ $notification->data['message'] }}</span>
                    </div>
                </a>
            </li>
        @empty
            <li class="dropdown-item text-center small text-gray-500">No new notifications</li>
        @endforelse
    </ul>
</li>


                        <!-- Nav Item - Messages -->
                        <div class="user-top dropdown">
    <button class="btn dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('assets/images/default.png') }}" alt="User Image" class="rounded-circle" width="40" height="40">
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
        @auth
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        @else
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
        @endauth
    </ul>
</div>
                        <!-- Nav Item - User Information -->
              

                    </ul>

                </nav>