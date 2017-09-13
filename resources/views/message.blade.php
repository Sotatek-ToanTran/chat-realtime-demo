@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Test realtime</div>
                    <div class="panel-body">
                        <div id="our-msg"></div>
                        <from>
                            Name : <input type="text" id="name">
                            <br/>
                            <br/>
                            Content : <textarea rows="5" style="width: 100%" id="content"></textarea>
                            <button id="btn-test">Send</button>
                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
