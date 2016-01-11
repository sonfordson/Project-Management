@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('layouts.partials.header')

        @include('layouts.partials.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    PROJECTS
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <section class="content">
                <section class="content-header">
                    <h1>
                        PROJECT
                        <small>List of all Teams</small>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">   <h2><a href="#">{{ $teams->name }}</a></h2></h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <h5 >{{ $teams->roles }}</h5>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            TEAM
                        </div><!-- /.box-footer-->
                    </div><!-- /.box -->
                <br/>
                 </section>
                </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('layouts.partials.footer')

    </div>

@stop

