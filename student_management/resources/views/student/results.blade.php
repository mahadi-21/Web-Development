@extends('layouts.student')

@section('title', 'My Results')

@section('content')
<div class="page-header text-center">
    <h1><i class="fas fa-chart-bar me-2"></i> My Results</h1>
    <p>View your examination results and performance</p>
</div>

<!-- Result Statistics -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="stat-card">
            <i class="fas fa-trophy fa-2x mb-2 text-warning"></i>
            <h3>90.0%</h3>
            <p>Overall Percentage</p>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
            <i class="fas fa-award fa-2x mb-2 text-white"></i>
            <h3>A+</h3>
            <p class="text-white">Grade</p>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
            <i class="fas fa-star fa-2x mb-2 text-white"></i>
            <h3>450</h3>
            <p class="text-white">Total Marks</p>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
            <i class="fas fa-book fa-2x mb-2 text-white"></i>
            <h3>5</h3>
            <p class="text-white">Subjects</p>
        </div>
    </div>
</div>

<!-- Results Table -->
<div class="content-card mb-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold mb-0"><i class="fas fa-clipboard-list me-2 text-primary"></i> Final Term Examination - Class 10 (2024-2025)</h5>
        <div>
            <button class="btn btn-outline-primary me-2">
                <i class="fas fa-print me-2"></i> Print
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-download me-2"></i> Download Report
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff;">
                <tr>
                    <th>Subject</th>
                    <th>Marks Obtained</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <!-- Mathematics -->
                <tr>
                    <td><strong>Mathematics</strong></td>
                    <td>92</td>
                    <td>100</td>
                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%">
                                92%
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success fs-6 px-3 py-2">A+</span>
                    </td>
                </tr>
                
                <!-- Science -->
                <tr>
                    <td><strong>Science</strong></td>
                    <td>88</td>
                    <td>100</td>
                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%">
                                88%
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success fs-6 px-3 py-2">A</span>
                    </td>
                </tr>
                
                <!-- English -->
                <tr>
                    <td><strong>English</strong></td>
                    <td>95</td>
                    <td>100</td>
                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%">
                                95%
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success fs-6 px-3 py-2">A+</span>
                    </td>
                </tr>
                
                <!-- Social Studies -->
                <tr>
                    <td><strong>Social Studies</strong></td>
                    <td>85</td>
                    <td>100</td>
                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%">
                                85%
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-primary fs-6 px-3 py-2">B+</span>
                    </td>
                </tr>
                
                <!-- Computer Science -->
                <tr>
                    <td><strong>Computer Science</strong></td>
                    <td>90</td>
                    <td>100</td>
                    <td>
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%">
                                90%
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success fs-6 px-3 py-2">A+</span>
                    </td>
                </tr>
                
                <!-- Total Row -->
                <tr style="background-color: #f8f9fa; font-weight: bold;">
                    <td><strong>TOTAL</strong></td>
                    <td><strong>450</strong></td>
                    <td><strong>500</strong></td>
                    <td>
                        <span class="badge bg-primary fs-6 px-3 py-2">90.0%</span>
                    </td>
                    <td>
                        <span class="badge bg-success fs-6 px-3 py-2">A+</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Additional Information -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="content-card h-100">
            <h5 class="fw-bold mb-3"><i class="fas fa-chart-line me-2 text-info"></i> Performance Analysis</h5>
            <div class="mb-3">
                <h6>Class Rank: <span class="badge bg-warning">#5</span></h6>
                <div class="small text-muted">Out of 42 students in Class 10</div>
            </div>
            <div class="mb-3">
                <h6>Performance Trend: <span class="badge bg-success">Improving</span></h6>
                <div class="small text-muted">+5% improvement from last term</div>
            </div>
            <div class="mb-3">
                <h6>Attendance: <span class="badge bg-success">94%</span></h6>
                <div class="small text-muted">Good attendance record</div>
            </div>
            <div>
                <h6>Result Date: January 20, 2024</h6>
                <div class="small text-muted">Published by: Dr. Sarah Johnson</div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="content-card h-100">
            <h5 class="fw-bold mb-3"><i class="fas fa-comment-dots me-2 text-warning"></i> Teacher's Remarks</h5>
            <div class="border rounded p-3 bg-light mb-3">
                <p class="mb-0">
                    "Excellent performance overall! John has shown remarkable improvement in Mathematics and Science. His consistent effort and dedication are commendable. Keep up the good work!"
                </p>
            </div>
            <div class="small text-muted">
                <i class="fas fa-user-circle me-1"></i> Ms. Emily Carter - Class Teacher
            </div>
        </div>
    </div>
</div>

<!-- Subject Analysis -->
<div class="content-card mb-4">
    <h5 class="fw-bold mb-4"><i class="fas fa-chart-pie me-2 text-danger"></i> Subject-wise Analysis</h5>
    <div class="row">
        <div class="col-md-4 text-center mb-3">
            <div class="p-4 bg-light rounded">
                <i class="fas fa-thumbs-up fa-3x text-success mb-3"></i>
                <h6 class="fw-bold">Strengths</h6>
                <ul class="list-unstyled mb-0">
                    <li><span class="badge bg-success">Computer Science</span></li>
                    <li><span class="badge bg-success">English</span></li>
                    <li><span class="badge bg-success">Mathematics</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center mb-3">
            <div class="p-4 bg-light rounded">
                <i class="fas fa-chart-bar fa-3x text-primary mb-3"></i>
                <h6 class="fw-bold">Average</h6>
                <ul class="list-unstyled mb-0">
                    <li><span class="badge bg-primary">Science</span></li>
                    <li><span class="badge bg-primary">Social Studies</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-center mb-3">
            <div class="p-4 bg-light rounded">
                <i class="fas fa-book-reader fa-3x text-warning mb-3"></i>
                <h6 class="fw-bold">Focus Areas</h6>
                <ul class="list-unstyled mb-0">
                    <li><span class="badge bg-warning">Social Studies</span></li>
                    <li class="text-muted">No major weaknesses</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Previous Results -->
<div class="content-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold mb-0"><i class="fas fa-history me-2 text-secondary"></i> Previous Results</h5>
        <button class="btn btn-outline-primary">
            <i class="fas fa-calendar-alt me-2"></i> View All
        </button>
    </div>
    
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th>Examination</th>
                    <th>Class</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mid Term Examination</td>
                    <td>Class 10</td>
                    <td>425/500</td>
                    <td><span class="badge bg-success">85.0%</span></td>
                    <td><span class="badge bg-primary">A</span></td>
                    <td>Nov 15, 2023</td>
                </tr>
                <tr>
                    <td>Unit Test - 3</td>
                    <td>Class 10</td>
                    <td>185/200</td>
                    <td><span class="badge bg-success">92.5%</span></td>
                    <td><span class="badge bg-success">A+</span></td>
                    <td>Oct 10, 2023</td>
                </tr>
                <tr>
                    <td>Final Term (Class 9)</td>
                    <td>Class 9</td>
                    <td>410/500</td>
                    <td><span class="badge bg-primary">82.0%</span></td>
                    <td><span class="badge bg-primary">A</span></td>
                    <td>May 20, 2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Download Options Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="downloadModalLabel">
                    <i class="fas fa-download me-2"></i> Download Options
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Format</label>
                    <select class="form-select">
                        <option value="pdf">PDF Document</option>
                        <option value="excel">Excel Spreadsheet</option>
                        <option value="csv">CSV File</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Include</label>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="includeRemarks" checked>
                        <label class="form-check-label" for="includeRemarks">
                            Teacher's Remarks
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="includeHistory" checked>
                        <label class="form-check-label" for="includeHistory">
                            Previous Results
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="includeAnalysis" checked>
                        <label class="form-check-label" for="includeAnalysis">
                            Performance Analysis
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Download</button>
            </div>
        </div>
    </div>
</div>
@endsection