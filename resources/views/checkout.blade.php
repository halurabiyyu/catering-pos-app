<div class="container-fluid" style="height: 100vh">
    <div class="row ">
        <div class="container-fluid col-md-8 non-scroll-hide">
            @for ($i = 0; $i < 4; $i++)
                <div class="row">
                    @for ($j = 0; $j < 4; $j++)
                        <div class="col-sm-3">
                            <div class="card my-2 shadow">
                                <img src="{{asset('asset/slide1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
        <div class="col-md-4 bg-body-tertiary" style="height: 100vh;">
            <div class="m-auto rounded bg-white my-4 p-2 shadow-sm" style="width: 90%;">
                <div class="container-fluid">
                    <h3 class="fw-bold">Ringkasan Belanja</h3>
                </div>
                <div class="container-fluid">
                    <div class="d-flex justify-content-between my-2">
                        <div class="">
                            <span>Total : </span>
                        </div>
                        <div class="">
                            <span>Rp. 100.000</span>
                        </div>
                    </div>
                    <form action="" method="POST" >
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-success fw-bold" style="width: 60%" type="submit">Beli</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>

    </div>