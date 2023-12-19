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
                            Family
                            <a href="" class="add-family" title="Add Family" data-toggle="modal" data-target="#addFamilyModal">
                                <i class="fa fa-plus-square fa-plus-square-custom"></i>
                            </a>
                        </div>
                    </div>
                    @include('popup.family.addFamily', ['families' => $families])


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
                                        <span class="col-sm-2" id="action">
                                            <div class="action-links">
                                                <a href="{{ route('family.edit', $family->id) }}" class="delete-family" data-toggle="modal" data-target="#deleteFamilyModal-{{ $family->id }}">
                                                    <span class="fa fa-trash-o fa-trash-o-custom visible-lg visible-md"></span>
                                                </a> 
                                                <a href="{{ route('family.edit', $family->id) }}" class="edit-family" data-toggle="modal" data-target="#editFamilyModal-{{ $family->id }}">
                                                    <span class="fa fa-pencil fa-pencil-custom"></span>
                                                </a>
                                            </div>
                                        </span>
                                    </div>


                                    @include('popup.family.editFamily', ['families' => $families])
                                    @include('popup.family.deleteFamily', ['families' => $families])

                                @endforeach
                                <div class="col-xs-12"><br></div>
                            </div>
                        </div>
                    </div>
                       <!-- end of list-family -->

                    



                    


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            var showAddModal = {{ session('showAddModal') ? 'true' : 'false' }};

                            if (showAddModal) {
                                $('#addFamilyModal').modal('show');
                            }

                            $('#addFamilyModal').on('hidden.bs.modal', function() {
                                $('.alert-danger').remove();
                            });
                        });
                    </script>


                    <script>
                        $(document).ready(function() {
                            var showEditModal = {{ session('showEditModal') ? 'true' : 'false' }};
                            var editFamilyId = {{ session('editFamilyId') ?: 'null' }};

                            if (showEditModal && editFamilyId) {
                                $('#editFamilyModal-' + editFamilyId).modal('show');
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