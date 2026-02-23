@extends('layouts.student')

@section('title', 'Complete Registration')

@section('content')
    <div class="page-header text-center">
        <h1><i class="fas fa-user-check me-2"></i> Complete Your Registration</h1>
        <p>Please provide your additional information to complete the registration process</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="content-card">
                {{-- <!-- Progress Steps -->
                <div class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="text-center flex-grow-1">
                            <div class="step-indicator active mx-auto mb-2">1</div>
                            <small class="fw-bold text-primary">Account Created</small>
                        </div>
                        <div class="step-line flex-grow-1"></div>
                        <div class="text-center flex-grow-1">
                            <div class="step-indicator active mx-auto mb-2">2</div>
                            <small class="fw-bold text-primary">Personal Details</small>
                        </div>
                        <div class="step-line flex-grow-1"></div>
                        <div class="text-center flex-grow-1">
                            <div class="step-indicator mx-auto mb-2">3</div>
                            <small class="text-muted">Review & Submit</small>
                        </div>
                    </div>
                </div> --}}

                <form action="{{ route('student.registration.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="section-card mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="fas fa-user me-2 text-primary"></i> Personal Information
                        </h5>
                        
                        <div class="row">
                            <div class=" mb-3">
                                <label class="form-label fw-bold">
                                    Full Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       name="full_name" 
                                       class="form-control @error('full_name') is-invalid @enderror" 
                                       value="{{ old('full_name', $user->name ?? '') }}"
                                       placeholder="Enter your full name">
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            {{-- <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Last Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       name="last_name" 
                                       class="form-control @error('last_name') is-invalid @enderror" 
                                       value="{{ old('last_name', $user->last_name ?? '') }}"
                                       placeholder="Enter your last name">
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Date of Birth <span class="text-danger">*</span>
                                </label>
                                <input type="date" 
                                       name="dob" 
                                       class="form-control @error('dob') is-invalid @enderror" 
                                       value="{{ old('dob') }}"
                                       max="{{ date('Y-m-d', strtotime('-5 years')) }}">
                                @error('dob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Gender <span class="text-danger">*</span>
                                </label>
                                <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Blood Group
                                </label>
                                <select name="blood_group" class="form-select @error('blood_group') is-invalid @enderror">
                                    <option value="">Select Blood Group</option>
                                    <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                    <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                    <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                    <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                    <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                    <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                    <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                </select>
                                @error('blood_group')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Phone Number <span class="text-danger">*</span>
                                </label>
                                <input type="tel" 
                                       name="phone" 
                                       class="form-control @error('phone') is-invalid @enderror" 
                                       value="{{ old('phone') }}"
                                       placeholder="Enter your phone number">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Address <span class="text-danger">*</span>
                            </label>
                            <textarea name="address" 
                                      class="form-control @error('address') is-invalid @enderror" 
                                      rows="3"
                                      placeholder="Enter your complete address">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Academic Information Section -->
                    <div class="section-card mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="fas fa-graduation-cap me-2 text-success"></i> Academic Information
                        </h5>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Class/Grade <span class="text-danger">*</span>
                                </label>
                                <select name="class" class="form-select @error('class') is-invalid @enderror">
                                    <option value="">Select Class</option>
                                    @for($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}" {{ old('class') == $i ? 'selected' : '' }}>
                                            Class {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                @error('class')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Section
                                </label>
                                <select name="section" class="form-select @error('section') is-invalid @enderror">
                                    <option value="">Select Section</option>
                                    <option value="A" {{ old('section') == 'A' ? 'selected' : '' }}>Section A</option>
                                    <option value="B" {{ old('section') == 'B' ? 'selected' : '' }}>Section B</option>
                                    <option value="C" {{ old('section') == 'C' ? 'selected' : '' }}>Section C</option>
                                </select>
                                @error('section')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Previous School (if any)
                            </label>
                            <input type="text" 
                                   name="previous_school" 
                                   class="form-control @error('previous_school') is-invalid @enderror" 
                                   value="{{ old('previous_school') }}"
                                   placeholder="Enter your previous school name">
                            @error('previous_school')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Guardian Information Section -->
                    <div class="section-card mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="fas fa-users me-2 text-info"></i> Guardian Information
                        </h5>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Guardian Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" 
                                       name="guardian_name" 
                                       class="form-control @error('guardian_name') is-invalid @enderror" 
                                       value="{{ old('guardian_name') }}"
                                       placeholder="Enter guardian's full name">
                                @error('guardian_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Relationship <span class="text-danger">*</span>
                                </label>
                                <select name="guardian_relationship" class="form-select @error('guardian_relationship') is-invalid @enderror">
                                    <option value="">Select Relationship</option>
                                    <option value="father" {{ old('guardian_relationship') == 'father' ? 'selected' : '' }}>Father</option>
                                    <option value="mother" {{ old('guardian_relationship') == 'mother' ? 'selected' : '' }}>Mother</option>
                                    <option value="guardian" {{ old('guardian_relationship') == 'guardian' ? 'selected' : '' }}>Legal Guardian</option>
                                    <option value="other" {{ old('guardian_relationship') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('guardian_relationship')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Guardian Phone <span class="text-danger">*</span>
                                </label>
                                <input type="tel" 
                                       name="guardian_phone" 
                                       class="form-control @error('guardian_phone') is-invalid @enderror" 
                                       value="{{ old('guardian_phone') }}"
                                       placeholder="Enter guardian's phone number">
                                @error('guardian_phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">
                                    Guardian Email
                                </label>
                                <input type="email" 
                                       name="guardian_email" 
                                       class="form-control @error('guardian_email') is-invalid @enderror" 
                                       value="{{ old('guardian_email') }}"
                                       placeholder="Enter guardian's email">
                                @error('guardian_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Guardian Occupation
                            </label>
                            <input type="text" 
                                   name="guardian_occupation" 
                                   class="form-control @error('guardian_occupation') is-invalid @enderror" 
                                   value="{{ old('guardian_occupation') }}"
                                   placeholder="Enter guardian's occupation">
                            @error('guardian_occupation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Medical Information Section -->
                    <div class="section-card mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="fas fa-file-medical me-2 text-danger"></i> Medical Information
                        </h5>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Medical Conditions
                            </label>
                            <textarea name="medical_conditions" 
                                      class="form-control @error('medical_conditions') is-invalid @enderror" 
                                      rows="2"
                                      placeholder="List any medical conditions (if none, leave blank)">{{ old('medical_conditions') }}</textarea>
                            @error('medical_conditions')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Allergies
                            </label>
                            <textarea name="allergies" 
                                      class="form-control @error('allergies') is-invalid @enderror" 
                                      rows="2"
                                      placeholder="List any allergies (if none, leave blank)">{{ old('allergies') }}</textarea>
                            @error('allergies')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Emergency Contact Name
                            </label>
                            <input type="text" 
                                   name="emergency_contact_name" 
                                   class="form-control @error('emergency_contact_name') is-invalid @enderror" 
                                   value="{{ old('emergency_contact_name') }}"
                                   placeholder="Enter emergency contact name">
                            @error('emergency_contact_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Emergency Contact Number
                            </label>
                            <input type="tel" 
                                   name="emergency_contact_number" 
                                   class="form-control @error('emergency_contact_number') is-invalid @enderror" 
                                   value="{{ old('emergency_contact_number') }}"
                                   placeholder="Enter emergency contact number">
                            @error('emergency_contact_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Documents Section -->
                    <div class="section-card mb-4">
                        <h5 class="fw-bold mb-4">
                            <i class="fas fa-file-upload me-2 text-warning"></i> Required Documents
                        </h5>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Profile Photo
                            </label>
                            <input type="file" 
                                   name="profile_photo" 
                                   class="form-control @error('profile_photo') is-invalid @enderror" 
                                   accept="image/*"
                                   required
                                   >
                            <small class="text-muted">Accepted formats: JPG, PNG (Max size: 2MB)</small>
                            @error('profile_photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Birth Certificate
                            </label>
                            <input type="file" 
                                   name="birth_certificate" 
                                   class="form-control @error('birth_certificate') is-invalid @enderror" 
                                   accept=".pdf,.jpg,.jpeg,.png">
                            <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max size: 2MB)</small>
                            @error('birth_certificate')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Previous Academic Records (if available)
                            </label>
                            <input type="file" 
                                   name="academic_records" 
                                   class="form-control @error('academic_records') is-invalid @enderror" 
                                   accept=".pdf,.jpg,.jpeg,.png">
                            <small class="text-muted">Accepted formats: PDF, JPG, PNG (Max size: 2MB)</small>
                            @error('academic_records')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" 
                                   name="terms" 
                                   class="form-check-input @error('terms') is-invalid @enderror" 
                                   id="terms" 
                                   {{ old('terms') ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="terms">
                                I confirm that all the information provided is correct and complete. <span class="text-danger">*</span>
                            </label>
                            @error('terms')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('student.profile') }}" class="btn btn-secondary">
                            <i class="fas fa-times me-2"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-check-circle me-2"></i> Complete Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .step-indicator {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #e9ecef;
        color: #6c757d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        border: 2px solid transparent;
    }
    
    .step-indicator.active {
        background-color: #667eea;
        color: white;
        border-color: #667eea;
    }
    
    .step-line {
        height: 2px;
        background-color: #e9ecef;
        margin: 0 10px;
    }
    
    .step-line:first-of-type,
    .step-line:last-of-type {
        flex: 1;
    }
    
    .section-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e9ecef;
    }
    
    .form-label {
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    
    .form-control:focus,
    .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 10px 30px;
    }
    
    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }
</style>
@endpush

@push('scripts')
<script>
    // Preview uploaded image
    document.querySelector('input[name="profile_photo"]').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // You can add image preview functionality here
                console.log('Image loaded');
            }
            reader.readAsDataURL(file);
        }
    });

    // Form validation before submit
    document.querySelector('form').addEventListener('submit', function(e) {
        const requiredFields = document.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
</script>
@endpush