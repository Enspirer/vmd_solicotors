@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Title <span style="color:red">*</span></label>
                            <input type="text" id="title" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label>Slug <span style="color:red">*<span></label>
                            <input type="text" class="form-control" name="slug" id="slug" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="editor" name="description" rows="4"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Feature Image <span style="color:red">*<span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="feature_image" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        @if(count(Modules\Blog\Entities\Post::where('featured','Enabled')->get()) < 5 )
                            <div class="form-group">
                                <label>Featured <span style="color:red">*<span></label>
                                <select class="form-control" name="featured" required>
                                    <option value="Enabled">Enable</option>   
                                    <option value="Disabled" selected>Disable</option>                                
                                </select>
                            </div>
                        @else
                            <div class="form-group">
                                <label>Featured <span style="color:red">*<span></label>
                                <select class="form-control" name="featured" required>
                                    <option value="Enabled" disabled>Enable</option>   
                                    <option value="Disabled">Disable</option>                                
                                </select>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="number" class="form-control" name="order" required>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-5 text-right">
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success" value="Submit" />
                </div>
            </div><br>       
            
        </div>

    </form>


<br><br>

<script>
	$("#title").keyup(function(){
    	var str = $(this).val();
    	var trims = $.trim(str)
    	var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    	$("#slug").val(slug.toLowerCase()) 
	});    
</script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );    
</script>



@endsection
