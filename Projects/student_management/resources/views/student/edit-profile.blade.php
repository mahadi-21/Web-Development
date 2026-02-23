@extends('layouts.student')

@section('title', 'Edit Profile')

@section('content')
<div class="page-header">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1><i class="fas fa-edit me-2"></i> Edit Profile</h1>
            <p>Update your personal and academic information</p>
        </div>
        <a href="{{ route('student.profile') }}" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i> Back to Profile
        </a>
    </div>
</div>

<form action="{{ route('student.update-profile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <!-- Profile Photo Section -->
        <div class="col-md-4 mb-4">
            <div class="content-card">
                <h5 class="fw-bold mb-4">
                    <i class="fas fa-camera me-2 text-primary"></i> Profile Photo
                </h5>
                
                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&size=150&background=667eea&color=fff" 
                             alt="Profile Preview" 
                             id="profilePreview"
                             class="rounded-circle mb-3" 
                             style="width: 150px; height: 150px; border: 5px solid #667eea; object-fit: cover;">
                        <label for="profilePhoto" class="position-absolute bottom-0 end-0 mb-2 me-2">
                            <span class="btn btn-sm btn-primary rounded-circle p-2" style="cursor: pointer;">
                                <i class="fas fa-camera"></i>
                            </span>
                        </label>
                    </div>
                    <input type="file" class="d-none" id="profilePhoto" name="profile_photo" accept="image/*">
                    <p class="small text-muted mt-2">Click the camera icon to change photo</p>
                </div>

                <!-- Quick Tips -->
                <div class="alert alert-info bg-light border-0" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    <small>Upload a clear, professional photo for your profile. Max size: 2MB</small>
                </div>
            </div>

            <!-- Profile Completion -->
            <div class="content-card mt-4">
                <h6 class="fw-bold mb-3">
                    <i class="fas fa-check-circle me-2 text-success"></i> Profile Completion
                </h6>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Personal Info</small>
                        <small class="fw-bold text-success">100%</small>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Contact Details</small>
                        <small class="fw-bold text-success">100%</small>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Guardian Info</small>
                        <small class="fw-bold text-warning">75%</small>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between mb-1">
                        <small>Medical Info</small>
                        <small class="fw-bold text-danger">50%</small>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-danger" style="width: 50%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Edit Form -->
        <div class="col-md-8 mb-4">
            <!-- Personal Information -->
            <div class="content-card mb-4">
                <h5 class="fw-bold mb-4">
                    <i class="fas fa-user me-2 text-primary"></i> Personal Information
                </h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            First Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                               name="first_name" value="John" required>
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Last Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                               name="last_name" value="Doe" required>
                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Date of Birth <span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" 
                               name="dob" value="2008-03-15" required>
                        @error('dob')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Gender</label>
                        <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer_not_to_say">Prefer not to say</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Blood Group</label>
                    <select class="form-select @error('blood_group') is-invalid @enderror" name="blood_group">
                        <option value="A+" selected>A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    @error('blood_group')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Contact Information -->
            <div class="content-card mb-4">
                <h5 class="fw-bold mb-4">
                    <i class="fas fa-address-book me-2 text-success"></i> Contact Information
                </h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Email Address <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="john.doe@student.example.com" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">This will be used for login</small>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Phone Number <span class="text-danger">*</span>
                        </label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                               name="phone" value="+1 (555) 123-4567" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Address <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control @error('address') is-invalid @enderror" 
                              name="address" rows="3" required>123 Main Street, New York, NY 10001, United States</textarea>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Guardian Information -->
            <div class="content-card mb-4">
                <h5 class="fw-bold mb-4">
                    <i class="fas fa-users me-2 text-info"></i> Guardian Information
                </h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Guardian Name</label>
                        <input type="text" class="form-control @error('guardian_name') is-invalid @enderror" 
                               name="guardian_name" value="Robert Doe">
                        @error('guardian_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Relationship</label>
                        <input type="text" class="form-control @error('guardian_relation') is-invalid @enderror" 
                               name="guardian_relation" value="Father">
                        @error('guardian_relation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Guardian Phone</label>
                        <input type="tel" class="form-control @error('guardian_phone') is-invalid @enderror" 
                               name="guardian_phone" value="+1 (555) 987-6543">
                        @error('guardian_phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Guardian Email</label>
                        <input type="email" class="form-control @error('guardian_email') is-invalid @enderror" 
                               name="guardian_email" value="robert.doe@example.com">
                        @error('guardian_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sameAddress" checked>
                        <label class="form-check-label" for="sameAddress">
                            Same as student address
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Guardian Address</label>
                    <textarea class="form-control @error('guardian_address') is-invalid @enderror" 
                              name="guardian_address" rows="2">123 Main Street, New York, NY 10001, United States</textarea>
                    @error('guardian_address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Guardian Occupation</label>
                    <input type="text" class="form-control @error('guardian_occupation') is-invalid @enderror" 
                           name="guardian_occupation" value="Software Engineer">
                    @error('guardian_occupation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Medical Information -->
            <div class="content-card mb-4">
                <h5 class="fw-bold mb-4">
                    <i class="fas fa-file-medical me-2 text-danger"></i> Medical Information
                </h5>

                <div class="mb-3">
                    <label class="form-label fw-bold">Medical Conditions</label>
                    <textarea class="form-control @error('medical_conditions') is-invalid @enderror" 
                              name="medical_conditions" rows="2">No known medical conditions</textarea>
                    @error('medical_conditions')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Allergies</label>
                    <textarea class="form-control @error('allergies') is-invalid @enderror" 
                              name="allergies" rows="2">None</textarea>
                    @error('allergies')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Emergency Contact</label>
                    <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror" 
                           name="emergency_contact" value="+1 (555) 987-6543">
                    @error('emergency_contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Form Actions -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('student.profile') }}" class="btn btn-secondary">
                    <i class="fas fa-times me-2"></i> Cancel
                </a>
                <div>
                    <button type="button" class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                        <i class="fas fa-key me-2"></i> Change Password
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i> Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="changePasswordModalLabel">
                    <i class="fas fa-key me-2 text-warning"></i> Change Password
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Current Password</label>
                        <input type="password" class="form-control" name="current_password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">New Password</label>
                        <input type="password" class="form-control" name="new_password" required>
                        <small class="text-muted">Minimum 8 characters with at least one number and one letter</small>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Confirm New Password</label>
                        <input type="password" class="form-control" name="new_password_confirmation" required>
                    </div>
                    
                    <div class="alert alert-warning bg-light border-0" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <small>After changing your password, you'll need to use it on your next login.</small>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Profile photo preview
    document.getElementById('profilePhoto').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profilePreview').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Same address checkbox
    document.getElementById('sameAddress').addEventListener('change', function(e) {
        if (e.target.checked) {
            const studentAddress = document.querySelector('textarea[name="address"]').value;
            document.querySelector('textarea[name="guardian_address"]').value = studentAddress;
        }
    });
</script>
@endpush
@endsection