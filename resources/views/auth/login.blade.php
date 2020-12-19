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

                <!-- Login Card -->
                <div class="col-md-8"> 
                  <div class="card">
                      <div class="card-header">{{ __('Login') }}</div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('login') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Login') }}
                                      </button>
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
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </main>
<!-- end of main content -->