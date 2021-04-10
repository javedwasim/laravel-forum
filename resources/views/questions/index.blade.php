@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('All Questions') }}</div>

                    <div class="card-body">
                       @foreach($questions as $question)
                           <div class="media">
                               <div class="media-body">
                                   <h3 class="me-0">
                                       {{str_limit($question->body,250)}}
                                   </h3>
                               </div>
                           </div>
                           <hr>
                        @endforeach
                        {{$questions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
