@extends('layouts.master')
@section('content')

    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
    {{--            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-profile-information-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.update-password-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">--}}
    {{--                <div class="max-w-xl">--}}
    {{--                    @include('profile.partials.delete-user-form')--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="page-header mt-5">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content profile-tab-cont">
                <div class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" style="min-height: 400px">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Personal Details</span>
                                        <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                class="fa fa-edit mr-1"></i>Edit</a>
                                    </h5>
                                    <div class="row mt-5">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                        <p class="col-sm-9">{{Auth::user()->name }}</p>
                                    </div>
                                    {{--                                <div class="row">--}}
                                    {{--                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>--}}
                                    {{--                                    <p class="col-sm-9">24 Jul 1983</p>--}}
                                    {{--                                </div>--}}
                                    <div class="row">
                                        <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                        <p class="col-sm-9">{{Auth::user()->email }}</p>
                                    </div>
                                    {{--                                <div class="row">--}}
                                    {{--                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>--}}
                                    {{--                                    <p class="col-sm-9">305-310-5857</p>--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                            {{-- ------------------------            Modal             -------------------------------      --}}

                            <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Personal Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="send-verification" method="post"
                                                  action="{{ route('verification.send') }}">
                                                @csrf
                                            </form>
                                            <form method="post" action="{{ route('profile.update') }}">
                                                @csrf
                                                @method('patch')
                                                <div class="row form-row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            {{--                                                        <input type="text" class="form-control" value="John">--}}
                                                            <x-text-input id="name" name="name" type="text"
                                                                          class="form-control"
                                                                          :value="old('name', $user->name)" required/>
                                                            <x-input-error class="mt-2"
                                                                           :messages="$errors->get('name')"/>
                                                        </div>

                                                    </div>
                                                    {{--                                                <div class="col-12">--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <label>Date of Birth</label>--}}
                                                    {{--                                                        <div class="cal-icon">--}}
                                                    {{--                                                            <input type="text" class="form-control" value="24-07-1983"> </div>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                    <div class="col-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email ID</label>
                                                            {{--                                                        <input type="email" class="form-control" value="johndoe@example.com"> --}}
                                                            <x-text-input id="email" name="email" type="email"
                                                                          class="form-control"
                                                                          :value="old('email', $user->email)" required
                                                                          autocomplete="username"/>
                                                            <x-input-error class="mt-2"
                                                                           :messages="$errors->get('email')"/>
                                                        </div>
                                                    </div>
                                                    {{--                                                <div class="col-12 col-sm-6">--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <label>Mobile</label>--}}
                                                    {{--                                                        <input type="text" value="+1 202-555-0125" class="form-control"> </div>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Save Changes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="min-height: 400px">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <form method="post" action="{{ route('password.update') }}">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <x-text-input id="update_password_current_password"
                                                                  name="current_password" type="password"
                                                                  class="form-control" autocomplete="current-password"/>
                                                    <x-input-error
                                                        :messages="$errors->updatePassword->get('current_password')"
                                                        class="mt-2"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <x-text-input id="update_password_password" name="password"
                                                                  type="password" class="form-control"
                                                                  autocomplete="new-password"/>
                                                    <x-input-error :messages="$errors->updatePassword->get('password')"
                                                                   class="mt-2"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <x-text-input id="update_password_password_confirmation"
                                                                  name="password_confirmation" type="password"
                                                                  class="form-control"
                                                                  autocomplete="new-password"/>
                                                    <x-input-error
                                                        :messages="$errors->updatePassword->get('password_confirmation')"
                                                        class="mt-2"/>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="edit_personal_details1" aria-hidden="true" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Personal Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row form-row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" value="John"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" value="Doe"></div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <div class="cal-icon">
                                                                <input type="text" class="form-control"
                                                                       value="24-07-1983"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email ID</label>
                                                            <input type="email" class="form-control"
                                                                   value="johndoe@example.com"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" value="+1 202-555-0125"
                                                                   class="form-control"></div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h5 class="form-title"><span>Address</span></h5></div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"
                                                                   value="4663 Agriculture Lane"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" value="Miami"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" value="Florida">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Zip Code</label>
                                                            <input type="text" class="form-control" value="22434"></div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control"
                                                                   value="United States"></div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Save Changes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
