@include('layouts.app')
<body class="all-body">
  <link rel="stylesheet" href="/css/master.css">
  <script src="/js/master.js"></script>
  <div class="container" id="margin-container">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">{{ __('Register') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}" id="reg-form"  enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                              <div class="col-md-6">
                                  <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                  @if ($errors->has('username'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                              <div class="col-md-6">
                                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                  @if ($errors->has('address'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('address') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="tele_no" class="col-md-4 col-form-label text-md-right">{{ __('tele no') }}</label>

                              <div class="col-md-6">
                                  <input id="tele_no" type="text" class="form-control{{ $errors->has('tele_no') ? ' is-invalid' : '' }}" name="tele_no" value="{{ old('tele_no') }}" required autofocus>

                                  @if ($errors->has('tele_no'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('tele_no') }}</strong>
                                      </span>
                                  @endif
                              </div>

                          </div>
                          <div class="form-group row">
                              <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                              <div class="col-md-6">
                                  <select id="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required autofocus>
                                      <option value="Business Owner" id="business-selected">Business Owner</option>
                                      <option value="Find Job" id="finjob-selected">Find Job</option>
                                  </select>
                              </div>
                          </div>
                          <br>
                          <div class="form-group row mb-0" id="bu">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Register') }}
                                  </button>
                                  <br><br><br>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
