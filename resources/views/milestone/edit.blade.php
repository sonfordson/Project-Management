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

                <div class="row">

                    <section class="col-lg-12 connectedSortable">
                        @include('layouts.partials.flash')

                        @include('milestone.update')
                    </section>

                </div>
            </section>
        </div>
        @include('layouts.partials.footer')

    </div>

@stop

