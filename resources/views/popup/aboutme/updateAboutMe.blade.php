<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Update Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;">&times;</span>
                </button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
                <!-- Your form content here -->
                <form action="{{ route('aboutme.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="photo">Photo</label>
                        <div class="col-md-6">
                            <input type="file" name="photo" id="photo" class="form-control" accept="image/*" onchange="previewPhoto(event)">
                            @if ($data->photo)
                                <img id="photo-preview" src="{{ asset('storage/' . $data->photo) }}" alt="Preview" style="max-width: 200px; margin-top: 10px; display: block;">
                            @else
                                <img id="photo-preview" src="" alt="Preview" style="max-width: 200px; margin-top: 10px; display: none;">
                            @endif
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="full_name">Full Name</label>
                        <div class="col-md-6">
                            <input type="text" name="full_name" id="full_name" class="form-control" required="required" tabindex="1" value="{{ $data->full_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="state">State:</label>
                        <div class="col-md-6">
                            <select class="form-control" id="state" name="state">
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->state_id }}" {{ $data->state_id == $state->state_id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="city">City:</label>
                        <div class="col-md-6">
                            <select class="form-control" id="city" name="city">
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                        <option value="{{ $city->city_id }}" data-state="{{ $city->state_id }}" {{ $data->city_id == $city->city_id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="address">Address</label>
                        <div class="col-md-6">
                            <textarea name="address" id="address" class="form-control" required="required" tabindex="2">{{ $data->address }}</textarea>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="phone">Phone Number <font size="1px">(ex. 08098999)</font></label>
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" placeholder="Phone Number" class="form-control" required="required" tabindex="4" value="{{ $data->phone }}">
                        </div>
                        <div class="visible-xs mb-md"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="gender">Gender</label>
                        <div class="col-md-2">
                            <div class="radio-custom">
                                <label>
                                    <input name="gender" type="radio" value="Male" {{ $data->gender == 'Male' ? 'checked' : '' }}>
                                    Male
                                </label>
                                <label>
                                    <input name="gender" type="radio" value="Female" {{ $data->gender == 'Female' ? 'checked' : '' }}>
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="placedateofbirth">Place & Date of Birth:</label>
                        <div class="col-md-3">
                            <input type="text" name="birthplace" id="birthplace" placeholder="Place of Birth" class="form-control" required="required" tabindex="10" value="{{ $data->birthplace }}">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $data->birthdate }}">
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="religion">Religion</label>
                        <div class="col-md-6">
                            <select name="religion" class="form-control" tabindex="13">
                                <option>- Select Status -</option>
                                <option value="Islam" {{ $data->religion == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Christian" {{ $data->religion == 'Christian' ? 'selected' : '' }}>Christian</option>
                                <option value="Catholic" {{ $data->religion == 'Catholic' ? 'selected' : '' }}>Catholic</option>
                                <option value="Buddhist" {{ $data->religion == 'Buddhist' ? 'selected' : '' }}>Buddhist</option>
                                <option value="Hindu" {{ $data->religion == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Konghucu" {{ $data->religion == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                <option value="Other" {{ $data->religion == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="idnumber">ID Card Number</label>
                        <div class="col-md-6">
                            <input type="text" name="idnumber" id="idnumber" class="form-control" required="required" tabindex="12" value="{{ $data->idnumber }}">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="maritalstatus">Marital Status</label>
                        <div class="col-md-6">
                            <select name="maritalstatus" class="form-control" tabindex="13">															
                                <option>- Select Status -</option>
                                <option value="Single" {{ $data->maritalstatus == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ $data->maritalstatus == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Widow" {{ $data->maritalstatus == 'Widow' ? 'selected' : '' }}>Widow</option>
                                <option value="Widower" {{ $data->maritalstatus == 'Widower' ? 'selected' : '' }}>Widower</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="buttonsubmit">
                                <button name="buttonsave" type="submit" class="btn btn-primary" style="margin-top:30px; width: 40%;">Save</button>
                                <button name="buttoncancel" type="button" class="btn btn-primary" style="margin-top:30px; margin-left:25px; width: 40%;">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>