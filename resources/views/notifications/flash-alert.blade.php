@if(Session::has('category_created'))
    <div class=" d-flex justify-content-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session('category_created')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@elseif(Session::has('category_updated'))
    <div class=" d-flex justify-content-center">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session('category_updated')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

@elseif(Session::has('category_deleted'))
    <div class=" d-flex justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{Session('category_deleted')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif