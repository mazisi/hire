<div class="row">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <form wire:submit.prevent='store'>
    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
            </div>

            <div class="content with-padding padding-bottom-10">
                 <div class="row">
                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>Job Title</h5>
                            <input wire:model="job_title" type="text" class="with-border">
                        </div>
                    </div>

                    <div wire:ignore class="col-xl-4">
                        <div class="submit-field">
                            <h5>Province</h5>                           
                            <div class="input-group mb-3">
                                <select wire:model="selectedProvince" class="custom-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  @foreach ($provinces as $province)
                                  <option value="{{ $province->province }}">{{ $province->province }}</option>
                                  @endforeach 
                                </select>
                              </div>
                              
                        </div>
                    </div>
                   
                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>City</h5>
                            <div class="input-group mb-3">
                                <select wire:model="city_id" class="custom-select" id="inputGroupSelect01">
                                  <option selected>Choose city...</option>
                                  @if (!is_null($selectedProvince))
                                  @foreach ($cities as $city)
                                  <option value="{{ $city->id }}">{{ $city->name }}</option>
                                  @endforeach
                                  @endif
                                </select>
                                @error('city_id')<p class="text-danger">{{ $message }}</p>@enderror
                              </div>                             
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="input-group mb-3 submit-field">
                            <h5>Job Category</h5>
                         <select wire:model="selectedCategory" class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              @foreach ($job_categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                              @error('category_id')<p class="text-danger">{{ $message }}</p>@enderror                  
                            </select>
                          </div>
                    </div>

                    
                   

                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>Required Job Skills
                                  <i class="help-icon"></i></h5>
                                  <div class="input-group mb-3">
                                   <select wire:model="skill_id" multiple class="custom-select" id="inputGroupSelect01">
                                      <option selected>Choose...</option>
                                      @if (!is_null($selectedCategory))
                                      @foreach ($skills as $skill)
                                      <option value="{{ $skill->id }}">{{ Str::ucfirst($skill->name) }}</option>
                                      @endforeach
                                      @endif
                                    </select> 
                                                                      
                            @error('skill_id')<p class="text-danger">{{ $message }}</p>@enderror
                                  </div>
                        </div>
                    </div>

                    <div wire:ignore class="col-xl-12">
                        <div class="submit-field">
                            <h5>Job Description</h5>
                            <textarea wire:model.defer="description" id="summernote" cols="30" rows="5" class="with-border"></textarea>
                    </div>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
<div wire:ignore class="col-xl-12"
wire:ignore
x-data
x-init="
FilePond.setOptions({
allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
server: {
process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
@this.upload('files',file, load, error, progress)
},
revert: (filename, load) =>{
@this.removeUpload('files', filename, load)
},
},
});
FilePond.create($refs.input);">
                        <label class="uploadButton-button ripple-effect" for="upload">
                            Images or documents that might be helpful in describing your job</label>
                        <input wire:model.defer="files" x-ref="input" type="file" multiple>
                        @error('files')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                        
                </div>
            
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</button>
    </div>
</form>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</div>