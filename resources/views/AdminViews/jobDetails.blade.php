@extends('AdminViews.adminMaster')

@section('content')
    <body class="all-body">
    @if(session()->has('notif'))
        <div class="row" id="hid">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong>Notification !!</strong>{{session()->get('notif')}}
                </div>
            </div>
        </div>
    @endif
    <div class="container" id="add-job-container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Edit Job') }}</div>
                    <div class="card-body">
                        {{ Form::open(array('route' => array('jobs.update', $job->id), 'method' => 'PATCH' , 'files' => true) ) }}
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>
                                <div class="col-md-6">
                                    <input  id="title" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ $job->id }}" required autofocus>
                                    @if ($errors->has('id'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('id') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                    <input  id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $job->title }}" required autofocus>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('title') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ $job->company_name }}" required autofocus>
                                    @if ($errors->has('company_name'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('company_name') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                                <div class="col-md-6">
                                    <select id="category" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ $job->category}}" required autofocus>
                                        <option value="part time">part time</option>
                                        <option value="full time">full time</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $job->address }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('address') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>
                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ $job->street }}" required autofocus>
                                    @if ($errors->has('street'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('street') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $job->city }}" required autofocus>
                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('city') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>{{$job->description}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('description') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="requirements" class="col-md-4 col-form-label text-md-right">{{ __('Requirements') }}</label>
                                <div class="col-md-6">
                                    <textarea id="requirements" type="text" class="form-control{{ $errors->has('requirements') ? ' is-invalid' : '' }}" name="requirements" required autofocus>{{ $job->requirements}}</textarea>
                                    @if ($errors->has('requirements'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('requirements') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>
                                <div class="col-md-6">
                                    <input id="salary" type="text" class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary" value="{{ $job->salary}}" required autofocus>
                                    @if ($errors->has('salary'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('salary') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file border" name="picture" id="picture" accept="image/*">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>


@stop