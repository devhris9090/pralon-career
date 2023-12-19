{{-- edit Training & Achievement--}}
<div class="modal fade" id="editTrachModal-{{ $trach->id }}" tabindex="-1" role="dialog" aria-labelledby="editTrachModal-{{ $trach->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTrachModal-{{ $trach->id }}">Edit Training and Achievement</h5>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('trach.edit', $trach->id) }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachCategory">Training or Achievement ?</label>
                        <div class="col-md-6">
                            <select name="trachCategory" id="trachCategory" class="form-control" required tabindex="1">
                                <option value="">- Select Category -</option>
                                <option value="Achievement" {{ $trach->trachCategory == 'Achievement' ? 'selected' : '' }}>Achievement</option>
                                <option value="Training" {{ $trach->trachCategory == 'Training' ? 'selected' : '' }}>Training</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachName">What its Name?</label>
                        <div class="col-md-6">
                            <input type="text" name="trachName" id="trachName" class="form-control" required tabindex="1" value="{{ $trach->trachName }}" placeholder="Training/Achievement Name">
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachOrganizer">Organizer's Name?</label>
                        <div class="col-md-6">
                            <input type="text" name="trachOrganizer" id="trachOrganizer" class="form-control" required tabindex="1" value="{{ $trach->trachOrganizer }}" placeholder="Training/Achievement Organizer">
                        </div>
                    </div>
                      

                    


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachStart">Start</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="trachStart" name="trachStart"value="{{ $trach->trachStart }}">
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachEnd">End</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="trachEnd" name="trachEnd"value="{{ $trach->trachEnd }}">
                        </div>
                    </div>
                      
                      
                    
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="trachDetail">Tell us the detail ?</label>
                        <div class="col-md-6">
                            <textarea name="trachDetail" id="trachDetail" class="form-control" tabindex="9">{{ $trach->trachDetail }}</textarea>
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