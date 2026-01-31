@extends('layouts.admin')

@section('title', 'Edit Student')
@section('page-title', 'Edit Student')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">
                    <i class="fas fa-user-edit me-2"></i>
                    Edit Student Information
                </h5>
            </div>
            <div class="card-body">
                <!-- Student Profile Header -->
                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block mb-3">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=667eea&color=fff&size=128" 
                             alt="John Doe" 
                             class="rounded-circle border" 
                             style="width: 100px; height: 100px;">
                        <button class="btn btn-sm btn-light border position-absolute bottom-0 end-0 rounded-circle">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <h4 class="mb-1">John Doe</h4>
                    <p class="text-muted">Student ID: #ST001 | Class 10 | Roll: 1001</p>
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" value="John Doe" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" value="john.doe@example.com" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="tel" class="form-control" value="+1 (555) 123-4567" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Date of Birth</label>
                            <input type="date" class="form-control" value="2006-03-15" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Class</label>
                            <select class="form-select" required>
                                <option value="Class 10" selected>Class 10</option>
                                <option value="Class 8">Class 8</option>
                                <option value="Class 9">Class 9</option>
                                <option value="Class 11">Class 11</option>
                                <option value="Class 12">Class 12</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Roll Number</label>
                            <input type="text" class="form-control" value="1001" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Parent/Guardian Name</label>
                            <input type="text" class="form-control" value="Robert Doe">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Parent Phone</label>
                            <input type="tel" class="form-control" value="+1 (555) 987-6543">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <textarea class="form-control" rows="3" required>123 Main Street, New York, NY 10001, United States</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Admission Date</label>
                            <input type="date" class="form-control" value="2023-09-01">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select" required>
                                <option value="active" selected>Active</option>
                                <option value="pending">Pending</option>
                                <option value="inactive">Inactive</option>
                                <option value="graduated">Graduated</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendEmail" checked>
                            <label class="form-check-label" for="sendEmail">
                                Send notification email to student
                            </label>
                        </div>
                        <div>
                            <span class="badge bg-light text-dark border">
                                Last updated: 2 days ago
                            </span>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Update Student
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="fas fa-times me-2"></i> Cancel
                        </button>
                        <button type="button" class="btn btn-outline-danger ms-auto">
                            <i class="fas fa-trash me-2"></i> Delete Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Student Details Sidebar -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-info-circle me-2"></i>
                    Student Details
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <small class="text-muted d-block">Student ID</small>
                    <strong>#ST001</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Enrollment Date</small>
                    <strong>September 1, 2023</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Current Status</small>
                    <span class="badge bg-success">Active</span>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Attendance Rate</small>
                    <div class="d-flex align-items-center">
                        <strong>94%</strong>
                        <div class="progress flex-grow-1 ms-2" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 94%"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Average Grade</small>
                    <strong>A- (3.7 GPA)</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Fees Status</small>
                    <span class="badge bg-success">Paid</span>
                    <small class="text-muted d-block mt-1">Next payment due: Jan 15, 2024</small>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Actions
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-chart-line me-2"></i> View Academic Performance
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-file-invoice-dollar me-2"></i> Manage Fees
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-calendar-check me-2"></i> Check Attendance
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-envelope me-2"></i> Send Message
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-file-pdf me-2"></i> Generate Report
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity Section -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-history me-2"></i>
                    Recent Activity
                </h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex align-items-center border-0 px-0 py-3">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #667eea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Fees Paid for December</h6>
                            <small class="text-muted">Paid $500 via Credit Card - 2 days ago</small>
                        </div>
                        <span class="badge bg-success">Completed</span>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0 py-3">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #f093fb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Mid-term Results Published</h6>
                            <small class="text-muted">Math: A, Science: B+, English: A- - 1 week ago</small>
                        </div>
                        <span class="badge bg-info">Academic</span>
                    </div>
                    <div class="list-group-item d-flex align-items-center border-0 px-0 py-3">
                        <div class="me-3">
                            <div style="width: 40px; height: 40px; background: #43e97b; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff;">
                                <i class="fas fa-user-check"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Attendance Recorded</h6>
                            <small class="text-muted">Present in all classes this week - 2 weeks ago</small>
                        </div>
                        <span class="badge bg-success">Attendance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection