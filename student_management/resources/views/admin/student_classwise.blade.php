@extends('layouts.admin')

@section('title', 'Class Wise Students')
@section('page-title', 'Class Wise Students')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0"><i class="fas fa-layer-group me-2"></i> Students by Class</h4>
    <div class="d-flex gap-2">
        <select class="form-select form-select-sm" style="width: auto;">
            <option value="">Jump to Class...</option>
            <option value="class9">Class 9</option>
            <option value="class10">Class 10</option>
            <option value="class11">Class 11</option>
            <option value="class12">Class 12</option>
        </select>
        <button class="btn btn-sm btn-outline-primary">
            <i class="fas fa-print me-1"></i> Print All
        </button>
    </div>
</div>

<!-- Class Statistics -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Class 9</h6>
                        <h3 class="mb-0 fw-bold">42</h3>
                        <small class="text-muted">Students</small>
                    </div>
                    <div class="text-primary" style="font-size: 2rem;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Class 10</h6>
                        <h3 class="mb-0 fw-bold">38</h3>
                        <small class="text-muted">Students</small>
                    </div>
                    <div class="text-success" style="font-size: 2rem;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Class 11</h6>
                        <h3 class="mb-0 fw-bold">45</h3>
                        <small class="text-muted">Students</small>
                    </div>
                    <div class="text-info" style="font-size: 2rem;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Class 12</h6>
                        <h3 class="mb-0 fw-bold">40</h3>
                        <small class="text-muted">Students</small>
                    </div>
                    <div class="text-warning" style="font-size: 2rem;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Class 9 Students -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff;">
        <h5 class="mb-0">
            <i class="fas fa-users me-2"></i>
            Class 9 (42 Students)
        </h5>
        <button class="btn btn-sm btn-light">
            <i class="fas fa-download me-1"></i> Export
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Roll Number</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-muted">#ST00901</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Robert+Johnson&background=667eea&color=fff" 
                                     alt="Robert Johnson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Robert Johnson</strong>
                                    <div class="small text-muted">robert.j@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">901</span></td>
                        <td>+1 (555) 456-7890</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST00902</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Miller&background=f093fb&color=fff" 
                                     alt="Sarah Miller" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Sarah Miller</strong>
                                    <div class="small text-muted">sarah.m@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">902</span></td>
                        <td>+1 (555) 234-5678</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST00903</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=David+Wilson&background=4facfe&color=fff" 
                                     alt="David Wilson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>David Wilson</strong>
                                    <div class="small text-muted">david.w@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">903</span></td>
                        <td>+1 (555) 345-6789</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-3 text-center">
            <small class="text-muted">Showing 3 of 42 students. <a href="#">View all Class 9 students</a></small>
        </div>
    </div>
</div>

<!-- Class 10 Students -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: #fff;">
        <h5 class="mb-0">
            <i class="fas fa-users me-2"></i>
            Class 10 (38 Students)
        </h5>
        <button class="btn btn-sm btn-light">
            <i class="fas fa-download me-1"></i> Export
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Roll Number</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-muted">#ST01001</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=f093fb&color=fff" 
                                     alt="John Doe" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>John Doe</strong>
                                    <div class="small text-muted">john.doe@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info px-3 py-1">1001</span></td>
                        <td>+1 (555) 123-4567</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01002</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Michael+Brown&background=f5576c&color=fff" 
                                     alt="Michael Brown" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Michael Brown</strong>
                                    <div class="small text-muted">michael.b@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info px-3 py-1">1002</span></td>
                        <td>+1 (555) 345-6789</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01003</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Lisa+Anderson&background=ff9a9e&color=fff" 
                                     alt="Lisa Anderson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Lisa Anderson</strong>
                                    <div class="small text-muted">lisa.a@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info px-3 py-1">1003</span></td>
                        <td>+1 (555) 456-7890</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-3 text-center">
            <small class="text-muted">Showing 3 of 38 students. <a href="#">View all Class 10 students</a></small>
        </div>
    </div>
</div>

<!-- Class 11 Students -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: #fff;">
        <h5 class="mb-0">
            <i class="fas fa-users me-2"></i>
            Class 11 (45 Students)
        </h5>
        <button class="btn btn-sm btn-light">
            <i class="fas fa-download me-1"></i> Export
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Roll Number</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-muted">#ST01101</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=4facfe&color=fff" 
                                     alt="Jane Smith" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Jane Smith</strong>
                                    <div class="small text-muted">jane.smith@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">1101</span></td>
                        <td>+1 (555) 987-6543</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01102</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Thomas+Lee&background=00f2fe&color=fff" 
                                     alt="Thomas Lee" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Thomas Lee</strong>
                                    <div class="small text-muted">thomas.l@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">1102</span></td>
                        <td>+1 (555) 234-5678</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01103</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Jennifer+Taylor&background=667eea&color=fff" 
                                     alt="Jennifer Taylor" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Jennifer Taylor</strong>
                                    <div class="small text-muted">jennifer.t@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary px-3 py-1">1103</span></td>
                        <td>+1 (555) 345-6789</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-3 text-center">
            <small class="text-muted">Showing 3 of 45 students. <a href="#">View all Class 11 students</a></small>
        </div>
    </div>
</div>

<!-- Class 12 Students -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: #fff;">
        <h5 class="mb-0">
            <i class="fas fa-users me-2"></i>
            Class 12 (40 Students)
        </h5>
        <button class="btn btn-sm btn-light">
            <i class="fas fa-download me-1"></i> Export
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Roll Number</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="text-muted">#ST01201</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=43e97b&color=fff" 
                                     alt="Emily Davis" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Emily Davis</strong>
                                    <div class="small text-muted">emily.davis@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success px-3 py-1">1201</span></td>
                        <td>+1 (555) 234-5678</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01202</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=William+Clark&background=38f9d7&color=fff" 
                                     alt="William Clark" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>William Clark</strong>
                                    <div class="small text-muted">william.c@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success px-3 py-1">1202</span></td>
                        <td>+1 (555) 456-7890</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="text-muted">#ST01203</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Olivia+Martinez&background=ff9a9e&color=fff" 
                                     alt="Olivia Martinez" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Olivia Martinez</strong>
                                    <div class="small text-muted">olivia.m@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success px-3 py-1">1203</span></td>
                        <td>+1 (555) 567-8901</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-3 text-center">
            <small class="text-muted">Showing 3 of 40 students. <a href="#">View all Class 12 students</a></small>
        </div>
    </div>
</div>
@endsection