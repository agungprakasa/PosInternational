@extends('adminlte.master')

@section('header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
</div><!-- /.row -->

@endsection

@section('content')

<h2 class="text-center display-4">Search</h2>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="simple-results.html">
        <div class="input-group">
          <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
            <div class="input-group-append">
              <button type="submit" class="btn btn-lg btn-default">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>

<div class="row">
    <div class="col-md-12">
      <!-- The time line -->
      <div class="timeline">
        <!-- timeline time label -->
        <div class="time-label">
          <span class="bg-red">10 Feb. 2014</span>
        </div>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <div>
          <i class="fas fa-envelope bg-blue"></i>
          <div class="timeline-item">
            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

            <div class="timeline-body">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
              weebly ning heekya handango imeem plugg dopplr jibjab, movity
              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
              quora plaxo ideeli hulu weebly balihoo...
            </div>
            <div class="timeline-footer">
              <a class="btn btn-primary btn-sm">Read more</a>
              <a class="btn btn-danger btn-sm">Delete</a>
            </div>
          </div>
        </div>
        <!-- END timeline item -->
        <!-- timeline item -->
        <div>
          <i class="fas fa-user bg-green"></i>
          <div class="timeline-item">
            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
          </div>
        </div>
        <!-- END timeline item -->
        <!-- timeline item -->
        <div>
          <i class="fas fa-comments bg-yellow"></i>
          <div class="timeline-item">
            <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
            <div class="timeline-body">
              Take me to your leader!
              Switzerland is small and neutral!
              We are more like Germany, ambitious and misunderstood!
            </div>
            <div class="timeline-footer">
              <a class="btn btn-warning btn-sm">View comment</a>
            </div>
          </div>
        </div>
        <!-- END timeline item -->
        <!-- timeline time label -->
        <div class="time-label">
          <span class="bg-green">3 Jan. 2014</span>
        </div>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <div>
          <i class="fa fa-camera bg-purple"></i>
          <div class="timeline-item">
            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
            <div class="timeline-body">
              <img src="https://placehold.it/150x100" alt="...">
              <img src="https://placehold.it/150x100" alt="...">
              <img src="https://placehold.it/150x100" alt="...">
              <img src="https://placehold.it/150x100" alt="...">
              <img src="https://placehold.it/150x100" alt="...">
            </div>
          </div>
        </div>
        <!-- END timeline item -->
        <div>
          <i class="fas fa-clock bg-gray"></i>
        </div>
      </div>
    </div>
    <!-- /.col -->
</div>

@endsection