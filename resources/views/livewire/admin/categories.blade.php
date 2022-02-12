<div>
  @push('alpine')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @endpush
  <section class="col-lg-6 connectedSortable">
  
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>

        <h3 class="box-title">All Categories</h3>

        <div class="box-tools pull-right">
          <ul class="pagination pagination-sm inline">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <ul class="todo-list">
          @forelse ($categories as $category)
          <li>
            <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <!-- checkbox -->
            <input type="checkbox" value="">
            <span class="text">{{ Str::ucfirst($category->name) }}</span>
            <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
            <div class="tools">
              <i wire:click="edit('{{ $category->slug }}')" data-toggle="modal" data-target="#edit-category" class="fa fa-edit"></i>
              <i  x-data onclick="return confirm('Are you sure?') ? @this.delete('{{ $category->slug }}') : false" title="Delete" 
                 class="fa fa-trash-o"></i>
            </div>
          </li>
          @empty
              
          @endforelse
             
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix no-border">
        <button wire:click="reset_create_modal" data-toggle="modal" data-target="#create-category" type="button" class="btn btn-default pull-right">
          <i class="fa fa-plus"></i> Add item</button>
      </div>
    </div>

  </section>
{{-- edit modal --}}
  <div wire:ignore class="modal fade" id="edit-category">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Category</h4>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update'>
            <input type="hidden" wire:model="slug">
            <div class="form-group">
              <input wire:model.defer="name" type="text" class="form-control" placeholder="Category Name..">
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

  <div wire:ignore class="modal fade" id="create-category">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store'>
            <div class="form-group">
              <input wire:model.defer="name" type="text" class="form-control" placeholder="Category Name..">
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