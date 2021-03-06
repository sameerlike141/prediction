@extends('dashboard.authBase')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1>{{ __('Register') }}</h1>
                            <p class="text-muted">Create your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/svg/free-symbol-defs.svg#cui-user"></use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name"
                                    value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/svg/free-symbol-defs.svg#cui-envelope-open">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}"
                                    name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/svg/free-symbol-defs.svg#cui-lock-locked">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="password" placeholder="{{ __('Password') }}"
                                    name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/svg/free-symbol-defs.svg#cui-lock-locked">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}"
                                    name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Register') }}</button>
                            <div class="mt-3 mb-3 text-center"> - or - </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('login') }}"
                                    class="btn btn-block btn-primary active mt-3">{{ __('login') }}</a>
                            @endif
                        </form>
                    </div>
                    {{-- <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>twitter</span>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection
