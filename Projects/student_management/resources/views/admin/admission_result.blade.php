@extends('layouts.admin')

@section('title', 'Publish Admission Results')
@section('page-title', 'Publish Admission Results')

@section('content')
<div class="row">
    <!-- Main Form Section -->
    <div class="col-md-8">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">
                    <i class="fas fa-clipboard-check me-2"></i>
                    Publish Admission Results
                </h5>
            </div>
            <div class="card-body">
                <div class="alert alert-warning mb-4">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Important:</strong> This action will make admission results public. Ensure all information is correct before publishing.
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Select Class <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Choose class...</option>
                                <option value="Class 8">Class 8</option>
                                <option value="Class 9">Class 9</option>
                                <option value="Class 10" selected>Class 10</option>
                                <option value="Class 11">Class 11</option>
                                <option value="Class 12">Class 12</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Academic Year <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025" selected>2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Admission Batch <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="e.g., Spring 2024" value="Spring 2024" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Result Announcement Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" value="2024-01-20" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Result Title</label>
                        <input type="text" class="form-control" placeholder="e.g., Admission Results Spring 2024" value="Admission Results - Spring 2024">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Result Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="4" placeholder="Enter message to be displayed with results..." required>Congratulations to all selected students! Admission results for Class 10 (Spring 2024) have been finalized. Selected students are requested to complete the admission process by January 30, 2024.</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Notification Settings</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="emailNotification" checked>
                            <label class="form-check-label" for="emailNotification">
                                Send email notifications to all applicants
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="smsNotification">
                            <label class="form-check-label" for="smsNotification">
                                Send SMS notifications to selected applicants
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="downloadResults" checked>
                            <label class="form-check-label" for="downloadResults">
                                Allow applicants to download results PDF
                            </label>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Note:</strong> Once published, admission results will be visible to all applicants on the public portal. This action cannot be undone.
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-paper-plane me-2"></i> Publish Results
                        </button>
                        <button type="button" class="btn btn-outline-secondary px-4">
                            <i class="fas fa-eye me-2"></i> Preview
                        </button>
                        <button type="reset" class="btn btn-outline-danger px-4">
                            <i class="fas fa-redo me-2"></i> Reset Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Statistics and Info Section -->
    <div class="col-md-4">
        <!-- Application Stats -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-chart-bar me-2"></i>
                    Application Statistics (Class 10)
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Total Applications</span>
                        <span class="fw-bold">42</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-info" style="width: 100%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Approved</span>
                        <span class="fw-bold text-success">25</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Pending</span>
                        <span class="fw-bold text-warning">12</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-warning" style="width: 29%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Rejected</span>
                        <span class="fw-bold text-danger">5</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-danger" style="width: 12%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Actions
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-download me-2"></i> Download Applications List
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-file-pdf me-2"></i> Generate Results PDF
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-envelope me-2"></i> Send Test Email
                    </button>
                    <button class="btn btn-outline-primary text-start">
                        <i class="fas fa-history me-2"></i> View Previous Results
                    </button>
                </div>
            </div>
        </div>

        <!-- Important Dates -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-calendar-alt me-2"></i>
                    Important Dates
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <small class="text-muted d-block">Application Deadline</small>
                    <strong>January 15, 2024</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Interview Period</small>
                    <strong>January 16-18, 2024</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Result Announcement</small>
                    <strong>January 20, 2024</strong>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Admission Deadline</small>
                    <strong>January 30, 2024</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Publications -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-history me-2"></i>
                    Recently Published Results
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Batch</th>
                                <th>Class</th>
                                <th>Published Date</th>
                                <th>Total Applicants</th>
                                <th>Selected</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Fall 2023</strong></td>
                                <td>Class 11</td>
                                <td>August 20, 2023</td>
                                <td>38</td>
                                <td><span class="badge bg-success">22 Selected</span></td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Spring 2023</strong></td>
                                <td>Class 10</td>
                                <td>January 25, 2023</td>
                                <td>45</td>
                                <td><span class="badge bg-success">28 Selected</span></td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Fall 2022</strong></td>
                                <td>Class 9</td>
                                <td>August 15, 2022</td>
                                <td>40</td>
                                <td><span class="badge bg-success">25 Selected</span></td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-primary" id="confirmModalLabel">
                    <i class="fas fa-exclamation-circle me-2"></i> Confirm Publication
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <div class="text-center mb-3">
                    <i class="fas fa-paper-plane fa-3x text-primary mb-3"></i>
                    <h5>Publish Admission Results?</h5>
                </div>
                <p class="text-center mb-0">You are about to publish admission results for <strong>Class 10 - Spring 2024</strong>. This will notify 42 applicants and make results public.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes, Publish Results</button>
            </div>
        </div>
    </div>
</div>
@endsection