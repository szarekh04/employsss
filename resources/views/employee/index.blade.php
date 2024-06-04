  @extends('layouts.app')

  @section('content')

  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>BSIT-3A</h3>

                <p>EXAMINERS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('employee/dashboard')}}" class="small-box-footer">Redirect to Table <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

    

  @endsection

