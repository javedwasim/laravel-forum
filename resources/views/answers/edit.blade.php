@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h1>Editing answer for question: <stron>{{$question->title}}</stron></h1>
                            <hr>
                            <form action="{{route('questions.answers.update', [$question->id, $answer->id])}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <textarea class="form-control {{$errors->has('body') ? 'is-valid' : ''}}" rows="7" name="body">{{old('body', $answer->body) }}</textarea>
                                    @if($errors->has('body'))
                                        <div class="invalid-feedback" style="display: block">
                                            <strong>{{$errors->first('body')}}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

