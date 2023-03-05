@extends('admin.layout.mono')

@section('content')



<div class="row">
    <div class="col-xl-4">

        <!-- Income and Express -->
        <div class="card card-default">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
            </div>

        </div>


    </div>
    <div class="col-xl-8">
        <!-- Current Users  -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Current Users</h2>
                <span>Realtime</span>
            </div>
            <div class="card-body">
                <div id="barchartlg2"></div>
            </div>
            <div class="card-footer bg-white py-4">
                <a href="#" class="text-uppercase">Current Users Overview</a>
            </div>
        </div>
    </div>
</div>







@endsection