@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<form action="{{route('admin.testimonial.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$testimonial->name}}" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="6" required>{{$testimonial->description}}</textarea>
                        </div>        
                        
                        <div class="form-group">
                            <label>Image<span class="text-danger">*</span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" value="{{$testimonial->image}}" class="selected-files" >
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label>Stars <span class="text-danger">*</span></label>
                            <select name="stars" class="form-control" id="stars" required>
                                <option value="1 Star" {{$testimonial->stars == '1 Star' ? "selected" : ""}}>1 Star</option>
                                <option value="2 Stars" {{$testimonial->stars == '2 Stars' ? "selected" : ""}}>2 Stars</option>
                                <option value="3 Stars" {{$testimonial->stars == '3 Stars' ? "selected" : ""}}>3 Stars</option>
                                <option value="4 Stars" {{$testimonial->stars == '4 Stars' ? "selected" : ""}}>4 Stars</option>
                                <option value="5 Stars" {{$testimonial->stars == '5 Stars' ? "selected" : ""}}>5 Stars</option>
                            </select>
                        </div>  

                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="order" value="{{$testimonial->order}}" required>
                        </div>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled" {{$testimonial->status == 'Enabled' ? "selected" : ""}}>Enable</option>   
                                <option value="Disabled" {{$testimonial->status == 'Disabled' ? "selected" : ""}}>Disable</option>                                
                            </select>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $testimonial->id }}"/>
                    <a href="{{route('admin.testimonial.index')}}" type="button" class="btn rounded-pill text-light px-4 py-2 me-2 btn-primary">Back</a>
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success" value="Update" />
                </div>

            </div><br>
          
                
            </div><br>
            
        </div>

    </form>

    <script>
        function yesnoCheck(that) {
            if (that.value == 'article') {
                document.getElementById("article").style.display = "block";
            } else {
                document.getElementById("article").style.display = "none";
            }
            if (that.value == 'youtube') {
                document.getElementById("youtube").style.display = "block";
            } else {
                document.getElementById("youtube").style.display = "none";
            }
        }
    </script> 
    <script>
        function yesnoCheck(that) {
            if (that.value == 'article') {
                document.getElementById("article").style.display = "block";
            } else {
                document.getElementById("article").style.display = "none";
            }
            if (that.value == 'youtube') {
                document.getElementById("youtube").style.display = "block";
            } else {
                document.getElementById("youtube").style.display = "none";
            }
        }

        $(document).ready(function(){
            if($('#type').val() == 'article'){
                $('#article').css('display','block');
            }
            else{
                $('#article').css('display','none');
            }  
            if($('#type').val() == 'youtube'){
                $('#youtube').css('display','block');
            }
            else{
                $('#youtube').css('display','none');
            }           
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



<br><br>




@endsection
