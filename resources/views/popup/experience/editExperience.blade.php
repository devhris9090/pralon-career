
   
<div class="modal fade" id="editExperienceModal-{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="editExperienceModalLabel-{{ $experience->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editExperienceModalLabel-{{ $experience->id }}">Edit Experience: {{ $experience->companyName }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;" id="closeButton">&times;</span>
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
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <form class="form-horizontal form-bordered edit-form" method="POST" action="{{ route('experience.edit', $experience->id) }}">
                    @csrf

                    <input type="hidden" name="experience_id" value="{{ $experience->id }}">

                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="edit_companyName">Company Name</label>
                        <div class="col-md-6">
                            <input type="text" name="edit_companyName" id="edit_companyName" class="form-control" required tabindex="1" value="{{ $experience->companyName }}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="edit_companyAddress">Company Address</label>
                        <div class="col-md-6">
                            <textarea name="edit_companyAddress" id="edit_companyAddress" class="form-control" required tabindex="2">{{ $experience->companyAddress }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="yearofservice">Year of Service</label>
                        <div class="col-md-2">
                            <select name="edit_yosStartMonth" class="form-control" tabindex="3">
                                <option value="">- Month -</option>
                                <option value="01" {{ date('m', strtotime($experience->yosStart)) == '01' ? 'selected' : '' }}>January</option>
                                <option value="02" {{ date('m', strtotime($experience->yosStart)) == '02' ? 'selected' : '' }}>February</option>
                                <option value="03" {{ date('m', strtotime($experience->yosStart)) == '03' ? 'selected' : '' }}>March</option>
                                <option value="04" {{ date('m', strtotime($experience->yosStart)) == '04' ? 'selected' : '' }}>April</option>
                                <option value="05" {{ date('m', strtotime($experience->yosStart)) == '05' ? 'selected' : '' }}>May</option>
                                <option value="06" {{ date('m', strtotime($experience->yosStart)) == '06' ? 'selected' : '' }}>June</option>
                                <option value="07" {{ date('m', strtotime($experience->yosStart)) == '07' ? 'selected' : '' }}>July</option>
                                <option value="08" {{ date('m', strtotime($experience->yosStart)) == '08' ? 'selected' : '' }}>August</option>
                                <option value="09" {{ date('m', strtotime($experience->yosStart)) == '09' ? 'selected' : '' }}>September</option>
                                <option value="10" {{ date('m', strtotime($experience->yosStart)) == '10' ? 'selected' : '' }}>October</option>
                                <option value="11" {{ date('m', strtotime($experience->yosStart)) == '11' ? 'selected' : '' }}>November</option>
                                <option value="12" {{ date('m', strtotime($experience->yosStart)) == '12' ? 'selected' : '' }}>December</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="edit_yosStartYear" class="form-control" tabindex="4">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                    <option value="{{ $year }}" {{ $year == date('Y', strtotime($experience->yosStart)) ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="edit_yearofservice">To</label>
                        <div class="col-md-2">
                            <select name="edit_yosEndMonth" class="form-control" tabindex="5">
                                <option value="">- Month -</option>
                                <option value="01" {{ date('m', strtotime($experience->yosEnd)) == '01' ? 'selected' : '' }}>January</option>
                                <option value="02" {{ date('m', strtotime($experience->yosEnd)) == '02' ? 'selected' : '' }}>February</option>
                                <option value="03" {{ date('m', strtotime($experience->yosEnd)) == '03' ? 'selected' : '' }}>March</option>
                                <option value="04" {{ date('m', strtotime($experience->yosEnd)) == '04' ? 'selected' : '' }}>April</option>
                                <option value="05" {{ date('m', strtotime($experience->yosEnd)) == '05' ? 'selected' : '' }}>May</option>
                                <option value="06" {{ date('m', strtotime($experience->yosEnd)) == '06' ? 'selected' : '' }}>June</option>
                                <option value="07" {{ date('m', strtotime($experience->yosEnd)) == '07' ? 'selected' : '' }}>July</option>
                                <option value="08" {{ date('m', strtotime($experience->yosEnd)) == '08' ? 'selected' : '' }}>August</option>
                                <option value="09" {{ date('m', strtotime($experience->yosEnd)) == '09' ? 'selected' : '' }}>September</option>
                                <option value="10" {{ date('m', strtotime($experience->yosEnd)) == '10' ? 'selected' : '' }}>October</option>
                                <option value="11" {{ date('m', strtotime($experience->yosEnd)) == '11' ? 'selected' : '' }}>November</option>
                                <option value="12" {{ date('m', strtotime($experience->yosEnd)) == '12' ? 'selected' : '' }}>December</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="edit_yosEndYear" class="form-control" tabindex="6">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                    <option value="{{ $year }}" {{ $year == date('Y', strtotime($experience->yosEnd)) ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                                @error('edit_yosEndYear')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </select>
                        </div>
                        <div class="col-md-3 checkbox-inline">
                            <label>
                                <input type="checkbox" name="edit_yosPresent" {{ $experience->yosEnd == '0001-01-01' ? 'checked' : '' }} onchange="toggleYearMonthInputs()"> Present
                            </label>
                        </div>
                    </div>
                    
                    
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="posStart">Position (Entry)</label>
                        <div class="col-md-3">
                            <input type="text" name="edit_posStart" id="edit_posStart" class="form-control" required tabindex="7" value="{{ $experience->posStart }}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="posEnd">Position (Last)</label>
                        <div class="col-md-3">
                            <input type="text" name="edit_posEnd" id="edit_posEnd" class="form-control" required tabindex="8" value="{{ $experience->posEnd }}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="jobDesc">Job Description</label>
                        <div class="col-md-6">
                            <textarea name="edit_jobDesc" id="edit_jobDesc" class="form-control" tabindex="9">{{ $experience->jobDesc }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="project">Project</label>
                        <div class="col-md-6">
                            <textarea name="edit_project" id="edit_project" class="form-control" tabindex="9">{{ $experience->project }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="salaryStart">Salary (Entry)</label>
                        <div class="col-md-3">
                            <input type="text" name="edit_salaryStart" id="edit_salaryStart" class="form-control" required tabindex="10" value="{{ $experience->salaryStart }}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="salaryEnd">Salary (Exit/Last)</label>
                        <div class="col-md-3">
                            <input type="text" name="edit_salaryEnd" id="edit_salaryEnd" class="form-control" required tabindex="11" value="{{ $experience->salaryEnd }}">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="benefit">Other Benefits</label>
                        <div class="col-md-6">
                            <textarea name="edit_benefit" id="edit_benefit" class="form-control" tabindex="12">{{ $experience->benefit }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-md-3 control-label form-label" for="leavingReason">Reason for Leaving</label>
                        <div class="col-md-6">
                            <textarea name="edit_leavingReason" id="edit_leavingReason" class="form-control" tabindex="13">{{ $experience->leavingReason }}</textarea>
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





