@extends('layoutProfile')

@section('content')
    <div class="col-md-9">
        @forelse ($applicant_list as $applicant)
            <div class="col-md-4">
                <div class="card" style="border: 1px solid #e0e0e0; margin-bottom: 20px; flex-direction: column;">
                    <div class="card-body" style="padding: 15px; height: 300px">
                        <div class="job-logo"
                            style="width: 150px; height: 100px; overflow: hidden; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('template/img/vacancy/' . $applicant->vacancy->banner) }}" alt="Company Logo"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <h5 class="card-title" style="font-size: 1em; margin: 10px 0;">
                            {{ $applicant->vacancy->vacancy_name }}</h5>
                        <p class="card-subtitle mb-2 text-muted" style="font-size: 1em; color: #888;">
                            {{ $applicant->vacancy->company_name }}</p>
                        <p class="card-text"
                            style="margin: 10px 0; overflow: hidden; text-overflow: ellipsis; max-height: 3em;">
                            {{ $applicant->vacancy->vacancy_detail }}</p>
                    </div>
                    <form action="{{ route('generate-profile-user-pdf') }}" method="post" class="form-application">
                        @csrf
                        {{-- <input type="hidden" name="dummy_vacancy" value="{{ $applicant->vacancy->vacancy_name }}" data-vacancy_name="{{ $applicant->vacancy->vacancy_name }}"> --}}
                        <input type="hidden" value="{{ $applicant->vacancy->id_vacancy }}" name="id_vacancy">
                        <div class="btn-group btn-group-justified" role="group">
                                <a href="#" class="btn btn-primary form-application-pdf" style="border-radius: 0px !important">Form Application</a>
                                <a href="#" class="btn btn-info black" style="border-radius: 0px !important">Detail</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        @empty
            <p>No Data</p>
        @endforelse
    </div>
    </div>
@endsection

@push('js')
    @include('userProfile.user_js')
@endpush
