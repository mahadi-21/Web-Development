@extends('layouts.teacher')

@section('title', 'Teacher Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="opacity: 0.9;">Total Students</h6>
                        <h2 class="mb-0 fw-bold">1,247</h2>
                    </div>
                    <div style="font-size: 40px; opacity: 0.3;">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: #fff;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="opacity: 0.9;">Applications</h6>
                        <h2 class="mb-0 fw-bold">89</h2>
                    </div>
                    <div style="font-size: 40px; opacity: 0.3;">
                        <i class="fas fa-file-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: #fff;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="opacity: 0.9;">Pending Results</h6>
                        <h2 class="mb-0 fw-bold">23</h2>
                    </div>
                    <div style="font-size: 40px; opacity: 0.3;">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #fff;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="opacity: 0.9;">Total Classes</h6>
                        <h2 class="mb-0 fw-bold">12</h2>
                    </div>
                    <div style="font-size: 40px; opacity: 0.3;">
                        <i class="fas fa-layer-group"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0 fw-bold">Recent Activities</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex align-items-center border-0 px-0">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">New Student Admission</h6>
                            <small class="text-muted">John Doe admitted to Class 10 - 2 hours ago</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #f093fb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Results Published</h6>
                            <small class="text-muted">Class 9 semester results published - 5 hours ago</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #4facfe; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">New Application</h6>
                            <small class="text-muted">Emily Davis applied for Class 11 - 1 day ago</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #43e97b; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Fee Payment Received</h6>
                            <small class="text-muted">Michael Brown paid semester fee - 2 days ago</small>
                        </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #ff9a9e; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">New Teacher Added</h6>
                            <small class="text-muted">Dr. Sarah Johnson joined as Math teacher - 3 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0 fw-bold">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="" class="btn btn-primary">
                        <i class="fas fa-user-plus me-2"></i> Add New Student
                    </a>
                    <a href="" class="btn btn-outline-primary">
                        <i class="fas fa-file-alt me-2"></i> View Applications
                    </a>
                    <a href="" class="btn btn-outline-primary">
                        <i class="fas fa-chart-line me-2"></i> Manage Results
                    </a>
                    <a href="" class="btn btn-outline-primary">
                        <i class="fas fa-envelope me-2"></i> Send Results
                    </a>
                    <a href="" class="btn btn-outline-primary">
                        <i class="fas fa-layer-group me-2"></i> Manage Classes
                    </a>
                    <a href="" class="btn btn-outline-primary">
                        <i class="fas fa-dollar-sign me-2"></i> Fee Management
                    </a>
                </div>
                
                <hr class="my-4">
                
                <h6 class="fw-bold mb-3">System Status</h6>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Server Load</span>
                    <span class="badge bg-success">Normal</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Database</span>
                    <span class="badge bg-success">Online</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Last Backup</span>
                    <span class="text-muted">24 hours ago</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0 fw-bold">Class Statistics</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 9</div>
                            <div class="text-muted">42 Students</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 10</div>
                            <div class="text-muted">38 Students</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 11</div>
                            <div class="text-muted">45 Students</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 12</div>
                            <div class="text-muted">40 Students</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 8</div>
                            <div class="text-muted">35 Students</div>
                        </div>
                    </div>
                    <div class="col-md-2 col-4 text-center mb-3">
                        <div class="p-3 border rounded">
                            <div class="h5 mb-1 fw-bold">Class 7</div>
                            <div class="text-muted">32 Students</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection