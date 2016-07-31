@extends('layout')

@section('content')
    <div class="container">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <a data-toggle="modal" data-target="#zipmodal" href="#" data-url="{{ URL::to('subcategories/'.$category['id'])}}">
                        <img width="20" height="20" alt="icon" src="/img/icons/{{$category['icon']}}"> {{$category['name']}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('modals')
    <!-- Modal -->
    <div class="modal fade" id="zipmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <form action="" method="post" class="zipcode-form modal-content">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input Your Zip</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="zipcode">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection