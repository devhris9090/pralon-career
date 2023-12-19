{{-- add Experience --}}
<div class="modal fade" id="addExperienceModal" tabindex="-1" role="dialog" aria-labelledby="addExperienceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addExperienceModalLabel">Add Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;" id="closeAddButton">&times;</span>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('experience.add') }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="companyName">Company Name</label>
                        <div class="col-md-6">
                            <input type="text" name="companyName" id="companyName" class="form-control" required tabindex="1" value="{{ old('companyName') }}">
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="companyAddress">Company Address</label>
                        <div class="col-md-6">
                            <textarea name="companyAddress" id="companyAddress" class="form-control" required tabindex="2">{{ old('companyAddress') }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="yearofservice">Year of Service</label>
                        <div class="col-md-2">
                            <select name="yosStartMonth" class="form-control" tabindex="3">
                                <option value="">- Month -</option>
                                <option value="01" {{ old('yosStartMonth') == '01' ? 'selected' : '' }}>January</option>
                                <option value="02" {{ old('yosStartMonth') == '02' ? 'selected' : '' }}>February</option>
                                <option value="03" {{ old('yosStartMonth') == '03' ? 'selected' : '' }}>March</option>
                                <option value="04" {{ old('yosStartMonth') == '04' ? 'selected' : '' }}>April</option>
                                <option value="05" {{ old('yosStartMonth') == '05' ? 'selected' : '' }}>May</option>
                                <option value="06" {{ old('yosStartMonth') == '06' ? 'selected' : '' }}>June</option>
                                <option value="07" {{ old('yosStartMonth') == '07' ? 'selected' : '' }}>July</option>
                                <option value="08" {{ old('yosStartMonth') == '08' ? 'selected' : '' }}>August</option>
                                <option value="09" {{ old('yosStartMonth') == '09' ? 'selected' : '' }}>September</option>
                                <option value="10" {{ old('yosStartMonth') == '10' ? 'selected' : '' }}>October</option>
                                <option value="11" {{ old('yosStartMonth') == '11' ? 'selected' : '' }}>November</option>
                                <option value="12" {{ old('yosStartMonth') == '12' ? 'selected' : '' }}>December</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="yosStartYear" class="form-control" tabindex="4">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                    <option value="{{ $year }}" {{ old('yosStartYear') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        
                    </div>
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="yearofservice">To</label>
                        <div class="col-md-2">
                            <select name="yosEndMonth" class="form-control" tabindex="3">
                                <option value="">- Month -</option>
                                <option value="01" {{ old('yosEndMonth') == '01' ? 'selected' : '' }}>January</option>
                                <option value="02" {{ old('yosEndMonth') == '02' ? 'selected' : '' }}>February</option>
                                <option value="03" {{ old('yosEndMonth') == '03' ? 'selected' : '' }}>March</option>
                                <option value="04" {{ old('yosEndMonth') == '04' ? 'selected' : '' }}>April</option>
                                <option value="05" {{ old('yosEndMonth') == '05' ? 'selected' : '' }}>May</option>
                                <option value="06" {{ old('yosEndMonth') == '06' ? 'selected' : '' }}>June</option>
                                <option value="07" {{ old('yosEndMonth') == '07' ? 'selected' : '' }}>July</option>
                                <option value="08" {{ old('yosEndMonth') == '08' ? 'selected' : '' }}>August</option>
                                <option value="09" {{ old('yosEndMonth') == '09' ? 'selected' : '' }}>September</option>
                                <option value="10" {{ old('yosEndMonth') == '10' ? 'selected' : '' }}>October</option>
                                <option value="11" {{ old('yosEndMonth') == '11' ? 'selected' : '' }}>November</option>
                                <option value="12" {{ old('yosEndMonth') == '12' ? 'selected' : '' }}>December</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="yosEndYear" class="form-control" tabindex="6">
                                <option value="">- Year -</option>
                                @for ($year = 1980; $year <= 2050; $year++)
                                    <option value="{{ $year }}" {{ old('yosEndYear') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                                @error('yosEndYear')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </select>
                        </div>
                        <div class="col-md-3 checkbox-inline">
                            <label>
                                <input type="checkbox" name="yosPresent" onchange="toggleYearMonthInputs()" {{ old('yosPresent') ? 'checked' : '' }}> Present
                            </label>
                        </div>
                    </div>
                    
                    
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="posStart">Position (Entry)</label>
                        <div class="col-md-3">
                            <input type="text" name="posStart" id="posStart" class="form-control" required tabindex="7" value="{{ old('posStart') }}">
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="posEnd">Position (Last)</label>
                        <div class="col-md-3">
                            <input type="text" name="posEnd" id="posEnd" class="form-control" required tabindex="8" value="{{ old('posEnd') }}">
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="jobDesc">Job Description</label>
                        <div class="col-md-6">
                            <textarea name="jobDesc" id="jobDesc" class="form-control" tabindex="9">{{ old('jobDesc') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="project">Project</label>
                        <div class="col-md-6">
                            <textarea name="project" id="project" class="form-control" tabindex="9">{{ old('project') }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="salaryStart">Salary (Entry)</label>
                        <div class="col-md-3">
                            <input type="text" name="salaryStart" id="salaryStart" class="form-control" required tabindex="10" value="{{ old('salaryStart') }}">
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="salaryEnd">Salary (Exit/Last)</label>
                        <div class="col-md-3">
                            <input type="text" name="salaryEnd" id="salaryEnd" class="form-control" required tabindex="11" value="{{ old('salaryEnd') }}">
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="benefit">Other Benefits</label>
                        <div class="col-md-6">
                            <textarea name="benefit" id="benefit" class="form-control" tabindex="12">{{ old('benefit') }}</textarea>
                        </div>
                    </div>
        
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="leavingReason">Reason for Leaving</label>
                        <div class="col-md-6">
                            <textarea name="leavingReason" id="leavingReason" class="form-control" tabindex="13">{{ old('leavingReason') }}</textarea>
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