@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bus Altas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bus Alta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ url('Bus') }}" method="post" >
                @csrf
                <label for=""> Matricula:</label>
                <input class="form-control" type="Text" value="" name="Matricula">
                <div class="row">
                    <select class="form-control form-select" aria-label="Default select example" name="Driver_id">
                        <option selected>Elija al conductor</option>
                        @foreach($Driver as $Driver)  
                        <option value={{$Driver->id}}>{{$Driver->Name_Driver}}</option>
                           @endforeach
                        </select>
                        <div class="row">
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')
