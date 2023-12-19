@extends('layoutProfile')

@section('content')


            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="col-xs-12 resume-title">												
                                <span class="fa fa-suitcase" style="margin-right:5px;color:#333"></span>
                                Experience
                                <a href="" class="add-experience" title="Add Experience" data-toggle="modal" data-target="#addExperienceModal">
                                    <i class="fa fa-plus-square fa-plus-square-custom"></i>
                                </a>
                            </div>
                        </div>
                        @include('popup.experience.addExperience', ['experiences' => $experiences])


                        @if (!$experiences->isEmpty())
                            @foreach ($experiences as $experience)
                                <div class="job-experience">
                                    <div class="col-xs-12">
                                        <div class="resume-company">
                                            <span class="companyName">
                                                <strong>{{ $experience->companyName }}</strong>
                                                |
                                                @php
                                                    $start = \Carbon\Carbon::parse($experience->yosStart);
                                                    $end = ($experience->yosEnd === '0001-01-01') ? \Carbon\Carbon::now() : \Carbon\Carbon::parse($experience->yosEnd);
                                                    $length = $start->diff($end);
                                                    $years = $length->format('%y');
                                                    $months = $length->format('%m');
                                                @endphp

                                                <span>
                                                    {{ \Carbon\Carbon::parse($experience->yosStart)->format('M Y') }} -
                                                    @if($experience->yosEnd === '0001-01-01')
                                                        Present
                                                    @else
                                                        {{ \Carbon\Carbon::parse($experience->yosEnd)->format('M Y') }}
                                                    @endif
                                                </span>
                                                <span>
                                                    (
                                                    @if($years > 0)
                                                        {{ $years }} {{ $years > 1 ? 'years' : 'year' }}
                                                    @endif
                                                    @if($months > 0)
                                                        {{ $months }} {{ $months > 1 ? 'months' : 'month' }}
                                                    @endif
                                                    )
                                                </span>

                                            </span>
                                            <a href="{{ route('experience.edit', $experience->id) }}" class="delete-experience" data-toggle="modal" data-target="#deleteExperienceModal-{{ $experience->id }}">
                                                <span class="fa fa-trash-o fa-trash-o-custom visible-lg visible-md"></span>
                                            </a>                                                                                                                                                                                                                                                                                                                                                        
                                            <a href="{{ route('experience.edit', $experience->id) }}" class="edit-experience" data-toggle="modal" data-target="#editExperienceModal-{{ $experience->id }}">
                                                <span class="fa fa-pencil fa-pencil-custom"></span>
                                            </a>                                         
                                            
                                        </div>
                                        <div class="companyAddress">
                                            <span>{{ $experience->companyAddress }}</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 form-margin form-horizontal-custom">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-position">
                                                            &emsp; Firts Job Position :
                                                            <span class="startJobPosition">{{ $experience->posStart }}</span>
                                                        </div>
                                                        <div class="resume-job-position">
                                                            &emsp; Last Job Position :
                                                            <span class="endJobPosition">{{ $experience->posEnd }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-salary">
                                                            &emsp; First Salary/Last Salary :
                                                            <span class="startSalary">Rp{{ number_format($experience->salaryStart) }}</span>
                                                            <span class="salarySeparator">to</span>
                                                            <span class="endSalary">Rp{{ number_format($experience->salaryEnd) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-salary">
                                                            &emsp; Reason of leaving job :
                                                            <span class="leavingReason">{!! nl2br(e($experience->leavingReason)) !!}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-description">
                                                            &emsp; Job Description :
                                                        </div>
                                                        <div class="col-xs-12" style="margin-left: 40px">
                                                            {!! nl2br(e($experience->jobDesc)) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-salary">
                                                            &emsp; Project :
                                                        </div>
                                                        <div class="col-xs-12" style="margin-left: 40px">
                                                            {!! nl2br(e($experience->project)) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="resume-job-salary">
                                                            &emsp; Other Benefits :
                                                        </div>
                                                        <div class="col-xs-12" style="margin-left: 40px">
                                                            {!! nl2br(e($experience->benefit)) !!}
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>            
                                        </div>
                                    </div>
                                </div>

                                @include('popup.experience.editExperience', ['experience' => $experience])
                                @include('popup.experience.deleteExperience', ['experience' => $experience])

                            @endforeach    
                        @endif


                        <div class="row">
                            <div class="col-md-12">
                                <hr class="tall">
                            </div>
                        </div>
                        
                        
                        

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        

                        <script>
                            $(document).ready(function() {
                                var showAddModal = {{ session('showAddModal') ? 'true' : 'false' }};
                        
                                if (showAddModal) {
                                    $('#addExperienceModal').modal('show');
                                }
                        
                                $('#addExperienceModal').on('hidden.bs.modal', function() {
                                    // Clear the error message
                                    $('.alert-danger').remove();
                                });
                            });
                        </script>
                        
                        <script>
                            $(document).ready(function() {
                                var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                                var editExperienceId = {{ session('editExperienceId') ?: 'null' }};
                        
                                if (showEditModal && editExperienceId) {
                                    $('#editExperienceModal-' + editExperienceId).modal('show');
                                }
                        
                                $('[id^="editExperienceModal-"]').on('hidden.bs.modal', function() {
                                    // Clear the error message
                                    $('.alert-danger').remove();
                                });
                            });
                        </script>
                        
                        

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var checkbox = document.querySelector('input[name="yosPresent"]');
                                var monthSelect = document.querySelector('select[name="yosEndMonth"]');
                                var yearSelect = document.querySelector('select[name="yosEndYear"]');

                                // Initialize the state of the month and year select inputs
                                toggleYearMonthInputs();

                                // Attach the event listener to the checkbox
                                checkbox.addEventListener('change', toggleYearMonthInputs);

                                function toggleYearMonthInputs() {
                                    monthSelect.disabled = checkbox.checked;
                                    yearSelect.disabled = checkbox.checked;

                                    if (checkbox.checked) {
                                        monthSelect.value = ''; // Set month value to empty string
                                        yearSelect.value = ''; // Set year value to empty string
                                    }
                                }
                            });
                        </script>






    

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var editForms = document.querySelectorAll('.edit-form');

                                editForms.forEach(function(form) {
                                    var checkbox = form.querySelector('input[name^="edit_yosPresent"]');
                                    var monthSelect = form.querySelector('select[name^="edit_yosEndMonth"]');
                                    var yearSelect = form.querySelector('select[name^="edit_yosEndYear"]');

                                    toggleYearMonthInputs(checkbox, monthSelect, yearSelect);

                                    checkbox.addEventListener('change', function() {
                                        toggleYearMonthInputs(checkbox, monthSelect, yearSelect);
                                    });
                                });

                                function toggleYearMonthInputs(checkbox, monthSelect, yearSelect) {
                                    monthSelect.disabled = checkbox.checked;
                                    yearSelect.disabled = checkbox.checked;

                                    if (checkbox.checked) {
                                        monthSelect.value = '';
                                        yearSelect.value = '';
                                    }
                                }
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                $('.delete-experience').click(function(e) {
                                    e.preventDefault();
                                    var experienceId = $(this).data('id');
                                    var deleteExperienceModal = $('#deleteExperienceModal-' + experienceId);
                                    deleteExperienceModal.modal('show');
                                });
                            });
                        </script>


                    </div> <!-- end of col-lg-12 -->
                </div> <!-- end of row -->
            </div> <!-- end of col-md-9 -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
@endsection