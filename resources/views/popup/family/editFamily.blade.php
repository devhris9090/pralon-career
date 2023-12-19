{{-- add Education--}}
<div class="modal fade" id="editFamilyModal-{{ $family->id }}" tabindex="-1" role="dialog" aria-labelledby="editFamilyModal-{{ $family->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFamilyModal-{{ $family->id }}">Edit {{ $family->familyName }}'s Information</h5>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('family.edit',  $family->id) }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="familyName">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="familyName" id="familyName" class="form-control" required tabindex="1" value="{{ $family->familyName }}">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="relationship">Relationship</label>
                        <div class="col-md-6">
                            <select name="relationship" id="relationship" class="form-control" required tabindex="1">
                                <option value="">- Select Relationship -</option>
                                <option value="Father" {{ $family->familyRelation == 'Father' ? 'selected' : '' }}>Father</option>
                                <option value="Mother" {{ $family->familyRelation == 'Mother' ? 'selected' : '' }}>Mother</option>
                                <option value="Spouse" {{ $family->familyRelation == 'Spouse' ? 'selected' : '' }}>Spouse</option>
                                <option value="Son" {{ $family->familyRelation == 'Son' ? 'selected' : '' }}>Son</option>
                                <option value="Daughter" {{ $family->familyRelation == 'Daughter' ? 'selected' : '' }}>Daughter</option>
                                <option value="Brother" {{ $family->familyRelation == 'Brother' ? 'selected' : '' }}>Brother</option>
                                <option value="Sister" {{ $family->familyRelation == 'Sister' ? 'selected' : '' }}>Sister</option>
                                <option value="Father in Law" {{ $family->familyRelation == 'Father in Law' ? 'selected' : '' }}>Father in Law</option>
                                <option value="Mother in Law" {{ $family->familyRelation == 'Mother in Law' ? 'selected' : '' }}>Mother in Law</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="occupation">Occupation</label>
                        <div class="col-md-6">
                            <input type="text" name="occupation" id="occupation" class="form-control" required tabindex="1" value="{{ $family->occupation }}">
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="age">Age</label>
                        <div class="col-md-6">
                            <select name="age" id="age" class="form-control">
                                <option value="">-Select Age-</option>
                                @for ($i = 1; $i <= 100; $i++)
                                    <option value="{{ $i }}" {{ $family->age == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="status">Status</label>
                        <div class="col-md-6">
                            <select name="status" id="status" class="form-control">
                                <option value="">-Select Status-</option>
                                <option value="Alive" {{ $family->status == 'Alive' ? 'selected' : '' }}>Alive</option>
                                <option value="Deceased" {{ $family->status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
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