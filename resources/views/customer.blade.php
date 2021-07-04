@extends('layouts.auth')

@section('content')


<div class="container ">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Dashboard</h4>
    </div>

    <form>
        <div class="form-row px-2">
          <div class="col-md-10 mb-3">
      
                <label for="validationTextarea">Comments</label>
                <textarea class="form-control" id="comments" name="comments" row="2" placeholder="Comments"style="height:100%;"  required></textarea>
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

    <div class="row d-flex justify-content-center mt-3">

        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <h5 class="px-3">comments</h5>
            </div>
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2"> <span><span><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold"> - Admin</small></span> </div> <small>05/07/2021</small>
                </div>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio quisquam adipisci error omnis repudiandae obcaecati. Voluptate nisi molestiae enim, adipisci vero repellendus consectetur quis nobis? Ea atque numquam at.</p>

            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2"> <small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold">- Admin</small></span> </div> <small>05/07/2021</small>
                </div>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio quisquam adipisci error omnis repudiandae obcaecati. Voluptate nisi molestiae enim, adipisci vero repellendus consectetur quis nobis? Ea atque numquam at.</p>
            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold">- Customer </small></span> </div> <small>05/07/2021</small>
                </div>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio quisquam adipisci error omnis repudiandae obcaecati. Voluptate nisi molestiae enim, adipisci vero repellendus consectetur quis nobis? Ea atque numquam at.</p>

            </div>
            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/ZSkeqnd.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold"> - Admin</small></span> </div> <small>05/07/2021</small>
                </div>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio quisquam adipisci error omnis repudiandae obcaecati. Voluptate nisi molestiae enim, adipisci vero repellendus consectetur quis nobis? Ea atque numquam at.</p>

            </div>
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