<div>
<section class="col-lg-6 connectedSortable">

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Skills</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input wire:model='search_skill' type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
    <div class="box-body">
        <div class="box">
           
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @forelse ($skills as $skill)
                <tr>
                    <td>{{ Str::ucfirst($skill->name) }}</td>
                    <td>{{ Str::ucfirst($skill->category->name) }}</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td><div class="tools">
                        <a href="#"><i wire:click="edit('{{ $skill->slug }}')" 
                            data-toggle="modal" data-target="#edit-skill" class="fa fa-edit"></i></a>
                            <a x-data onclick="return confirm('Are you sure?') ? @this.delete('{{ $skill->slug }}') : false"
                                 href="#"> <i title="Delete" class="fa fa-trash-o text-danger"></i></a>
                      </div></td>
                  </tr>
                @empty
                <tr>
                    <td></td>
                    <td></td>
                    <td><h5>No skills found.</h5></td>
                    <td></td>
                  </tr>
                    
                @endforelse
                            
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix no-border">
        <div>
            {{-- {{ $skills->links() }} --}}
        </div>
        <button  wire:click="reset_create_modal" data-toggle="modal" data-target="#add-skill" 
        type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
    </div>
    </div>

</section>


{{-- edit modal --}}
<div wire:ignore class="modal fade" id="edit-skill">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Skill</h4>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update'>
            <input type="hidden" wire:model="skill_slug">
            <div class="form-group">
              <input wire:model.defer="name" type="text" class="form-control" placeholder="Skill Name..">
            </div>
         
            <div class="form-group">
                <select wire:model.defer="category_options.select_category" class="form-control">
                    <option disabled value="">Select to change...</option>
                    @forelse ($select_category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                    <option disabled value="">Create category...</option>
                    @endforelse                    
                </select>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  {{-- end edit modal --}}

<div wire:ignore class="modal fade" id="add-skill">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Skill</h4>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store'>
            <div class="form-group">
              <input wire:model.defer="name" type="text" class="form-control" placeholder="Skill Name..">
            </div>
            <div class="form-group">
                <select wire:model.defer="category_options.select_category" class="form-control">
                    <option disabled value="">Choose category...</option>
                    @forelse ($select_category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                    <option disabled value="">Create category...</option>
                    @endforelse                    
                </select>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>