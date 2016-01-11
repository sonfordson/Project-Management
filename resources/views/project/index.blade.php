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
                @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="row">

                    <section class="col-lg-7 connectedSortable">

                        @include('project.table')

                    </section>

                    <section class="col-lg-5 connectedSortable">

                        @include('project.form')


                    </section>

                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('layouts.partials.footer')

    </div>

@stop

