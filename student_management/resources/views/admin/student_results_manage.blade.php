@extends('layouts.admin')

@section('title', 'Manage Results')
@section('page-title', 'Manage Results')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0"><i class="fas fa-chart-line me-2"></i> Student Results Management</h4>
    <div>
        <button class="btn btn-outline-primary me-2">
            <i class="fas fa-download me-2"></i> Export
        </button>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addResultModal">
            <i class="fas fa-plus me-2"></i> Add New Result
        </button>
    </div>
</div>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted text-uppercase small mb-1">Total Results</h6>
                        <h3 class="mb-0 fw-bold">1,247</h3>
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
                        <h6 class="text-muted text-uppercase small mb-1">Class 10 Results</h6>
                        <h3 class="mb-0 fw-bold">42</h3>
                    </div>
                    <div class="text-success" style="font-size: 2rem;">
                        <i class="fas fa-chart-bar"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Avg. Percentage</h6>
                        <h3 class="mb-0 fw-bold">78.5%</h3>
                    </div>
                    <div class="text-info" style="font-size: 2rem;">
                        <i class="fas fa-percentage"></i>
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
                        <h6 class="text-muted text-uppercase small mb-1">Topper Score</h6>
                        <h3 class="mb-0 fw-bold">98.2%</h3>
                    </div>
                    <div class="text-warning" style="font-size: 2rem;">
                        <i class="fas fa-trophy"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filter Card -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-3">
                <label class="form-label small fw-bold">Filter by Class</label>
                <select class="form-select">
                    <option value="">All Classes</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10" selected>Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Exam Type</label>
                <select class="form-select">
                    <option value="">All Exams</option>
                    <option value="mid">Mid Term</option>
                    <option value="final" selected>Final Term</option>
                    <option value="unit">Unit Test</option>
                    <option value="quarterly">Quarterly</option>
                    <option value="halfyearly">Half Yearly</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Academic Year</label>
                <select class="form-select">
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025" selected>2024-2025</option>
                </select>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-primary w-100">
                    <i class="fas fa-search me-1"></i> Filter Results
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <h6 class="mb-0 fw-bold">
            <i class="fas fa-list me-2"></i>
            Class 10 - Final Term Results (2024-2025)
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Roll No.</th>
                        <th>Student Name</th>
                        <th>Mathematics</th>
                        <th>Science</th>
                        <th>English</th>
                        <th>Social Studies</th>
                        <th>Computer</th>
                        <th>Total</th>
                        <th>Percentage</th>
                        <th>Grade</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Result 1 -->
                    <tr>
                        <td><strong>1001</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=4facfe&color=fff" 
                                     alt="John Doe" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>John Doe</strong>
                                    <div class="small text-muted">Class 10</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">92/100</span></td>
                        <td><span class="badge bg-info">88/100</span></td>
                        <td><span class="badge bg-success">95/100</span></td>
                        <td><span class="badge bg-warning">85/100</span></td>
                        <td><span class="badge bg-danger">90/100</span></td>
                        <td><strong class="text-primary">450/500</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                90.0%
                            </span>
                        </td>
                        <td><span class="badge bg-success">A+</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewResultModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editResultModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Result 2 -->
                    <tr>
                        <td><strong>1002</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=f093fb&color=fff" 
                                     alt="Jane Smith" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Jane Smith</strong>
                                    <div class="small text-muted">Class 10</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">85/100</span></td>
                        <td><span class="badge bg-info">90/100</span></td>
                        <td><span class="badge bg-success">88/100</span></td>
                        <td><span class="badge bg-warning">82/100</span></td>
                        <td><span class="badge bg-danger">95/100</span></td>
                        <td><strong class="text-primary">440/500</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                88.0%
                            </span>
                        </td>
                        <td><span class="badge bg-success">A</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewResultModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editResultModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Result 3 -->
                    <tr>
                        <td><strong>1003</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Robert+Johnson&background=43e97b&color=fff" 
                                     alt="Robert Johnson" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Robert Johnson</strong>
                                    <div class="small text-muted">Class 10</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">78/100</span></td>
                        <td><span class="badge bg-info">82/100</span></td>
                        <td><span class="badge bg-success">75/100</span></td>
                        <td><span class="badge bg-warning">80/100</span></td>
                        <td><span class="badge bg-danger">85/100</span></td>
                        <td><strong class="text-primary">400/500</strong></td>
                        <td>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                80.0%
                            </span>
                        </td>
                        <td><span class="badge bg-warning">B+</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewResultModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editResultModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Result 4 -->
                    <tr>
                        <td><strong>1004</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=ff9a9e&color=fff" 
                                     alt="Emily Davis" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Emily Davis</strong>
                                    <div class="small text-muted">Class 10</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">65/100</span></td>
                        <td><span class="badge bg-info">70/100</span></td>
                        <td><span class="badge bg-success">72/100</span></td>
                        <td><span class="badge bg-warning">68/100</span></td>
                        <td><span class="badge bg-danger">75/100</span></td>
                        <td><strong class="text-primary">350/500</strong></td>
                        <td>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                70.0%
                            </span>
                        </td>
                        <td><span class="badge bg-danger">C</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewResultModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editResultModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Result 5 -->
                    <tr>
                        <td><strong>1005</strong></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=Michael+Brown&background=667eea&color=fff" 
                                     alt="Michael Brown" 
                                     class="rounded-circle me-2" 
                                     style="width: 35px; height: 35px;">
                                <div>
                                    <strong>Michael Brown</strong>
                                    <div class="small text-muted">Class 10</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">95/100</span></td>
                        <td><span class="badge bg-info">96/100</span></td>
                        <td><span class="badge bg-success">94/100</span></td>
                        <td><span class="badge bg-warning">92/100</span></td>
                        <td><span class="badge bg-danger">98/100</span></td>
                        <td><strong class="text-primary">475/500</strong></td>
                        <td>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                95.0%
                            </span>
                        </td>
                        <td><span class="badge bg-success">A+</span></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewResultModal">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editResultModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-outline-danger">
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
        <li class="page-item">
            <a class="page-link" href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- Add Result Modal -->
<div class="modal fade" id="addResultModal" tabindex="-1" aria-labelledby="addResultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="addResultModalLabel">
                    <i class="fas fa-plus-circle me-2"></i> Add New Result
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Select Student</label>
                            <select class="form-select" required>
                                <option value="">Choose student...</option>
                                <option value="1">John Doe (Roll: 1001)</option>
                                <option value="2">Jane Smith (Roll: 1002)</option>
                                <option value="3">Robert Johnson (Roll: 1003)</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Exam Type</label>
                            <select class="form-select" required>
                                <option value="">Select exam...</option>
                                <option value="mid">Mid Term</option>
                                <option value="final">Final Term</option>
                                <option value="unit">Unit Test</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Mathematics</label>
                            <input type="number" class="form-control" placeholder="Enter marks (0-100)" min="0" max="100">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Science</label>
                            <input type="number" class="form-control" placeholder="Enter marks (0-100)" min="0" max="100">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">English</label>
                            <input type="number" class="form-control" placeholder="Enter marks (0-100)" min="0" max="100">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Social Studies</label>
                            <input type="number" class="form-control" placeholder="Enter marks (0-100)" min="0" max="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add Result</button>
            </div>
        </div>
    </div>
</div>
@endsection