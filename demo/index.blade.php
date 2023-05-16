
<div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Profile')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Profile')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.profile.update')}}">
                                            @csrf
                                            <div class="form-vertical__item bg-style">
                                                <div class="item-top mb-30">
                                                    <h2>{{__('Edit Profile')}}</h2>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Admin Name')}}</label>
                                                    <input type="text" class="form-control" id="admin_name" name="admin_name" value="{{$user->name}}" required="">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Admin Email')}}</label>
                                                    <input type="text" class="form-control" id="admin_email" name="admin_email"  value="{{$user->email}}" required="">
                                                </div>


                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Image')}}</label>
                                                    <input type="file" class="form-control putImage1"  name="image" id="image">
                                                    <img class="admin_image"  src="{{asset(AdminProfilePicture().$user->image)}}" id="target1"/>
                                                </div>
                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">{{ __('Update')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.change_password')}}">
                                            @csrf
                                            <div class="form-vertical__item bg-style">
                                                <div class="item-top mb-30">
                                                    <h2>{{__('Change Password')}}</h2>
                                                </div>
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Current Password')}}</label>
                                                    <input type="password" class="form-control" id="current_password" name="password" />
                                                </div>
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('New Password')}}</label>
                                                    <input type="password" class="form-control" id="new_password" name="new_password" />
                                                </div>
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('Confirm Password')}}</label>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password"  />
                                                </div>
                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">{{ __('Update')}}</button>
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
@endsection
