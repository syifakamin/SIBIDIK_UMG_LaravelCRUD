@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="d-flex align-items-center justify-content-between shadow-sm">
        <h1 class="logo my-0 font-weight-normal h4">
            <a href="/"> SI BIDIK UMG</a>
        </h1>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo" style="width:300px;height:50px;" /> 
        </div>
    </header>
<!-- end of header -->

<!-- Navigation & Tittle -->
    <title>{{ env('APP_NAME') }}</title>
<!-- end of Navigation & tittle -->

<!-- main content -->
    <main>
      <div>
        <div class="d-flex flex-column flex-md-row align-items-md-center py-5">
          <div class="container">
            <div class="row">
              <div class="section-about col-lg-6 mb-4 mb-lg-0">
                <div>
                  <h2>Selamat Datang di SI BIDIK UMG</h2>
                  <p>
                    Sistem ini dibuat untuk membantu dalam seleksi calon mahasiswa penerima beasiswa bidikmisi Universitas Muhammadiyah Gresik.
                  </p>
                  <p>
                    <a href="http://pmb.umg.ac.id/">
                      pmb.umg.ac.id
                    </a>
                    | P2MB & Humas UMG
                  </p>
                </div>
              </div>
              <div class="section-login col-lg-6">
                <h4>Login untuk masuk Sistem</h4>

                <div class="card-login card mb-3">
                  <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <div class="col-md-8 offset-md-3">
                                  @if (Route::has('register'))
                                      <a class="btn btn-link" href="{{ route('register') }}">
                                          {{ __('Register') }}
                                      </a>
                                  @endif
                                </div>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </main>
<!-- end of main content -->