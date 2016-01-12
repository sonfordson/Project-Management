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
                      @include('layouts.partials.flash')
                <div class="row">

                    <section class="col-lg-6 connectedSortable">

                        @include('milestone.table')

                    </section>
                 <section class="col-lg-6 onnectedSortable">

                        @include('milestone.form')
                        </section>

                </div>
         </section>
        </div>
        @include('layouts.partials.footer')

    </div>

@stop

