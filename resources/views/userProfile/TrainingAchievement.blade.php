@extends('layoutProfile')
{{-- <style>
    .filter-options .btn {
        cursor: pointer;
        outline: none;
    }

    .filter-options .btn.btn-outline-primary.active,
    .filter-options .btn.btn-outline-primary:hover,
    .filter-options .btn.btn-outline-primary:focus {
        background-color: #0088cc;
        color: white;
        outline: none;
    }
</style> --}}



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
                            Training & Achievement
                            <a href="" class="add-education" title="Add Training Achievement" data-toggle="modal" data-target="#addTrachModal">
                                <i class="fa fa-plus-square fa-plus-square-custom"></i>
                            </a>
                        </div>
                    </div>
                    @include('popup.trach.addTrach', ['trachs' => $trachs])

                    <form method="GET" action="{{ route('trach') }}">
                        <div class="filter-options" style="margin-bottom: 12px">
                            <button type="submit" name="category" value="All" class="btn btn-outline-primary{{ !$request->has('category') || $request->input('category') === 'All' ? ' active' : '' }}" style="{{ !$request->has('category') || $request->input('category') === 'All' ? 'background-color: #0088cc; color: white;' : '' }}">All</button>
                            <button type="submit" name="category" value="Achievement" class="btn btn-outline-primary{{ $request->input('category') === 'Achievement' ? ' active' : '' }}" style="{{ ($request->input('category') === 'Achievement') ? 'background-color: #0088cc; color: white;' : '' }}">Achievement</button>
                            <button type="submit" name="category" value="Training" class="btn btn-outline-primary{{ $request->input('category') === 'Training' ? ' active' : '' }}" style="{{ ($request->input('category') === 'Training') ? 'background-color: #0088cc; color: white;' : '' }}">Training</button>
                        </div>
                    </form>
                      
                      
                      
                      
                      
                      


                    @if (!$trachs->isEmpty())
                        <div id="skills-container">                                                         
                            @foreach ($trachs as $trach)
                                <div class="col-xs-12 skill">
                                    <span class="resume-title">{{ $trach->trachName }} by {{ $trach->trachOrganizer }}</span>
                                    <a href="{{ route('trach.edit', $trach->id) }}" class="delete-trach" data-toggle="modal" data-target="#deleteTrachModal-{{ $trach->id }}">
                                        <span class="fa fa-trash-o fa-trash-o-custom visible-lg visible-md"></span>
                                    </a> 
                                    <a href="{{ route('trach.edit', $trach->id) }}" class="edit-trach" data-toggle="modal" data-target="#editTrachModal-{{ $trach->id }}">
                                        <span class="fa fa-pencil fa-pencil-custom"></span>
                                    </a>
                                </div>
                                <div class="col-xs-12">
                                    <span class="resume-sub-title">
                                        {{ $trach->trachCategory }} | {{ date('d-m-Y', strtotime($trach->trachStart)) }} / {{ date('d-m-Y', strtotime($trach->trachEnd)) }}
                                    </span>
                                </div>                                                    
                                <div class="col-xs-12 skill">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="skill-from">
                                                &emsp; Detail :
                                            </div>
                                            <div class="col-xs-12" style="margin-left: 40px">
                                                {!! nl2br(e($trach->trachDetail)) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr class="tall">
                                        </div>
                                    </div>
                                </div>
   
                                @include('popup.trach.editTrach', ['trachs' => $trachs])
                                @include('popup.trach.deleteTrach', ['trachs' => $trachs])
                            @endforeach
                        </div>
                    @endif




                    <!-- Make sure to include jQuery and jQuery UI -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">

                    
                      


                    <script>
                        $(document).ready(function() {
                            var showAddModal = {{ session('showAddModal') ? 'true' : 'false' }};

                            if (showAddModal) {
                                $('#addTrachModal').modal('show');
                            }

                            $('#addTrachModal').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>


                    <script>
                        $(document).ready(function() {
                            var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                            var editTrachId = {{ session('editTrachId') ?: 'null' }};

                            if (showEditModal && editTrachId) {
                                $('#editTrachModal-' + editTrachId).modal('show');
                            }

                            $('[id^="editTrachModal-"]').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>
                </div> <!-- end of col-lg-12 -->
            </div> <!-- end of row -->
        </div> <!-- end of col-md-9 -->
    </div> <!-- end of row -->
</div> <!-- end of container -->


@endsection