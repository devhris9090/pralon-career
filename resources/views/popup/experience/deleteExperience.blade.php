{{-- delete Experience --}}
<div class="modal fade" id="deleteExperienceModal-{{ $experience->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteExperienceModalLabel-{{ $experience->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteExperienceModalLabel-{{ $experience->id }}">Delete Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete your experience at <strong>{{ $experience->companyName }}</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #555; border-color: #555; color: #fff;">Cancel</button>
                <form action="{{ route('experience.delete', $experience->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>