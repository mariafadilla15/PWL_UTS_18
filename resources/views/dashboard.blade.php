@extends('template')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0" style="font-family: cursive;"><b>Profil</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dash')}}">Profil</a></li>
            <li class="breadcrumb-item active">PWL_UTS_18</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
    <section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
                    </table>
                </div>
        </div>
    </div>
    </section>
    
@endsection

<script>
    alert('Hi, Welcome!');
</script>
