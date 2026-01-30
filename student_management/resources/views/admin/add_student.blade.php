@extends('layouts.admin')

@section('title', 'Add New Student')
@section('page-title', 'Add New Student')

@section('content')
<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">
                    <i class="fas fa-user-plus me-2"></i>
                    New Student Registration
                </h5>
            </div>
            <div class="card-body">
                <div class="alert alert-info mb-4">
                    <i class="fas fa-info-circle me-2"></i>
                    Fill in all required fields marked with <span class="text-danger">*</span>. Student will be added to the system immediately upon submission.
                </div>

                <form>
                    <h6 class="fw-bold mb-3 text-primary">
                        <i class="fas fa-user me-2"></i>Personal Information
                    </h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter last name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" required>
                            <small class="text-muted">Must be at least 5 years old</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Gender <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select Gender...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">Blood Group</label>
                            <select class="form-select">
                                <option value="">Not Specified</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Profile Photo</label>
                            <div class="border rounded p-3 text-center">
                                <div class="mb-2">
                                    <i class="fas fa-user-circle fa-3x text-muted"></i>
                                </div>
                                <input type="file" class="form-control" id="profilePhoto" accept="image/*" style="display: none;">
                                <label for="profilePhoto" class="btn btn-sm btn-outline-primary mb-0">
                                    <i class="fas fa-upload me-1"></i> Upload Photo
                                </label>
                                <small class="d-block text-muted mt-1">Max size: 2MB. JPG, PNG formats only.</small>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3 text-primary">
                        <i class="fas fa-address-book me-2"></i>Contact Information
                    </h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="student@example.com" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="+1 (555) 123-4567" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Address <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3" placeholder="Enter full address" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">City</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">State</label>
                            <input type="text" class="form-control" placeholder="State">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label fw-bold">ZIP Code</label>
                            <input type="text" class="form-control" placeholder="ZIP Code">
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3 text-primary">
                        <i class="fas fa-graduation-cap me-2"></i>Academic Information
                    </h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Class <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select class...</option>
                                <option value="Class 8">Class 8</option>
                                <option value="Class 9">Class 9</option>
                                <option value="Class 10">Class 10</option>
                                <option value="Class 11">Class 11</option>
                                <option value="Class 12">Class 12</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Roll Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter roll number" required>
                            <small class="text-muted">Must be unique for the selected class</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Admission Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Previous School</label>
                            <input type="text" class="form-control" placeholder="Previous school name (if any)">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Admission Type</label>
                            <select class="form-select">
                                <option value="regular">Regular Admission</option>
                                <option value="transfer">Transfer Student</option>
                                <option value="scholarship">Scholarship</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option value="active" selected>Active</option>
                                <option value="pending">Pending</option>
                                <option value="probation">Probation</option>
                            </select>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3 text-primary">
                        <i class="fas fa-users me-2"></i>Guardian Information
                    </h6>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Guardian Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter guardian's full name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Relationship <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Select relationship...</option>
                                <option value="father">Father</option>
                                <option value="mother">Mother</option>
                                <option value="guardian">Guardian</option>
                                <option value="brother">Brother</option>
                                <option value="sister">Sister</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Guardian Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="+1 (555) 987-6543" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Guardian Email</label>
                            <input type="email" class="form-control" placeholder="guardian@example.com">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Guardian Address</label>
                        <textarea class="form-control" rows="2" placeholder="Enter guardian's address (if different from student)"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Guardian Occupation</label>
                            <input type="text" class="form-control" placeholder="Occupation">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Emergency Contact</label>
                            <input type="tel" class="form-control" placeholder="Emergency phone number">
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-3 text-primary">
                        <i class="fas fa-file-alt me-2"></i>Additional Information
                    </h6>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Medical Conditions (if any)</label>
                        <textarea class="form-control" rows="2" placeholder="Any medical conditions or allergies..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Special Notes</label>
                        <textarea class="form-control" rows="2" placeholder="Any special instructions or notes..."></textarea>
                    </div>

                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendWelcomeEmail" checked>
                            <label class="form-check-label" for="sendWelcomeEmail">
                                Send welcome email with login credentials
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendParentNotification" checked>
                            <label class="form-check-label" for="sendParentNotification">
                                Send notification to guardian
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="generateStudentId" checked>
                            <label class="form-check-label" for="generateStudentId">
                                Generate student ID card
                            </label>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-4 pt-3 border-top">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save me-2"></i> Add Student
                        </button>
                        <button type="reset" class="btn btn-outline-secondary px-4">
                            <i class="fas fa-redo me-2"></i> Reset Form
                        </button>
                        <button type="button" class="btn btn-outline-danger px-4">
                            <i class="fas fa-times me-2"></i> Cancel
                        </button>
                        <div class="ms-auto">
                            <button type="button" class="btn btn-outline-info">
                                <i class="fas fa-eye me-2"></i> Preview
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Quick Help Card -->
        <div class="card border-0 shadow-sm mt-4">
            <div class="card-body">
                <h6 class="fw-bold mb-3">
                    <i class="fas fa-question-circle text-primary me-2"></i>Quick Help
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>All fields with <span class="text-danger">*</span> are required</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>Email must be unique for each student</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>Roll number must be unique per class</small>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>Student ID will be auto-generated</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>Default password: student123</small>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <small>Can edit information after creation</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection