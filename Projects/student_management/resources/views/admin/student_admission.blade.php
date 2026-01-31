@extends('layouts.admin')

@section('title', 'Admission Applications')
@section('page-title', 'Admission Applications')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0"><i class="fas fa-file-alt me-2"></i> All Applications</h4>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-filter me-2"></i> Filter
        </button>
        <button class="btn btn-primary">
            <i class="fas fa-clipboard-check me-2"></i> Publish Results
        </button>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Total Applications</h6>
                        <h3 class="mb-0 fw-bold">89</h3>
                    </div>
                    <div class="text-primary" style="font-size: 2rem;">
                        <i class="fas fa-file-alt"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Pending Review</h6>
                        <h3 class="mb-0 fw-bold">42</h3>
                    </div>
                    <div class="text-warning" style="font-size: 2rem;">
                        <i class="fas fa-clock"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Approved</h6>
                        <h3 class="mb-0 fw-bold">35</h3>
                    </div>
                    <div class="text-success" style="font-size: 2rem;">
                        <i class="fas fa-check-circle"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Rejected</h6>
                        <h3 class="mb-0 fw-bold">12</h3>
                    </div>
                    <div class="text-danger" style="font-size: 2rem;">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filter Bar -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-3">
                <label class="form-label small fw-bold">Status</label>
                <select class="form-select form-select-sm">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Class</label>
                <select class="form-select form-select-sm">
                    <option value="">All Classes</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Date Range</label>
                <select class="form-select form-select-sm">
                    <option value="">All Time</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-sm btn-primary w-100">
                    <i class="fas fa-search me-1"></i> Apply Filters
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Application ID</th>
                        <th>Applicant Name</th>
                        <th>Email</th>
                        <th>Applied For</th>
                        <th>Applied Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Application 1 -->
                    <tr>
                        <td><strong class="text-primary">#APP001</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Emma+Wilson&background=f093fb&color=fff" 
                                     alt="Emma Wilson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Emma Wilson</strong>
                                    <div class="small text-muted">+1 (555) 123-4567</div>
                                </div>
                            </div>
                        </td>
                        <td>emma.w@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-1">
                                Class 10
                            </span>
                        </td>
                        <td>2024-01-15</td>
                        <td>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                <i class="fas fa-clock me-1 small"></i> Pending
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-success">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Application 2 -->
                    <tr>
                        <td><strong class="text-primary">#APP002</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=James+Miller&background=4facfe&color=fff" 
                                     alt="James Miller" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>James Miller</strong>
                                    <div class="small text-muted">+1 (555) 987-6543</div>
                                </div>
                            </div>
                        </td>
                        <td>james.m@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-1">
                                Class 11
                            </span>
                        </td>
                        <td>2024-01-14</td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fas fa-check me-1 small"></i> Approved
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Application 3 -->
                    <tr>
                        <td><strong class="text-primary">#APP003</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Sophia+Chen&background=43e97b&color=fff" 
                                     alt="Sophia Chen" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Sophia Chen</strong>
                                    <div class="small text-muted">+1 (555) 456-7890</div>
                                </div>
                            </div>
                        </td>
                        <td>sophia.c@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-1">
                                Class 9
                            </span>
                        </td>
                        <td>2024-01-13</td>
                        <td>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                <i class="fas fa-times me-1 small"></i> Rejected
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-warning">
                                    <i class="fas fa-redo"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Application 4 -->
                    <tr>
                        <td><strong class="text-primary">#APP004</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Daniel+Garcia&background=667eea&color=fff" 
                                     alt="Daniel Garcia" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Daniel Garcia</strong>
                                    <div class="small text-muted">+1 (555) 234-5678</div>
                                </div>
                            </div>
                        </td>
                        <td>daniel.g@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-1">
                                Class 12
                            </span>
                        </td>
                        <td>2024-01-12</td>
                        <td>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                <i class="fas fa-clock me-1 small"></i> Pending
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-success">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Application 5 -->
                    <tr>
                        <td><strong class="text-primary">#APP005</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Olivia+Taylor&background=ff9a9e&color=fff" 
                                     alt="Olivia Taylor" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Olivia Taylor</strong>
                                    <div class="small text-muted">+1 (555) 345-6789</div>
                                </div>
                            </div>
                        </td>
                        <td>olivia.t@example.com</td>
                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-1">
                                Class 10
                            </span>
                        </td>
                        <td>2024-01-10</td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fas fa-check me-1 small"></i> Approved
                            </span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-user-plus"></i>
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
<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- View Application Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="viewModalLabel">
                    <i class="fas fa-file-alt me-2"></i> Application Details - #APP001
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h5>Emma Wilson</h5>
                        <p class="text-muted mb-1">Applied for: <strong>Class 10</strong></p>
                        <p class="text-muted mb-1">Date: <strong>January 15, 2024</strong></p>
                        <p class="text-muted mb-1">Status: <span class="badge bg-warning">Pending Review</span></p>
                    </div>
                    <div class="col-md-4 text-end">
                        <img src="https://ui-avatars.com/api/?name=Emma+Wilson&background=f093fb&color=fff&size=80" 
                             alt="Emma Wilson" 
                             class="rounded-circle">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold mb-3">Personal Information</h6>
                        <p><strong>Email:</strong> emma.w@example.com</p>
                        <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                        <p><strong>Date of Birth:</strong> March 15, 2008</p>
                        <p><strong>Gender:</strong> Female</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold mb-3">Academic Information</h6>
                        <p><strong>Previous School:</strong> Central High School</p>
                        <p><strong>Previous Grade:</strong> Class 9</p>
                        <p><strong>Average Marks:</strong> 88%</p>
                        <p><strong>Extracurricular:</strong> Basketball, Music</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h6 class="fw-bold mb-3">Guardian Information</h6>
                    <p><strong>Name:</strong> Michael Wilson</p>
                    <p><strong>Relationship:</strong> Father</p>
                    <p><strong>Phone:</strong> +1 (555) 987-6543</p>
                    <p><strong>Email:</strong> michael.w@example.com</p>
                </div>
                
                <div class="mt-4">
                    <h6 class="fw-bold mb-3">Application Notes</h6>
                    <div class="border rounded p-3 bg-light">
                        <p class="mb-0">"Emma is an excellent student with strong academic performance. She was class president in her previous school and actively participated in sports and cultural activities."</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Approve Application</button>
                <button type="button" class="btn btn-danger">Reject Application</button>
            </div>
        </div>
    </div>
</div>
@endsection