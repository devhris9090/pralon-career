@extends('layoutProfile')



@section('content')
        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-xs-12 resume-title">												
                            <span class="fa fa-mortar-board" style="margin-right:5px;color:#333"></span>
                            Education
                            <a href="" class="add-education" title="Add Education" data-toggle="modal" data-target="#addEducationModal">
                                <i class="fa fa-plus-square fa-plus-square-custom"></i>
                            </a>
                        </div>
                    </div>
                    @include('popup.education.addEducation', ['educations' => $educations])


                    @if (!$educations->isEmpty())
                        @foreach ($educations as $education)
                            <div class="col-xs-12">
                                <span class="resume-title">{{ $education->institutionName }}</span>
                                <a href="{{ route('education.edit', $education->id) }}" class="delete-education" data-toggle="modal" data-target="#deleteEducationModal-{{ $education->id }}">
                                    <span class="fa fa-trash-o fa-trash-o-custom visible-lg visible-md"></span>
                                </a> 
                                <a href="{{ route('education.edit', $education->id) }}" class="edit-education" data-toggle="modal" data-target="#editEducationModal-{{ $education->id }}">
                                    <span class="fa fa-pencil fa-pencil-custom"></span>
                                </a>
                                
                            </div>
                            <div class="col-xs-12">
                                <span class="resume-sub-title">
                                    {{ $education->degree }} {{ $education->major }} | {{ date('Y', strtotime($education->startYear)) }} - {{ date('Y', strtotime($education->endYear)) }}
                                </span>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="resume-job-description">
                                            &emsp; Achievement :
                                        </div>
                                        <div class="col-xs-12" style="margin-left: 40px">
                                            {!! nl2br(e($education->achievement)) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr class="tall">
                                    </div>
                                </div>
                            </div>

                            @include('popup.education.editEducation', ['educations' => $educations])
                            @include('popup.education.deleteEducation', ['educations' => $educations])

                        @endforeach
                    @endif
                    

                    



                    


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    
                    

                    <script>
                        $(document).ready(function() {
                            var showAddModal = {{ session('showAddModal') ? 'true' : 'false' }};

                            if (showAddModal) {
                                $('#addEducationModal').modal('show');
                            }

                            $('#addEducationModal').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>

                    <script>
                        $(document).ready(function() {
                            var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                            var editEducationId = {{ session('editEducationId') ?: 'null' }};

                            if (showEditModal && editEducationId) {
                                $('#editEducationModal-' + editEducationId).modal('show');
                            }

                            $('[id^="editEducationModal-"]').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>

                    <script>
                        var inputElement = document.getElementById("edit_institutionName");
                        var institutionListElement = document.getElementById("institutionList");

                        // Event listener for input changes
                        inputElement.addEventListener("input", function() {
                            var inputValue = inputElement.value.trim();

                            // Make an AJAX request to search for matching institutions
                            // Replace the URL with the appropriate route for your searchInstitutions method
                            var url = "/search-institutions?query=" + encodeURIComponent(inputValue);
                            fetch(url)
                                .then(function(response) {
                                    return response.json();
                                })
                                .then(function(data) {
                                    // Update the dropdown list with search results
                                    institutionListElement.innerHTML = "";
                                    data.forEach(function(institution) {
                                        var optionElement = document.createElement("option");
                                        optionElement.value = institution.institutionName;
                                        institutionListElement.appendChild(optionElement);
                                    });
                                })
                                .catch(function(error) {
                                    console.log("Error searching institutions: ", error);
                                });
                        });

                    </script>

                    <script>
                        // Function to handle degree change and initial value check
                        function handleDegreeChange(degreeInput, majorInput) {
                            if (degreeInput.value === 'SD' || degreeInput.value === 'SMP') {
                                majorInput.setAttribute('disabled', 'disabled');
                                majorInput.value = '';
                            } else {
                                majorInput.removeAttribute('disabled');
                            }
                        }

                        // Event listener for 'edit_degree' field
                        var editDegreeInput = document.getElementById('edit_degree');
                        var editMajorInput = document.getElementById('edit_major');
                        editDegreeInput.addEventListener('change', function() {
                            handleDegreeChange(editDegreeInput, editMajorInput);
                        });

                        // Initial value check for 'edit_degree' field on page load
                        window.addEventListener('DOMContentLoaded', function() {
                            handleDegreeChange(editDegreeInput, editMajorInput);
                        });

                        // Event listener for 'degree' field
                        var degreeInput = document.getElementById('degree');
                        var majorInput = document.getElementById('major');
                        degreeInput.addEventListener('change', function() {
                            handleDegreeChange(degreeInput, majorInput);
                        });

                        // Initial value check for 'degree' field on page load
                        window.addEventListener('DOMContentLoaded', function() {
                            handleDegreeChange(degreeInput, majorInput);
                        });
                    </script>

                    

                    <script>
                        $(document).ready(function() {
                            // Get the necessary elements
                            var degreeSelects = $('[name^=edit_degree]');
                            var majorInputs = $('[name^=edit_major]');
                    
                            // Function to enable/disable the major input based on degree selection
                            function toggleMajorInput() {
                                degreeSelects.each(function(index) {
                                    var selectedDegree = $(this).val();
                                    var correspondingMajorInput = majorInputs.eq(index);
                    
                                    if (selectedDegree === 'SD' || selectedDegree === 'SMP') {
                                        correspondingMajorInput.prop('disabled', true);
                                        correspondingMajorInput.val('');
                                    } else {
                                        correspondingMajorInput.prop('disabled', false);
                                    }
                                });
                            }
                    
                            // Initial state on page load
                            toggleMajorInput();
                    
                            // Listen for changes in the degree select options
                            degreeSelects.on('change', function() {
                                toggleMajorInput();
                            });
                        });
                    </script>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of col-md-9 -->
    </div> <!-- end of row -->
</div> <!-- end of container -->


@endsection