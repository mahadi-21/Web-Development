@extends('layouts.student')

@section('title', 'Contact Admin')

@section('content')
<div class="page-header text-center">
    <h1><i class="fas fa-envelope me-2"></i> Contact Administration</h1>
    <p>Get in touch with the administration team for support and inquiries</p>
</div>

<div class="row">
    <!-- Contact Form -->
    <div class="col-md-8">
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-paper-plane me-2 text-primary"></i> Send a Message
            </h5>
            
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Your Name</label>
                        <input type="text" class="form-control" value="John Doe" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Student ID</label>
                        <input type="text" class="form-control" value="#ST001" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Your Email</label>
                        <input type="email" class="form-control" value="john.doe@student.example.com" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Your Class</label>
                        <input type="text" class="form-control" value="Class 10" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Message Type <span class="text-danger">*</span></label>
                    <select class="form-select" required>
                        <option value="">Select message type...</option>
                        <option value="academic">Academic Inquiry</option>
                        <option value="results">Results & Grades</option>
                        <option value="attendance">Attendance Issue</option>
                        <option value="fees" selected>Fees & Payments</option>
                        <option value="certificate">Certificate Request</option>
                        <option value="documents">Document Request</option>
                        <option value="facilities">Facilities Issue</option>
                        <option value="suggestion">Suggestion</option>
                        <option value="complaint">Complaint</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Subject <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter message subject..." value="Fee Payment Receipt Request" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Priority</label>
                    <select class="form-select">
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="6" placeholder="Type your message here..." required>Dear Administration Team,

I am writing to request a receipt for my recent fee payment. I paid the semester fee on January 15, 2024 via credit card (Transaction ID: TXN789456123), but I haven't received the official receipt yet.

Payment Details:
- Student ID: #ST001
- Amount Paid: $500
- Payment Date: January 15, 2024
- Payment Method: Credit Card (**** **** **** 1234)

Could you please send me the official receipt via email or make it available for download in my student portal? I need it for my family's financial records.

Thank you for your assistance.

Best regards,
John Doe
Class 10</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Attach File (Optional)</label>
                    <div class="border rounded p-3 bg-light">
                        <div class="text-center mb-2">
                            <i class="fas fa-cloud-upload-alt fa-2x text-muted"></i>
                            <p class="mb-1">Drag & drop files or <a href="#" class="text-decoration-none">browse</a></p>
                            <input type="file" class="form-control d-none" id="attachmentFile" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                            <label for="attachmentFile" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-upload me-1"></i> Choose Files
                            </label>
                            <small class="d-block text-muted mt-1">Max file size: 5MB each. Accepted: PDF, DOC, JPG, PNG</small>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ccCopy" checked>
                        <label class="form-check-label" for="ccCopy">
                            Send a copy of this message to my email
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="followUp" checked>
                        <label class="form-check-label" for="followUp">
                            Send me follow-up notifications
                        </label>
                    </div>
                </div>

                <div class="alert alert-info mb-4">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Response Time:</strong> The administration team typically responds within 24-48 hours during business days (Monday to Friday, 9 AM - 5 PM).
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#sendModal">
                        <i class="fas fa-paper-plane me-2"></i> Send Message
                    </button>
                    <button type="reset" class="btn btn-outline-secondary px-4">
                        <i class="fas fa-redo me-2"></i> Clear Form
                    </button>
                    <button type="button" class="btn btn-outline-info px-4">
                        <i class="fas fa-save me-2"></i> Save Draft
                    </button>
                </div>
            </form>
        </div>

        <!-- Recent Messages -->
        <div class="content-card">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-history me-2 text-warning"></i> Recent Messages
            </h5>
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                    <div>
                        <h6 class="mb-1">Result Correction Request</h6>
                        <small class="text-muted">Sent: Jan 12, 2024</small>
                        <span class="badge bg-success ms-2">Resolved</span>
                    </div>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                    <div>
                        <h6 class="mb-1">Library Book Extension</h6>
                        <small class="text-muted">Sent: Jan 5, 2024</small>
                        <span class="badge bg-success ms-2">Resolved</span>
                    </div>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-3">
                    <div>
                        <h6 class="mb-1">Leave Application</h6>
                        <small class="text-muted">Sent: Dec 20, 2023</small>
                        <span class="badge bg-success ms-2">Approved</span>
                    </div>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Info & FAQ -->
    <div class="col-md-4">
        <!-- Contact Information -->
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-info-circle me-2 text-success"></i> Contact Information
            </h5>
            <div class="mb-3">
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3 text-primary">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Main Office Address</h6>
                        <p class="text-muted mb-0 small">123 Education Street, Academic City, State 54321, United States</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3 text-primary">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Phone Numbers</h6>
                        <p class="text-muted mb-0 small">Main: +1 (555) 123-4567</p>
                        <p class="text-muted mb-0 small">Support: +1 (555) 987-6543</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3 text-primary">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Addresses</h6>
                        <p class="text-muted mb-0 small">General: admin@example.edu</p>
                        <p class="text-muted mb-0 small">Academic: academics@example.edu</p>
                        <p class="text-muted mb-0 small">Finance: finance@example.edu</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="me-3 text-primary">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Office Hours</h6>
                        <p class="text-muted mb-0 small">Monday - Friday: 8:00 AM - 5:00 PM</p>
                        <p class="text-muted mb-0 small">Saturday: 9:00 AM - 1:00 PM</p>
                        <p class="text-muted mb-0 small">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="content-card mb-4">
            <h5 class="fw-bold mb-4">
                <i class="fas fa-link me-2 text-info"></i> Quick Links
            </h5>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary text-start">
                    <i class="fas fa-download me-2"></i> Download Forms
                </button>
                <button class="btn btn-outline-primary text-start">
                    <i class="fas fa-file-alt me-2"></i> View FAQs
                </button>
                <button class="btn btn-outline-primary text-start">
                    <i class="fas fa-calendar me-2"></i> Office Calendar
                </button>
                <button class="btn btn-outline-primary text-start">
                    <i class="fas fa-question-circle me-2"></i> Live Chat Support
                </button>
            </div>
        </div>

        <!-- Response Time -->
        <div class="content-card">
            <h5 class="fw-bold mb-3">
                <i class="fas fa-bolt me-2 text-warning"></i> Expected Response Time
            </h5>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Urgent Issues</span>
                    <span class="badge bg-danger">4-6 hours</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-danger" style="width: 100%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Academic Issues</span>
                    <span class="badge bg-warning">24 hours</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-warning" style="width: 80%"></div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">General Inquiries</span>
                    <span class="badge bg-primary">48 hours</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" style="width: 60%"></div>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small">Document Requests</span>
                    <span class="badge bg-info">3-5 days</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-info" style="width: 40%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Send Confirmation Modal -->
<div class="modal fade" id="sendModal" tabindex="-1" aria-labelledby="sendModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title text-primary" id="sendModalLabel">
                    <i class="fas fa-paper-plane me-2"></i> Confirm Message
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4">
                <div class="text-center mb-3">
                    <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                    <h5>Send Message to Admin?</h5>
                </div>
                <div class="text-center">
                    <p>You are about to send a message with the following details:</p>
                    <div class="alert alert-light">
                        <strong>Type:</strong> Fees & Payments<br>
                        <strong>Subject:</strong> Fee Payment Receipt Request<br>
                        <strong>Priority:</strong> Medium
                    </div>
                    <p class="text-muted small">Your message will be assigned a ticket number for tracking.</p>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes, Send Message</button>
            </div>
        </div>
    </div>
</div>
@endsection