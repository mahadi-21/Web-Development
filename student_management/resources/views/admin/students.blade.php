@extends('layouts.admin')

@section('title', 'All Students')
@section('page-title', 'All Students')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0"><i class="fas fa-users me-2"></i> Student List</h4>
    <a href="#" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i> Add New Student
    </a>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Search students by name, email, or roll number...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">All Classes</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">Sort by</option>
                    <option value="name">Name A-Z</option>
                    <option value="class">Class</option>
                    <option value="recent">Most Recent</option>
                </select>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Roll Number</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Student 1 -->
                    <tr>
                        <td><span class="text-muted">#ST001</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=667eea&color=fff" 
                                     alt="John Doe" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>John Doe</strong>
                                    <div class="small text-muted">+1 (555) 123-4567</div>
                                </div>
                            </div>
                        </td>
                        <td>john.doe@example.com</td>
                        <td>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2">
                                Class 10
                            </span>
                        </td>
                        <td><strong>1001</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fas fa-circle me-1 small"></i> Active
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Student 2 -->
                    <tr>
                        <td><span class="text-muted">#ST002</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=f093fb&color=fff" 
                                     alt="Jane Smith" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Jane Smith</strong>
                                    <div class="small text-muted">+1 (555) 987-6543</div>
                                </div>
                            </div>
                        </td>
                        <td>jane.smith@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-2">
                                Class 11
                            </span>
                        </td>
                        <td><strong>1002</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fas fa-circle me-1 small"></i> Active
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Student 3 -->
                    <tr>
                        <td><span class="text-muted">#ST003</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Robert+Johnson&background=4facfe&color=fff" 
                                     alt="Robert Johnson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Robert Johnson</strong>
                                    <div class="small text-muted">+1 (555) 456-7890</div>
                                </div>
                            </div>
                        </td>
                        <td>robert.j@example.com</td>
                        <td>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 px-3 py-2">
                                Class 9
                            </span>
                        </td>
                        <td><strong>1003</strong></td>
                        <td>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                <i class="fas fa-circle me-1 small"></i> Pending
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Student 4 -->
                    <tr>
                        <td><span class="text-muted">#ST004</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=43e97b&color=fff" 
                                     alt="Emily Davis" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Emily Davis</strong>
                                    <div class="small text-muted">+1 (555) 234-5678</div>
                                </div>
                            </div>
                        </td>
                        <td>emily.davis@example.com</td>
                        <td>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2">
                                Class 12
                            </span>
                        </td>
                        <td><strong>1004</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fas fa-circle me-1 small"></i> Active
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Student 5 -->
                    <tr>
                        <td><span class="text-muted">#ST005</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Michael+Brown&background=ff9a9e&color=fff" 
                                     alt="Michael Brown" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Michael Brown</strong>
                                    <div class="small text-muted">+1 (555) 345-6789</div>
                                </div>
                            </div>
                        </td>
                        <td>michael.b@example.com</td>
                        <td>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 px-3 py-2">
                                Class 10
                            </span>
                        </td>
                        <td><strong>1005</strong></td>
                        <td>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                <i class="fas fa-circle me-1 small"></i> Inactive
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-danger" id="deleteModalLabel">
                    <i class="fas fa-exclamation-triangle me-2"></i> Confirm Deletion
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <p class="mb-0">Are you sure you want to delete this student? This action cannot be undone. All associated data including results and fees will be permanently removed.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete Student</button>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Total Students</h6>
                        <h3 class="mb-0 fw-bold">1,247</h3>
                    </div>
                    <div class="text-primary" style="font-size: 2rem;">
                        <i class="fas fa-users"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Active Students</h6>
                        <h3 class="mb-0 fw-bold">1,189</h3>
                    </div>
                    <div class="text-success" style="font-size: 2rem;">
                        <i class="fas fa-user-check"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">New This Month</h6>
                        <h3 class="mb-0 fw-bold">42</h3>
                    </div>
                    <div class="text-info" style="font-size: 2rem;">
                        <i class="fas fa-user-plus"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Avg. Class Size</h6>
                        <h3 class="mb-0 fw-bold">38</h3>
                    </div>
                    <div class="text-warning" style="font-size: 2rem;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection