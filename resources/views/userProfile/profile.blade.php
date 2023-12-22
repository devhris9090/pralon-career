    @extends('layoutProfile')

@section('content')


    <div class="col-md-9">
        {{-- <div style="float: right !important; margin-bottom: 25px !important;">
            <a href="{{ route('generate-profile-user-pdf') }}" class="btn btn-primary">
                form application 
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            </a>
        </div> --}}
        <div class="row mt-4">
            <div class="col-lg-12">

                <!-- aboutme -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-user" style="margin-right:5px;color:#333"></span>
                        About Me
                        <a href="{{ route('aboutme') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
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
                        @if ($data->birthplace)
                            <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->birthplace }} / {{ date('d-m-Y', strtotime($data->birthdate)) }}</div>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 space-between-row form-horizontal-custom">
                    <div class="form-group small-form-group">
                        <div class="col-xs-4 col-sm-3 custom-control-data-label">ID Card Number</div>
                        <div class="col-xs-8 col-sm-9 custom-control-data-output output-exp-item">{{ $data->idnumber }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr class="tall">
                    </div>
                </div>


                <!-- experience -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-suitcase" style="margin-right:5px;color:#333"></span>
                        Experience
                        <a href="{{ route('experience') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
                        </a>
                    </div>
                </div>

                @if (!$experiences->isEmpty())
                    <div class="job-experience">
                        <div class="col-xs-12">
                            <div class="resume-company">
                                <span class="companyName">
                                    <strong>{{ $experience->companyName }}</strong>
                                    |
                                    @php
                                        $start = \Carbon\Carbon::parse($experience->yosStart);
                                        $end = ($experience->yosEnd === '0001-01-01') ? \Carbon\Carbon::now() : \Carbon\Carbon::parse($experience->yosEnd);
                                        $length = $start->diff($end);
                                        $years = $length->format('%y');
                                        $months = $length->format('%m');
                                    @endphp

                                    <span>
                                        {{ \Carbon\Carbon::parse($experience->yosStart)->format('M Y') }} -
                                        @if($experience->yosEnd === '0001-01-01')
                                            Present
                                        @else
                                            {{ \Carbon\Carbon::parse($experience->yosEnd)->format('M Y') }}
                                        @endif
                                    </span>
                                    <span>
                                        (
                                        @if($years > 0)
                                            {{ $years }} {{ $years > 1 ? 'years' : 'year' }}
                                        @endif
                                        @if($months > 0)
                                            {{ $months }} {{ $months > 1 ? 'months' : 'month' }}
                                        @endif
                                        )
                                    </span>

                                </span>
                            </div>
                            <div class="companyAddress">
                                <span>{{ $experience->companyAddress }}</span>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-position">
                                                &emsp; Firts Job Position :
                                                <span class="startJobPosition">{{ $experience->posStart }}</span>
                                            </div>
                                            <div class="resume-job-position">
                                                &emsp; Last Job Position :
                                                <span class="endJobPosition">{{ $experience->posEnd }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-salary">
                                                &emsp; First Salary/Last Salary :
                                                <span class="startSalary">Rp{{ number_format($experience->salaryStart) }}</span>
                                                <span class="salarySeparator">to</span>
                                                <span class="endSalary">Rp{{ number_format($experience->salaryEnd) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-salary">
                                                &emsp; Reason of leaving job :
                                                <span class="leavingReason">{!! nl2br(e($experience->leavingReason)) !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-description">
                                                &emsp; Job Description :
                                            </div>
                                            <div class="col-xs-12" style="margin-left: 40px">
                                                {!! nl2br(e($experience->project)) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-salary">
                                                &emsp; Project :
                                            </div>
                                            <div class="col-xs-12" style="margin-left: 40px">
                                                {!! nl2br(e($experience->project)) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="resume-job-salary">
                                                &emsp; Other Benefits :
                                            </div>
                                            <div class="col-xs-12" style="margin-left: 40px">
                                                {!! nl2br(e($experience->benefit)) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="tall hr-space">    
                                </div>            
                            </div>
                        </div>
                    </div>
                @endif


                <hr class="tall hr-space">

                
                
                <!-- education -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-mortar-board" style="margin-right:5px;color:#333"></span>
                        Education
                        <a href="{{ route('education') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
                        </a>                    
                    </div>
                </div>

                @if (!$educations->isEmpty())
                    <div class="col-xs-12">
                        <span class="resume-title">{{ $education->institutionName }}</span>
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
                    </div>
                @endif

                <div class="col-xs-12"><hr class="tall hr-space"></div>
                


                <!-- skills -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-cube" style="margin-right:5px;color:#333"></span>
                        Skills
                        <a href="{{ route('skill') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
                        </a>                 
                    </div>
                </div>

                <div id="list_skill">
                    <div class="row mt-md">
                        @foreach ($skills as $skill)
                        <div class="col-md-3">
                            @php
                                $percentage = $skill->skillValue * 10;
                            @endphp
                            <div class="circular-bar">
                                <div class="circular-bar-chart" data-percent="{{ $percentage }}" data-plugin-options='{"barColor": "{{ $skill->barColor }}"}'>
                                    {{ $skill->skillName }}
                                    <label><span class="percent">{{ $percentage }}</span>%</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                

                <hr class="tall hr-space">

                <!-- training & achievments -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-rocket" style="margin-right:5px;color:#333"></span>
                        Training & Achievements
                        <a href="{{ route('trach') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
                        </a>
                    </div>
                </div>

                
                @if (!$trains->isEmpty())
                    <div id="list_training">
                        <div id="training_view">
                            <div class="resume-section-content"  style="margin-bottom:50px">
                                <div class="form-group language-form-group">
                                    <label class="col-sm-4" id="Name"><b>Training</b></label>
                                    <label class="col-sm-4" id="organizer"><b>Organizer</b></label>
                                    <label class="col-sm-4" id="Duration"><b>Duration</b></label>
                                </div>
                                @foreach ($trains as $train)
                                    <div class="form-group language-form-group">
                                        <span class="col-sm-4" id="Name">{{ $train->trachName }}</span>
                                        <span class="col-sm-4" id="organizer">{{ $train->trachOrganizer }}</span>
                                        <span class="col-sm-4" id="Duration">
                                            @php
                                                $trachStart = \Carbon\Carbon::parse($train->trachStart);
                                                $trachEnd = \Carbon\Carbon::parse($train->trachEnd);
                                                $lengthTrain = $trachStart->diff($trachEnd);
                                        
                                                $yearsTrain = $lengthTrain->format('%y');
                                                $monthsTrain = $lengthTrain->format('%m');
                                                $daysTrain = $lengthTrain->format('%d');
                                            @endphp
                                        
                                            @if ($yearsTrain > 0)
                                                {{ $yearsTrain }} {{ $yearsTrain > 1 ? 'years' : 'year' }}
                                            @endif
                                        
                                            @if ($monthsTrain > 0)
                                                {{ $monthsTrain }} {{ $monthsTrain > 1 ? 'months' : 'month' }}
                                            @endif
                                        
                                            {{ $daysTrain }} {{ $daysTrain > 1 ? 'days' : 'day' }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div> <!-- end of list-training -->
                @endif

                <div class="col-xs-12"><br></div>

                @if (!$achievements->isEmpty())
                    <div id="list_achievement">
                        <div id="achievement_view">
                            <div class="resume-section-content"  style="margin-bottom:50px">
                                <div class="form-group language-form-group">
                                    <label class="col-sm-4" id="Name"><b>Achievements</b></label>
                                    <label class="col-sm-4" id="organizer"><b>Organizer</b></label>
                                    <label class="col-sm-4" id="Achieved"><b>Achieved</b></label>
                                </div>
                                @foreach ($achievements as $achievement)
                                    <div class="form-group language-form-group">
                                        <span class="col-sm-4" id="Name">{{ $achievement->trachName }}</span>
                                        <span class="col-sm-4" id="organizer">{{ $achievement->trachOrganizer }}</span>
                                        <span class="col-sm-4" id="Achieved">{{ $achievement->trachEnd }}</span>
                                    </div>
                                    <div class="col-xs-12"><br></div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div> <!-- end of list-training -->
                @endif
                
                <hr class="tall hr-space">

                <!-- family -->
                <div class="form-group">
                    <div class="col-xs-12 resume-title">												
                        <span class="fa fa-users" style="margin-right:5px;color:#333"></span>
                        Family
                        <a href="{{ route('family') }}" title="View Profile">
                            <i class="fa fa-eye" style="float: right;"></i>
                        </a>
                    </div>
                </div>
                @if (!$families->isEmpty())
                    <div id="list_family" style="text-align: left;">
                        <div id="family_view">
                            <div class="resume-section-content visible-sm visible-md visible-lg" style="margin-bottom:50px">
                                <div class="form-group language-form-group">
                                <label class="col-sm-2" id="Relationship"><b>Relationship</b></label>
                                <label class="col-sm-3" id="Name"><b>Name</b></label>
                                <label class="col-sm-1" id="Age"><b>Age</b></label>
                                <label class="col-sm-2" id="Occupation"><b>Occupation</b></label>
                                <label class="col-sm-2" id="Status"><b>Status</b></label>
                                </div>
                                @foreach ($families as $family)
                                    <div class="form-group language-form-group">
                                        <span class="col-sm-2" id="Relationship">{{ $family->familyRelation }}</span>
                                        <span class="col-sm-3" id="Name">{{ $family->familyName }}</span>
                                        <span class="col-sm-1" id="Age">{{ $family->age }}</span>
                                        <span class="col-sm-2" id="Occupation">{{ $family->occupation }}</span>
                                        <span class="col-sm-2" id="Status">{{ $family->status }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <hr class="tall hr-space">

            </div> <!-- end of col-lg-12 -->
        </div> <!-- end of row -->
    </div> <!-- end of col-md-9 -->
</div> <!-- end of row -->
</div>
    
@endsection