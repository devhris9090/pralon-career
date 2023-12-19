{{-- add Education--}}
<div class="modal fade" id="addFamilyModal" tabindex="-1" role="dialog" aria-labelledby="addFamilyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFamilyModal">Add Family</h5>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('family.add') }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="familyName">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="familyName" id="familyName" class="form-control" required tabindex="1" value="{{ old('familyName') }}">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="relationship">Relationship</label>
                        <div class="col-md-6">
                            <select name="relationship" id="relationship" class="form-control" required tabindex="1">
                                <option value="">- Select Relationship -</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Father in Law">Father in Law</option>
                                <option value="Mother in Law">Mother in Law</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="occupation">Occupation</label>
                        <div class="col-md-6">
                            <input type="text" name="occupation" id="occupation" class="form-control" required tabindex="1" value="{{ old('occupation') }}">
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="age">Age</label>
                        <div class="col-md-6">
                            <select name="age" id="age" class="form-control">
                                <option value="">-Select Age-</option>
                                @for ($i = 1; $i <= 100; $i++)
                                    <option value="{{ $i }}" {{ old('Age') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="status">Status</label>
                        <div class="col-md-6">
                            <select name="status" id="status" class="form-control">
                                <option value="">-Select Status-</option>
                                <option value="Alive">Alive</option>
                                <option value="Deceased">Deceased</option>
                            </select>                        
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