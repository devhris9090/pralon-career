{{-- add Education--}}
<div class="modal fade" id="editSkillModal-{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="editSkillModal-{{ $skill->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSkillModal-{{ $skill->id }}">Edit {{ $skill->skillName }} Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -14px;">
                    <span aria-hidden="true" class="align-middle" style="font-size: 40px; line-height: 0;">&times;</span>
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
                <form class="form-horizontal form-bordered add-form" method="POST" action="{{ route('skill.edit', $skill->id) }}">
                    @csrf

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="skillName">Skill</label>
                        <div class="col-md-6">
                            <input type="text" name="skillName" id="skillName" class="form-control" required tabindex="1" value="{{ $skill->skillName }}">
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="skillCategory">Skill Category</label>
                        <div class="col-md-6">
                            <select name="skillCategory" id="skillCategory" class="form-control" required tabindex="1">
                                <option value="">- Select Category -</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_name }}" {{ $category->category_name == $skill->skillCategory ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="skillValue">Skill Value</label>
                        <div class="col-md-6">
                            <select name="skillValue" id="skillValue" class="form-control">
                                <option value="">- Select Skill Value -</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}" {{ $i == $skill->skillValue ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group required">
                        <label class="col-md-3 control-label form-label" for="skillFrom">How you get that skill ?</label>
                        <div class="col-md-6">
                            <textarea name="skillFrom" id="skillFrom" class="form-control" tabindex="9">{{ $skill->skillFrom }}</textarea>
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