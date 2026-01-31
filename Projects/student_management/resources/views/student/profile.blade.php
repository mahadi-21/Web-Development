@extends('layouts.student')

@section('title', 'Student Profile')

@section('content')
<div class="page-header text-center">
    <h1><i class="fas fa-user-circle me-2"></i> My Profile</h1>
    <p>View and manage your personal information</p>
</div>

<div class="row">
    <!-- Profile Card -->
    <div class="col-md-4 mb-4">
        <div class="content-card text-center">
            <div class="position-relative d-inline-block">
                <img src="https://ui-avatars.com/api/?name=John+Doe&size=150&background=667eea&color=fff" 
                     alt="John Doe" 
                     class="rounded-circle mb-3" 
                     style="width: 150px; height: 150px; border: 5px solid #667eea;">
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
                    <span class="visually-hidden">Active</span>
                </span>
            </div>
            <h4 class="mb-1">John Doe</h4>
            <p class="text-muted mb-3">Student ID: #ST001 | Class 10</p>
            <div class="mb-4">
                <span class="badge bg-success mb-2">Active Student</span>
                <div class="small text-muted">Enrolled since September 2023</div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary">
                    <i class="fas fa-edit me-2"></i> Edit Profile
                </button>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-key me-2"></i> Change Password
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="content-card mt-4">
            <h6 class="fw-bold mb-3">
                <i class="fas fa-chart-line me-2"></i> Quick Stats
            </h6>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Attendance</span>
                    <span class="fw-bold text-success">94%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-success" style="width: 94%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Current GPA</span>
                    <span class="fw-bold text-primary">3.7</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Fees Status</span>
                    <span class="badge bg-success">Paid</span>
                </div>
                <div class="small text-muted">Next due: Jan 30, 2024</div>
            </div>
            <div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Class Rank</span>
                    <span class="fw-bold text-warning">#5</span>
                </div>
                <div class="small text-muted">Out of 42 students</div>
            </div>
        </div>
    </div>

    <!-- Personal Information -->
    <div class="col-md-8 mb-4">
        <div class="content-card">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-info-circle me-2 text-primary"></i> Personal Information
            </h5>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Full Name</label>
                        <p class="fw-bold">John Doe</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Email Address</label>
                        <p class="fw-bold">john.doe@student.example.com</p>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Phone Number</label>
                        <p class="fw-bold">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Date of Birth</label>
                        <p class="fw-bold">March 15, 2008</p>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Gender</label>
                        <p class="fw-bold">Male</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Blood Group</label>
                        <p class="fw-bold">O+</p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Address</label>
                <p class="fw-bold">123 Main Street, New York, NY 10001, United States</p>
            </div>

            <hr class="my-4">

            <h5 class="fw-bold mb-4">
                <i class="fas fa-graduation-cap me-2 text-success"></i> Academic Information
            </h5>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Current Class</label>
                        <p><span class="badge bg-primary fs-6 px-3 py-2">Class 10</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Roll Number</label>
                        <p><span class="badge bg-success fs-6 px-3 py-2">1001</span></p>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Admission Date</label>
                        <p class="fw-bold">September 1, 2023</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Academic Year</label>
                        <p class="fw-bold">2024-2025</p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Previous School</label>
                <p class="fw-bold">Central Middle School</p>
            </div>

            <hr class="my-4">

            <h5 class="fw-bold mb-4">
                <i class="fas fa-users me-2 text-info"></i> Guardian Information
            </h5>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Guardian Name</label>
                        <p class="fw-bold">Robert Doe</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Relationship</label>
                        <p class="fw-bold">Father</p>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Guardian Phone</label>
                        <p class="fw-bold">+1 (555) 987-6543</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="text-muted small">Guardian Email</label>
                        <p class="fw-bold">robert.doe@example.com</p>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Guardian Address</label>
                <p class="fw-bold">Same as student address</p>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Guardian Occupation</label>
                <p class="fw-bold">Software Engineer</p>
            </div>

            <hr class="my-4">

            <h5 class="fw-bold mb-4">
                <i class="fas fa-file-medical me-2 text-danger"></i> Medical Information
            </h5>
            
            <div class="mb-4">
                <label class="text-muted small">Medical Conditions</label>
                <p class="fw-bold">No known medical conditions</p>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Allergies</label>
                <p class="fw-bold">None</p>
            </div>

            <div class="mb-4">
                <label class="text-muted small">Emergency Contact</label>
                <p class="fw-bold">+1 (555) 987-6543 (Father)</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row">
    <div class="col-12">
        <div class="content-card">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-history me-2 text-warning"></i> Recent Activity
            </h5>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jan 15, 2024</td>
                            <td>Fees Payment</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>Semester fee paid via Credit Card</td>
                        </tr>
                        <tr>
                            <td>Jan 10, 2024</td>
                            <td>Exam Results</td>
                            <td><span class="badge bg-info">Published</span></td>
                            <td>Mid-term results published</td>
                        </tr>
                        <tr>
                            <td>Jan 5, 2024</td>
                            <td>Attendance</td>
                            <td><span class="badge bg-success">Present</span></td>
                            <td>Full attendance this week</td>
                        </tr>
                        <tr>
                            <td>Dec 20, 2023</td>
                            <td>Library Book</td>
                            <td><span class="badge bg-warning">Due Soon</span></td>
                            <td>"Physics Textbook" due on Jan 20</td>
                        </tr>
                        <tr>
                            <td>Dec 15, 2023</td>
                            <td>Parent Meeting</td>
                            <td><span class="badge bg-success">Attended</span></td>
                            <td>PTA meeting with guardian</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="editProfileModalLabel">
                    <i class="fas fa-edit me-2"></i> Edit Profile
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">First Name</label>
                            <input type="text" class="form-control" value="John">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Last Name</label>
                            <input type="text" class="form-control" value="Doe">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" value="john.doe@student.example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone Number</label>
                        <input type="tel" class="form-control" value="+1 (555) 123-4567">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <textarea class="form-control" rows="3">123 Main Street, New York, NY 10001, United States</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
@endsection