{{-- edit Education--}}
<div class="modal fade" id="editEducationModal-{{ $education->id }}" tabindex="-1" role="dialog" aria-labelledby="editEducationModalLabel-{{ $education->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEducationModalLabel-{{ $education->id }}">Edit Education : {{ $education->institutionName }} </h5>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('education.edit', $education->id) }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="institutionName">Institution Name</label>
                        <div class="col-md-6">
                            <input type="text" name="edit_institutionName" id="edit_institutionName" class="form-control" required tabindex="1" list="institutionList" value="{{ $education->institutionName }}">
                            <datalist id="institutionList">
                                <option value="Other">pilihan tidak ada di list</option>
                            </datalist>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="degree">Degree</label>
                        <div class="col-md-6">
                            <select name="degree" id="degree" class="form-control" required tabindex="1">
                                <option value="">- Select Degree -</option>
                                @foreach ($degrees as $degree)
                                    <option value="{{ $degree->id }}" {{ $education->degree == $degree->edu_name ? 'selected' : '' }}>
                                        {{ $degree->edu_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="edit_major">Major</label>
                        <div class="col-md-6">
                            <input type="text" name="edit_major" class="form-control edit-major" value="{{ $education->major }}">
                        </div>
                    </div>
        
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="edit_educationStart">Start Education</label>
                        <div class="col-md-2">
                            <select name="edit_educationStartYear" class="form-control" tabindex="4">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                    <option value="{{ $year }}" {{ $year == date('Y', strtotime($education->startYear)) ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="edit_educationFinish">Finish Education</label>
                        <div class="col-md-2">
                            <select name="edit_educationEndYear" class="form-control" tabindex="6">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                <option value="{{ $year }}" {{ $year == date('Y', strtotime($education->endYear)) ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                                {{-- @error('educationEndYear')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </select>
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="edit_achievement">Achievement</label>
                        <div class="col-md-6">
                            <textarea name="edit_achievement" id="edit_achievement" class="form-control" tabindex="9">{{ $education->achievement }}</textarea>
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