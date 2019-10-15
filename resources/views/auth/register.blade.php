@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="NIC" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>

                            <div class="col-md-6">
                                <input id="NIC" type="number" class="form-control @error('NIC') is-invalid @enderror" name="NIC" required autocomplete="NIC">

                                @error('NIC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="Location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                 <select  type="text" name = "Location" class="form-control @error('Location') is-invalid @enderror" required  autocomplete="Location">
                                      <option value="">Chose Location</option>
                                      <option >Ampara</option>
                                      <option>Anuradhapura</option>
                                      <option>Badulla</option>
                                      <option>Batticaloa</option>
                                      <option>Colombo</option>
                                      <option>Galle</option>
                                      <option>Gampaha</option>
                                      <option>Hambantota</option>
                                      <option>Jaffna</option>
                                      <option>Kalutara</option>
                                      <option>Kandy</option>
                                      <option>Kegalle</option>
                                      <option>Kilinochchi</option>
                                      <option>Kurunegala</option>
                                      <option>Mannar</option>
                                      <option>Matale</option>
                                      <option>Matara</option>
                                      <option>Monaragala</option>
                                      <option>Mullativu</option>
                                      <option>Nuwara Eliya</option>
                                      <option>Polonnaruwa</option>
                                      <option>Puttalam</option>
                                      <option>Ratnapura</option>
                                      <option>Trincomalee</option>
                                      <option>Vavuniya</option>
                                   </select>
                                @error('Location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <div class="form-group row">
                            <label for="catagory" class="col-md-4 col-form-label text-md-right">{{ __('Catagory') }}</label>

                            <div class="col-md-6">
                                 <select  type="text" name = "catagory" class="form-control @error('catagory') is-invalid @enderror" required  autocomplete="catagory">
                                        <option value="">Choose Category</option>
                                        <option value="Meson">Meson</option>
                                        <option value="Carpentor">Carpentor</option>
                                        <option value="Freelance">Freelance</option>
                                        <option value="pipeworker">pipeworker</option>
                                        <option value="Teacher">Teacher</option>
                                     </select>
                                  @error('catagory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                           <div class="form-group row">
                            <label for="Mobile_Number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                  <input id="Mobile_Number" type="number" class="form-control @error('Mobile_Number') is-invalid @enderror" name="Mobile_Number" required autocomplete="Mobile_Number">

                                  @error('Mobile_Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="salary_per_hour" class="col-md-4 col-form-label text-md-right">{{ __('Salary Per Hour(Rs.)') }}</label>

                            <div class="col-md-6">
                                  <input id="salary_per_hour" type="number" class="form-control @error('salary_per_hour') is-invalid @enderror" name="salary_per_hour" required autocomplete="salary_per_hour">

                                  @error('salary_per_hour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
