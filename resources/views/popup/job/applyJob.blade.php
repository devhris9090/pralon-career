<div class="modal fade" id="applyJob-{{ $vacancy->id_vacancy }}" tabindex="-1" role="dialog" aria-labelledby="applyJob-{{ $vacancy->id_vacancy }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyJob-{{ $vacancy->id_vacancy }}">Job Detail</h5>
                <button type="butsdmkitac_career.company_vacancyton" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="job-detail-container">
                    <div class="job-banner">
                        <div class="image-container" style="display: flex; justify-content: center; align-items: center; height: 200px;">
                            <img src="{{ asset('template/img/vacancy/' . $vacancy->banner) }}" alt="Company Logo" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                        </div>
                    </div>
                    <div class="job-info">
                        <h4><strong>{{ $vacancy->vacancy_name }}</strong> at {{ $vacancy->company_name }}</h4>
                        <p>Details: {{ $vacancy->vacancy_detail }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('job.apply', $vacancy->id_vacancy) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>
