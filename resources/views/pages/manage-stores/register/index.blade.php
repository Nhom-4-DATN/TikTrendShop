@extends('layouts.app')
@section('content')
    <style>
        #progressbar {
            margin-bottom: 3vh;
            overflow: hidden;
            color: rgb(252, 103, 49);
            padding-left: 0px;
            margin-top: 3vh
        }

        #progressbar li {
            list-style-type: none;
            font-size: x-small;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
            color: rgb(160, 159, 159);
        }

        #progressbar #step1:before {
            content: "";
            color: rgb(252, 103, 49);
            width: 5px;
            height: 5px;
            margin-left: 0px !important;
            /* padding-left: 11px !important */
        }

        #progressbar #step2:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-left: 32%;
        }

        #progressbar #step3:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-right: 32%;
            /* padding-right: 11px !important */
        }

        #progressbar #step4:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-right: 0px !important;
            /* padding-right: 11px !important */
        }

        #progressbar li:before {
            line-height: 29px;
            display: block;
            font-size: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: auto;
            z-index: -1;
            margin-bottom: 1vh;
        }

        #progressbar li:after {
            content: '';
            height: 2px;
            background: #ddd;
            position: absolute;
            left: 0%;
            right: 0%;
            margin-bottom: 2vh;
            top: 1px;
            z-index: 1;
        }

        .progress-track {
            padding: 0 8%;
        }

        #progressbar li:nth-child(2):after {
            margin-right: auto;
        }

        #progressbar li:nth-child(1):after {
            margin: auto;
        }

        #progressbar li:nth-child(3):after {
            float: left;
            width: 68%;
        }

        #progressbar li:nth-child(4):after {
            margin-left: auto;
            width: 132%;
        }

        #progressbar li.active {
            color: black;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: rgb(252, 103, 49);
        }
    </style>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header bg-transparent border-0 mt-3 ">
                @yield('progress-track')
            </div>
            <div class="card-body">
                @yield('form')
            </div>
        </div>
    </div>
    <script>
        const provinces_url = "{{ route('components.render-provinces') }}";
        const renderLocation = "{{ route('components.render-list-location') }}";
    </script>
@endsection