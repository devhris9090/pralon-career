{{-- add Training & Achievement--}}
<div class="modal fade" id="addTrachModal" tabindex="-1" role="dialog" aria-labelledby="addTrachModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTrachModal">Add Training and Achievement</h5>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('trach.add') }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachCategory">Training or Achievement ?</label>
                        <div class="col-md-6">
                            <select name="trachCategory" id="trachCategory" class="form-control" required tabindex="1">
                                <option value="">- Select Category -</option>
                                <option value="Achievement" {{ old('trachCategory') === 'Achievement' ? 'selected' : '' }}>Achievement</option>
                                <option value="Training" {{ old('trachCategory') === 'Training' ? 'selected' : '' }}>Training</option>
                            </select>
                        </div>                        
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachName">What it's Name?</label>
                        <div class="col-md-6">
                            <input type="text" name="trachName" id="trachName" class="form-control" required tabindex="1" value="{{ old('trachName') }}" placeholder="Training/Achievement Name">
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachOrganizer">Organizer's Name?</label>
                        <div class="col-md-6">
                            <input type="text" name="trachOrganizer" id="trachOrganizer" class="form-control" required tabindex="1" value="{{ old('trachOrganizer') }}" placeholder="Training/Achievement Organizer">
                        </div>
                    </div>
                      

                    


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachStart">Start</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="trachStart" name="trachStart" value="{{ old('trachStart') }}">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachEnd">End</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="trachEnd" name="trachEnd" value="{{ old('trachEnd') }}">
                        </div>
                    </div>
                      
                      
                    
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachDetail">Tell us the detail ?</label>
                        <div class="col-md-6">
                            <textarea name="trachDetail" id="trachDetail" class="form-control" tabindex="9">{{ old('trachDetail') }}</textarea>
                        </div>
                    </div>

                    
        
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="buttonsubmit">
                                <button name="buttonsave" type="submit" class="btn btn-primary" style="margin-top:30px; width: 40%;">Save</button>
                                <button name="buttoncancel" type="button" class="btn btn-primary" style="margin-top:30px; margin-left:25px; width: 40%;" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>