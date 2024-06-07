@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h3>  5</h3>

                <p>Team</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('admin/viewallpayment') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5<sup style="font-size: 20px"></sup></h3>

                <p>Galleries</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('admin/viewbooks') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>7</h3>

                <p>Articles </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('admin/allsubjects') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $hepitis }}</h3>

                <p>Hepatisis Campaign Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('admin/viewsubject') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $arts }}</h3>
                <p>Arts Enrichments</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/viewallpayment') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $legals }}</h3>
                <p>Legal Articles</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/viewteachers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $testmony }}</h3>
                <p>Testimonies</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/viewallpayment') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{ $contacts }}</h3>
                <p>Contacts </p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/abujateachers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              <!-- <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>  -->

              <div class="info-box-content">
                <span class="info-box-text">Enquiries</span>
                <span class="info-box-number">
                  5
                  {{-- <small>%</small> --}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          </div>
          <!-- /.col -->
          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Queries</span>
                <span class="info-box-number">8</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Replied Queries</span>
                <span class="info-box-number">6</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Events</span>
                <span class="info-box-number">7</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Testimonies</span>
                <span class="info-box-number">78</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Replied Queries</span>
                <span class="info-box-number">9</span>
              </div>
            </div>
          </div> -->
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Users</h3>
                    <div class="card-tools">
                      {{-- <span class="badge badge-danger">7 New Lecturers</span> --}}
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                 
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach ($view_users as $view_user)
                          <li>
                           <a href="{{ url('viewallpayment/'.$view_user->ref_no) }}"> <img style="width: 50px; height: 50px;" src="{{ URL::asset("/public/../$view_user->images")}}" alt="User Image"></a>
                            <a class="users-list-name" href="{{ url('viewallpayment/'.$view_user->ref_no) }}">{{ $view_user->name }} {{ $view_user->phone }}</a>
                            <span class="users-list-date">Today</span>
                          </li>
                      
                    @endforeach
                  </ul>
                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ url('admin/viewallpayment') }}">View All Users</a> 
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->





              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Latest Arts Enrichments</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th> ID</th>
                        <th>Name</th>
                        <th>Title</th>

                        <th>Status</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($view_orws as $view_orw)
                        <tr>
                          <td><a href="#">{{ $view_orw->ref_no }}</a></td>
                          <td>{{ $view_orw->ownersname }}</td>
                          <td>{{ $view_orw->title }}</td>

                          <td>@if ($view_orw->status == null)
                            <span class="badge badge-secondary">In Progress</span>
                          @elseif($view_orw->status == 'approved')
                          <span class="badge badge-info">Approved</span>
                          @elseif($view_orw->status == 'suspend')
                          <span class="badge badge-danger">Suspended</span>
                          @elseif($view_orw->status == 'admitted')
                          <span class="badge badge-info">Admitted</span>
                          @endif
                        </td>
                       

                        </tr>
                        @endforeach
                      </tbody>
                    </table> 
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                 <a href="{{ url('admin/vieworw') }}" class="btn btn-sm btn-info float-left">View </a> 
                  {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->





            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Hepatitis Campaign</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Amount</th>
                      <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($view_books as $view_book)
                      <tr>
                        <td><a href="#">Hepatitis Campaign {{ $view_book->ownersname }}</a></td>
                        <td><a href="#">{{ $view_book->title }}</a></td>
                        
                        <td>{{ $view_book->amount }}</td>

                        <td>@if ($view_book->status == null)
                          <span class="badge badge-secondary">In Progress</span>
                        @elseif($view_book->status == 'Success')
                        <span class="badge badge-success">Success</span>
                        @elseif($view_book->status == 'approved')
                        <span class="badge badge-success">Approved</span>
                        @elseif($view_book->status == 'confirm')
                        <span class="badge badge-info">Confirmed</span>
                        @endif
                      </td>
                     
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                 <a href="{{ url('admin/viewbooks') }}" class="btn btn-sm btn-info float-left">View All </a> 
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


          
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Galleries</span>
                <span class="info-box-number">6</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
            </div> -->
            <!-- /.info-box -->

           

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Contacts</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                 @foreach ($view_contacts as $view_contact)
                  <li class="item">
                    <a href="viewresults/{{ $view_contact->id }}" class="btn btn-info">View
                     </a>
                    <div class="product-info">
                      <a href="{{ url('admin/viewcontact') }}
                        <span class="badge badge-warning float-right">{{ $view_contact->email }}</span></a>
                      <span class="product-description">
                       By {{ $view_contact->fname }} 
                      </span>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- /.card -->



            <!-- PRODUCT LIST -->
            <!-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">First TIme Payments</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  {{-- @foreach ($student_sums as $student_sum)
                  <li class="item">
                    <a href="{{ $student_sum->ref_no }}" class="btn btn-info">View 
                     </a>
                     <small><a href="viewsfees/{{ $student_sum->ref_no }}" class="btn btn-info">₦ {{ $student_sum->amount }}
                     </a></small>
                     
                    <div class="product-info">
                      <a href="{{ $student_sum->ref_no }}" class="product-title">{{ $student_sum->programname }}
                        <span class="badge badge-warning float-right">{{ $student_sum->registercourse['programname']}}</span></a>
                      <span class="product-description">
                       By {{ $student_sum->fname }} {{ $student_sum->surname }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                </ul> --}}
              </div>
            </div> -->
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  </div>
  @include('dashboard.admin.footer')