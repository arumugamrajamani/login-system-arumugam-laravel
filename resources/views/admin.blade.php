@extends('layouts.auth')

@section('content')


<div class="container ">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Dashboard</h4>
    </div>

    <form method="post" action="/comment">
        <div class="form group form-row px-2">
            @csrf
          <div class="col-md-10 mb-3">
      
                <label for="validationTextarea">Comments</label>
                <textarea class="form-control" id="comments" name="comments" row="2" placeholder="Comments"style="height:100%;"  required></textarea>

                <input type="hidden" name="user_id" value="{{$user_id=auth()->user()->id;}}">
                <input type="hidden" name="user_name" value="{{$user_name=auth()->user()->name;}}">
                <input type="hidden" name="user_role" value="{{$user_role=auth()->user()->user_role;}}">
        </div>
        <div class="col-md-2 mt-5 mb-3 text-center">
            <button class="btn btn-prim btn-lg" style="  font-size: 13px;
            color: #FFF;
            letter-spacing: 1px;
            line-height: 15px;
            border: 2px solid rgba(58, 133, 191, 0.75);
            background: rgba(58, 133, 191, 0.75);
            border-radius: 40px;" type="submit">Submit</button>
        </div>
    </div>


   </form>
   <?php 
   /*$user_id=auth()->user()->id;$user_name=auth()->user()->name;
   print_r($user_id.$user_name);*/
   ?>
    <div class="row d-flex justify-content-center mt-3">

        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <h5 class="px-3">comments</h5>

            </div>
      
            @foreach ($comments as $comment)
            <div class="card p-3"> 
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <span><span><small class="font-weight-bold text-primary">{{$comment -> user_name}}</small> <small class="font-weight-bold">{{$comment -> user_role}}</small></span> </div> <small>{{$comment -> created_at}}</small>
                </div>
                <p class="py-3">{{ $comment -> comment}}</p>

            </div>

            @endforeach
                

        </div>
    </div>
</div>
</div>
<style>
    body {
    background-color: #f7f6f6
}

.card {
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px
}

.dots {
    height: 4px;
    width: 4px;
    margin-bottom: 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block
}

.badge {
    padding: 7px;
    padding-right: 9px;
    padding-left: 16px;
    box-shadow: 5px 6px 6px 2px #e9ecef
}

.user-img {
    margin-top: 4px
}

</style>
@endsection