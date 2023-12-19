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
                            <span class="fa fa-mortar-board" style="margin-right:5px;color:#333"></span>
                            Skill
                            <a href="" class="add-education" title="Add Education" data-toggle="modal" data-target="#addSkillModal">
                                <i class="fa fa-plus-square fa-plus-square-custom"></i>
                            </a>
                        </div>
                    </div>
                    @include('popup.skill.addSkill', ['skills' => $skills])

                    <form method="GET" action="{{ route('skill') }}">
                        <div class="filter-options">
                            <button type="submit" name="category" value="All" class="btn btn-outline-primary{{ !$request->has('category') || $request->input('category') === 'All' ? ' active' : '' }}" style="{{ !$request->has('category') || $request->input('category') === 'All' ? 'background-color: #0088cc; color: white;' : '' }}">All</button>
                            @foreach ($categories as $category)
                                <button type="submit" name="category" value="{{ $category->category_name }}" class="btn btn-outline-primary{{ $request->input('category') === $category->category_name ? ' active' : '' }}" style="{{ $request->input('category') === $category->category_name ? 'background-color: #0088cc; color: white;' : '' }}">{{ $category->category_name }}</button>
                            @endforeach
                        </div>
                    </form>
                    
                      
                      
                      
                      


                    @if (!$skills->isEmpty())
                        <div id="skills-container">                                                         
                            @foreach ($skills as $skill)
                                <div class="col-xs-12 skill {{ $skill->skillCategory }}">
                                    <span class="resume-title">{{ $skill->skillName }}</span>
                                    <a href="{{ route('skill.edit', $skill->id) }}" class="delete-skill" data-toggle="modal" data-target="#deleteSkillModal-{{ $skill->id }}">
                                        <span class="fa fa-trash-o fa-trash-o-custom visible-lg visible-md"></span>
                                    </a> 
                                    <a href="{{ route('skill.edit', $skill->id) }}" class="edit-skill" data-toggle="modal" data-target="#editSkillModal-{{ $skill->id }}">
                                        <span class="fa fa-pencil fa-pencil-custom"></span>
                                    </a>
                                    
                                </div>

                                <div class="col-xs-12 skill {{ $skill->skillCategory }}">
                                    <div class="progress" style="width: 150px; height: 20px; background-color: #cccccc;  margin-bottom: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $skill->skillValue * 10}}%; background-color: #0088cc;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">{{ $skill->skillValue }}/10</div>
                                    </div>
                                </div>                 

                                <div class="col-xs-12 skill {{ $skill->skillCategory }}">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="skill-from">
                                                &emsp; Skill gotten from :
                                            </div>
                                            <div class="col-xs-12" style="margin-left: 40px">
                                                {!! nl2br(e($skill->skillFrom)) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr class="tall">
                                        </div>
                                    </div>
                                </div>
   
                                @include('popup.skill.editSkill', ['skills' => $skills])
                                @include('popup.skill.deleteSkill', ['skills' => $skills])
                            @endforeach
                        </div>
                    @endif




                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    

                    <script>
                        $(document).ready(function() {
                            var showAddModal = {{ session('showAddModal') ? 'true' : 'false' }};

                            if (showAddModal) {
                                $('#addSkillModal').modal('show');
                            }

                            $('#addSkillModal').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>


                    <script>
                        $(document).ready(function() {
                            var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                            var editSkillId = {{ session('editSkillId') ?: 'null' }};

                            if (showEditModal && editSkillId) {
                                $('#editSkillModal-' + editSkillId).modal('show');
                            }

                            $('[id^="editSkillModal-"]').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of col-md-9 -->
    </div> <!-- end of row -->
</div> <!-- end of container -->


@endsection