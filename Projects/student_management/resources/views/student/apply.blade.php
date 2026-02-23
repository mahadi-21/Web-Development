@extends('layouts.student')

@section('title', 'Apply for Class')

@section('content')
<div class="page-header text-center">
    <h1><i class="fas fa-file-alt me-2"></i> Apply for Upper Class</h1>
    <p>Submit your application for the next academic year</p>
</div>

<div class="row">
    <!-- Application Form -->
    <div class="col-md-8">
        <div class="content-card mb-4">
            <div class="alert alert-info mb-4">
                <i class="fas fa-info-circle me-2"></i>
                <strong>Note:</strong> Applications for the academic year 2025-2026 are now open. Submit your application before <strong>February 15, 2025</strong>.
            </div>

            <form>
                <h5 class="fw-bold mb-3 text-primary">
                    <i class="fas fa-user-graduate me-2"></i>Application Details
                </h5>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Last Class</label>
                        <input type="text" class="form-control" value="Class 10" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Student ID</label>
                        <input type="text" class="form-control" value="#ST001" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Apply For <span class="text-danger">*</span></label>
                    <select class="form-select" required>
                        <option value="">Select class...</option>
                        @for ($)
                        
                        @endfor
                    </select>
                </div>

               

                <div class="mb-3">
                    <label class="form-label fw-bold">Reason for Application <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" placeholder="Please explain why you want to join this class and stream..." required>I am applying for the Science Stream in Class 11 because I have always been passionate about Mathematics and Physics. My career goal is to become a software engineer, and I believe the Science stream will provide me with the necessary foundation in Physics, Chemistry, and Mathematics to pursue Computer Science in university. I have consistently performed well in science subjects and want to continue my education in this field.</textarea>
                </div>

                <hr class="my-4">

                <h5 class="fw-bold mb-3 text-primary">
                    <i class="fas fa-chart-line me-2"></i>Previous Academic Performance
                </h5>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Last Exam Percentage <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" value="90.0" step="0.01" min="0" max="100" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Last Exam Grade <span class="text-danger">*</span></label>
                        <select class="form-select" required>
                            <option value="A+" selected>A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Class Rank</label>
                        <input type="text" class="form-control" value="#5 out of 42" readonly>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Upload Marksheet/Certificate <span class="text-danger">*</span></label>
                    <div class="border rounded p-3 bg-light text-center">
                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                        <p class="mb-2">Drag & drop your marksheet or <a href="#" class="text-decoration-none">browse files</a></p>
                        <input type="file" class="form-control d-none" id="marksheetFile" accept=".pdf,.jpg,.jpeg,.png">
                        <label for="marksheetFile" class="btn btn-sm btn-outline-primary mb-2">
                            <i class="fas fa-upload me-1"></i> Choose File
                        </label>
                        <small class="d-block text-muted">Accepted formats: PDF, JPG, PNG (Max 2MB)</small>
                        <small class="d-block text-muted">Current: <a href="#" class="text-decoration-none">Final_Term_Marksheet_2024.pdf</a></small>
                    </div>
                </div>

                <hr class="my-4">

                <h5 class="fw-bold mb-3 text-primary">
                    <i class="fas fa-trophy me-2"></i>Extracurricular Activities
                </h5>

                <div class="mb-3">
                    <label class="form-label fw-bold">Sports & Activities</label>
                    <textarea class="form-control" rows="3" placeholder="Cricket , Archary ,etc"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Achievements & Awards</label>
                    <textarea class="form-control" rows="3" placeholder="Best Student Award 2023-2024, Science Fair Winner - Regional Level, etc."></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Future Goals</label>
                    <textarea class="form-control" rows="3" placeholder="My goal is to be a doctor....."></textarea>
                </div>

                <hr class="my-4">

                

                

                <div class="mb-3">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="parentConsent" required>
                        <label class="form-check-label" for="parentConsent">
                            I confirm that my parent/guardian is aware of this application
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">terms and conditions</a> and confirm that all information provided is accurate.
                        </label>
                    </div>
                </div>

                <div class="alert alert-warning mb-4">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Important:</strong> Once submitted, you cannot edit your application. Please review all information carefully before submitting.
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#submitModal">
                        <i class="fas fa-paper-plane me-2"></i> Submit Application
                    </button>
                    <button type="reset" class="btn btn-outline-secondary px-4">
                        <i class="fas fa-redo me-2"></i> Reset Form
                    </button>
                    <button type="button" class="btn btn-outline-info px-4">
                        <i class="fas fa-save me-2"></i> Save Draft
                    </button>
                    <button type="button" class="btn btn-outline-primary px-4">
                        <i class="fas fa-eye me-2"></i> Preview
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Application Status & Info -->
    <div class="col-md-4">
        <!-- Application Status -->
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-3">
                <i class="fas fa-clipboard-check me-2 text-primary"></i>Application Status
            </h5>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="text-muted">Current Status</span>
                    <span class="badge bg-warning">Draft</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="text-muted">Last Saved</span>
                    <span>Today, 10:30 AM</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">Application ID</span>
                    <span>Will be generated upon submission</span>
                </div>
            </div>
        </div>

        <!-- Important Dates -->
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-3">
                <i class="fas fa-calendar-alt me-2 text-success"></i>Important Dates
            </h5>
            <div class="mb-3">
                <small class="text-muted d-block">Application Opens</small>
                <strong>January 1, 2025</strong>
            </div>
            <div class="mb-3">
                <small class="text-muted d-block">Application Deadline</small>
                <strong>February 15, 2025</strong>
            </div>
            <div class="mb-3">
                <small class="text-muted d-block">Interview Period</small>
                <strong>February 20-28, 2025</strong>
            </div>
            <div class="mb-3">
                <small class="text-muted d-block">Result Announcement</small>
                <strong>March 10, 2025</strong>
            </div>
        </div>

        <!-- Stream Information -->
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-3">
                <i class="fas fa-stream me-2 text-info"></i>Science Stream Info
            </h5>
            <div class="mb-3">
                <h6 class="small fw-bold mb-2">Core Subjects:</h6>
                <div class="d-flex flex-wrap gap-1">
                    <span class="badge bg-primary">Physics</span>
                    <span class="badge bg-primary">Chemistry</span>
                    <span class="badge bg-primary">Mathematics</span>
                    <span class="badge bg-primary">Biology</span>
                    <span class="badge bg-primary">Computer Science</span>
                </div>
            </div>
            <div class="mb-3">
                <h6 class="small fw-bold mb-2">Minimum Requirement:</h6>
                <ul class="list-unstyled small mb-0">
                    <li><i class="fas fa-check text-success me-2"></i>80% in Class 10</li>
                    <li><i class="fas fa-check text-success me-2"></i>85% in Science & Math</li>
                </ul>
            </div>
        </div>

        <!-- Quick Help -->
        <div class="content-card">
            <h5 class="fw-bold mb-3">
                <i class="fas fa-question-circle me-2 text-warning"></i>Quick Help
            </h5>
            <ul class="list-unstyled small mb-0">
                <li class="mb-2">
                    <i class="fas fa-info-circle me-2 text-primary"></i>
                    <small>All fields marked with <span class="text-danger">*</span> are required</small>
                </li>
                <li class="mb-2">
                    <i class="fas fa-info-circle me-2 text-primary"></i>
                    <small>Save draft to continue later</small>
                </li>
                <li class="mb-2">
                    <i class="fas fa-info-circle me-2 text-primary"></i>
                    <small>Upload clear scanned documents</small>
                </li>
                <li>
                    <i class="fas fa-info-circle me-2 text-primary"></i>
                    <small>Contact admin for assistance</small>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Submission Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-primary" id="submitModalLabel">
                    <i class="fas fa-paper-plane me-2"></i> Submit Application
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <div class="text-center mb-3">
                    <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                    <h5>Confirm Submission?</h5>
                </div>
                <p class="text-center mb-0">You are about to submit your application for <strong>Class 11 - Science Stream (2025-2026)</strong>. Once submitted, you cannot make changes to your application.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes, Submit Application</button>
            </div>
        </div>
    </div>
</div>
@endsection