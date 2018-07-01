
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('GymRegistration') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('gymStore') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="gym_name" class="col-md-4 col-form-label text-md-right">{{ __('Gym Name') }}</label>

                                <div class="col-md-6">
                                    <input id="gym_name" type="text" class="form-control{{ $errors->has('gym_name') ? ' is-invalid' : '' }}" name="gym_name" value="{{ old('gym_name') }}" required autofocus>

                                    @if ($errors->has('gym_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gym_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitiude') }}</label>

                                <div class="col-md-6">
                                    <input id="latitude" type="number" step="0.000000001" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude') }}" required autofocus>

                                    @if ($errors->has('latitude'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                                <div class="col-md-6">
                                    <input id="longitude" type="number" step="0.000000001" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude') }}" required>

                                    @if ($errors->has('longitude'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="opening_time" class="col-md-4 col-form-label text-md-right">{{ __('Opening Time') }}</label>

                                <div class="col-md-6">
                                    <input id="opening_time" type="time" step="1" class="form-control{{ $errors->has('opening_time') ? ' is-invalid' : '' }}" name="opening_time" required>

                                    @if ($errors->has('opening_time'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('opening_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="closing_time" class="col-md-4 col-form-label text-md-right">{{ __('Closing Time') }}</label>

                                <div class="col-md-6">
                                    <input id="oclosing_time" type="time" step="1" class="form-control{{ $errors->has('closing_time') ? ' is-invalid' : '' }}" name="closing_time" required>

                                    @if ($errors->has('closing_time'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('closing_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register Gym') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
