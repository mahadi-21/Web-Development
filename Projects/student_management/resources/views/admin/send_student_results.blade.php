@extends('layouts.admin')

@section('title', 'Send Results via Email')
@section('page-title', 'Send Results via Email')

@section('content')
<div class="row">
    <!-- Main Form Section -->
    <div class="col-md-8">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">
                    <i class="fas fa-envelope me-2"></i>
                    Email Results to Students
                </h5>
            </div>
            <div class="card-body">
                <div class="alert alert-warning mb-4">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Important:</strong> Ensure all results are properly entered and verified before sending emails to students.
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Select Class <span class="text-danger">*</span></label>
                            <select class="form-select" id="classSelect" required>
                                <option value="">Choose class...</option>
                                <option value="8">Class 8</option>
                                <option value="9">Class 9</option>
                                <option value="10" selected>Class 10</option>
                                <option value="11">Class 11</option>
                                <option value="12">Class 12</option>
                                <option value="all">All Classes</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Exam/Result Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="examType" required>
                                <option value="">Select exam type...</option>
                                <option value="mid">Mid Term Examination</option>
                                <option value="final" selected>Final Term Examination</option>
                                <option value="unit">Unit Test</option>
                                <option value="annual">Annual Examination</option>
                                <option value="preboard">Pre-Board Examination</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Academic Year <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025" selected>2024-2025</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Send Date</label>
                            <input type="date" class="form-control" value="2024-01-20">
                            <small class="text-muted">Leave empty to send immediately</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Subject <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="emailSubject" placeholder="e.g., Your Final Term Examination Results" value="Final Term Examination Results - Class 10 (2024-2025)" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="emailMessage" rows="8" placeholder="Enter the email message body..." required>Dear Student,

We are pleased to inform you that your Final Term Examination results for the academic year 2024-2025 have been published.

📊 **Result Summary:**
- Examination: Final Term 2024-2025
- Class: 10
- Result Date: January 20, 2024

✅ **How to Access Your Results:**
1. Log in to your student portal at https://portal.example.com
2. Navigate to the "Results" section
3. Select "Final Term 2024-2025" to view your detailed marksheet

📈 **Performance Highlights:**
- Overall percentage and grade
- Subject-wise marks and grades
- Class rank and performance analysis
- Teacher's remarks and suggestions

For any queries or concerns regarding your results, please contact your class teacher or visit the administration office.

Best Regards,
**School Administration**
St. Mary's High School
Email: admin@example.com
Phone: +1 (555) 123-4567

---
*This is an automated message. Please do not reply to this email.*</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Attachment Options</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="attachPdf" checked>
                            <label class="form-check-label" for="attachPdf">
                                <i class="fas fa-file-pdf me-2 text-danger"></i> Attach PDF marksheet
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="sendToGuardians" checked>
                            <label class="form-check-label" for="sendToGuardians">
                                <i class="fas fa-users me-2 text-info"></i> Also send to guardians
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="includeRanking">
                            <label class="form-check-label" for="includeRanking">
                                <i class="fas fa-trophy me-2 text-warning"></i> Include class ranking
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendIndividual">
                            <label class="form-check-label" for="sendIndividual">
                                <i class="fas fa-user me-2 text-success"></i> Send individual emails (not bulk)
                            </label>
                        </div>
                    </div>

                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Note:</strong> Emails will be sent to all students in the selected class. This process may take a few minutes depending on the number of recipients.
                    </div>

                    <div class="card bg-light mb-4">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">
                                <i class="fas fa-eye me-2"></i>Email Preview
                            </h6>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <small class="text-muted d-block">To:</small>
                                    <strong>Selected Students & Guardians</strong>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <small class="text-muted d-block">Subject:</small>
                                    <strong id="subjectPreview">Final Term Examination Results - Class 10 (2024-2025)</strong>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <small class="text-muted d-block">Recipients:</small>
                                    <span class="badge bg-primary">42 students + 42 guardians</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <small class="text-muted d-block">Attachments:</small>
                                    <span class="badge bg-danger">PDF Marksheet</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#confirmModal">
                            <i class="fas fa-paper-plane me-2"></i> Send Emails
                        </button>
                        <button type="button" class="btn btn-outline-secondary px-4">
                            <i class="fas fa-eye me-2"></i> Preview Email
                        </button>
                        <button type="button" class="btn btn-outline-info px-4">
                            <i class="fas fa-envelope me-2"></i> Send Test Email
                        </button>
                        <button type="button" class="btn btn-outline-danger px-4">
                            <i class="fas fa-redo me-2"></i> Reset Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Statistics and Info Section -->
    <div class="col-md-4">
        <!-- Email Stats -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-chart-bar me-2"></i>
                    Email Statistics
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Total Emails Sent</span>
                        <span class="fw-bold">1,245</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" style="width: 100%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Success Rate</span>
                        <span class="fw-bold text-success">97.8%</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 97.8%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>This Month</span>
                        <span class="fw-bold text-info">128</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-info" style="width: 60%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Failed</span>
                        <span class="fw-bold text-danger">28</span>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-danger" style="width: 2.2%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Email Campaigns -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-history me-2"></i>
                    Recent Campaigns
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <small class="text-muted d-block">Class 9 - Mid Term</small>
                    <strong>38 recipients</strong>
                    <div class="small text-success">
                        <i class="fas fa-check-circle me-1"></i> Sent: Jan 15, 2024
                    </div>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Class 11 - Unit Test</small>
                    <strong>45 recipients</strong>
                    <div class="small text-success">
                        <i class="fas fa-check-circle me-1"></i> Sent: Jan 10, 2024
                    </div>
                </div>
                <div class="mb-3">
                    <small class="text-muted d-block">Class 12 - Pre-Board</small>
                    <strong>40 recipients</strong>
                    <div class="small text-success">
                        <i class="fas fa-check-circle me-1"></i> Sent: Dec 20, 2023
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Tips -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0 fw-bold">
                    <i class="fas fa-lightbulb me-2"></i>
                    Quick Tips
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <small>Test email before sending to all</small>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <small>Use merge tags for personalization</small>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <small>Check spam folder for test emails</small>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <small>Schedule for optimal delivery time</small>
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <small>Keep attachments under 10MB</small>
                    </li>
                </ul>
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
                    <i class="fas fa-paper-plane me-2"></i> Confirm Email Sending
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <div class="text-center mb-3">
                    <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                    <h5>Send Results Email?</h5>
                </div>
                <div class="text-center">
                    <p>You are about to send results email to:</p>
                    <h4 class="text-primary">42 Students + 42 Guardians</h4>
                    <p class="text-muted">Class 10 - Final Term Examination (2024-2025)</p>
                    
                    <div class="alert alert-warning mt-3">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        This action cannot be undone. Ensure all information is correct.
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes, Send Emails</button>
            </div>
        </div>
    </div>
</div>

<!-- Test Email Modal -->
<div class="modal fade" id="testEmailModal" tabindex="-1" aria-labelledby="testEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="testEmailModalLabel">
                    <i class="fas fa-envelope me-2"></i> Send Test Email
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Test Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter email address for testing" value="admin@example.com">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="testWithAttachment" checked>
                    <label class="form-check-label" for="testWithAttachment">
                        Include attachments
                    </label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Send Test Email</button>
            </div>
        </div>
    </div>
</div>
@endsection