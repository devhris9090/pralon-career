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
                        <span class="fa fa-user" style="margin-right:5px;color:#333"></span>
                        About Me
                        <a href="#" class="edit-profile" data-toggle="modal" data-target="#editProfileModal">
                            <span class="fa fa-pencil fa-pencil-custom"></span>
                        </a>
                    </div>
                </div>
                
                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">Name</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->full_name }}</div>
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">Contact No.</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->phone }}</div>
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">Email</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->email }}</div>
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">Address</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->address }}</div>
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">Place / Date of Birth</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->birthplace }} / {{ date('d-m-Y', strtotime($data->birthdate)) }} </div>
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">ID Card Number</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->idnumber }}</div>
                    </div>
                </div>

                @include('popup.aboutme.updateAboutMe', ['data' => $data])

                <div class="row">
                    <div class="col-md-12">
                        <hr class="tall">
                    </div>
                </div>

                

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <script>
                    $(document).ready(function() {
                        var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                
                        if (showEditModal) {
                            $('#editProfileModal').modal('show');
                        }
                    });
                </script>

                

                <script>
                    document.getElementById('state').addEventListener('change', () => {
                        var selectedStateId = document.getElementById('state').value;
                        var citiesSelect = document.getElementById('city');

                        // Enable the city select
                        citiesSelect.disabled = false;

                        // Clear previous city options
                        citiesSelect.innerHTML = '<option value="">Select City</option>';

                        // Filter cities based on the selected state
                        var filteredCities = Object.values(@json($cities->where('status', '=', '2')->toArray()));

                        // Add filtered cities to the city select
                        filteredCities.forEach(function (city) {
                            if (city.state_id == selectedStateId) {
                                var option = document.createElement('option');
                                option.value = city.city_id;
                                option.innerText = city.city_name;
                                citiesSelect.appendChild(option);
                            }
                        });
                    });

                    // Select the state if it is not null
                    var stateId = "{{ $data->state_id }}";
                    var cityId = "{{ $data->city_id }}";
                    if (stateId !== "") {
                        var stateSelect = document.getElementById('state');
                        stateSelect.value = stateId;
                        stateSelect.dispatchEvent(new Event('change'));
                        if (cityId !== "") {
                            var citySelect = document.getElementById('city');
                            citySelect.value = cityId;
                        }
                    }
                </script>


                <script>
                    function previewPhoto(event) {
                        var input = event.target;
                        if (input.files && input.files[0]) {
                            var file = input.files[0];
                            var maxSizeInBytes = 5 * 1024 * 1024; // 5MB in bytes

                            // Check if the selected photo exceeds the maximum allowed size
                            if (file.size > maxSizeInBytes) {
                                // Display an alert to the user
                                alert("The selected photo exceeds the maximum allowed size of 5MB. Please choose a smaller photo.");

                                // Clear the file input so the user can select another file
                                input.value = '';
                                return; // Stop further execution to prevent preview
                            }

                            var reader = new FileReader();

                            reader.onload = function (e) {
                                var previewImg = document.getElementById("photo-preview");
                                previewImg.src = e.target.result;
                                previewImg.style.display = "block";
                            };

                            reader.readAsDataURL(file);
                        }
                    }
                </script>



            </div> <!-- end of col-lg-12 -->
        </div> <!-- end of row -->
    </div> <!-- end of col-md-9 -->
</div> <!-- end of row -->
</div>
    
@endsection