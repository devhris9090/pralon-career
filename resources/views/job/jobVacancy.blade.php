@extends('layoutJob')

@section('content')
<div class="container">
    <div class="col-md-12">
        @if (session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            {{-- @php
                dd($applicant);
            @endphp --}}
            @foreach($vacancies as $vacancy)
            <div class="col-md-4">
                <div class="card" style="border: 1px solid #e0e0e0; margin-bottom: 20px; flex-direction: column;">
                    <div class="card-body" style="padding: 15px; height: 300px">
                        <div class="job-logo" style="width: 150px; height: 100px; overflow: hidden; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('template/img/vacancy/' . $vacancy->banner) }}" alt="Company Logo" style="max-width: 100%; height: auto;">
                        </div>
                        <h5 class="card-title" style="font-size: 1em; margin: 10px 0;">{{ $vacancy->vacancy_name }}</h5>
                        <p class="card-subtitle mb-2 text-muted" style="font-size: 1em; color: #888;">{{ $vacancy->company_name }}</p>
                        <p class="card-text" style="margin: 10px 0; overflow: hidden; text-overflow: ellipsis; max-height: 3em;">{{ $vacancy->vacancy_detail }}</p>
                    </div>
                    @if ($vacancy->disabled !=null)
                        <a href="#" class="btn btn-primary" style="display: block; flex-direction: column; border-radius:0px" {{ $vacancy->disabled."='true'" }}>Apply Now</a>
                    @else 
                        <a href="#" data-toggle="modal" data-target="#applyJob-{{ $vacancy->id_vacancy }}" class="btn btn-primary" style="display: block; flex-direction: column; border-radius:0px">Apply Now</a>

                    @endif
                </div>
            </div>

            @include('popup.job.applyJob', ['vacancy' => $vacancy])

            @endforeach
        </div>

        <div class="text-center">
            {{ $vacancies->links('pagination::default') }}
        </div>
    </div>
</div>



@endsection



        

    </div>
</div>


