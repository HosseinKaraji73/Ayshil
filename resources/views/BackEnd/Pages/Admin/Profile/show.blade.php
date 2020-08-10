@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-user">&nbsp;</span> پروفایل کاربری
@endsection

@section('content')

    <div class="col-sm-8 col-sm-push-2">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{asset("img/admin/users/$user->avatar")}}" alt="User profile picture" style="width: 90px;margin: 0 auto;">
@if(isset($user->name))
                <h3 class="profile-username text-center">{{$user->name . ' ' . $user->family}}</h3>
                @elseك
                    <h3 class="profile-username text-center">لطفا نام خود را وارد کنید</h3>

                @endif


                <p class="text-muted text-center">
                    @if($user->roleId == 0)
                        <span>مدیر سایت</span>
                    @elseif($user->roleId == 1)
                        <span>فروشگاه</span>
                    @else
                        <span>کاربر</span>
                    @endif
                </p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item" style="padding-bottom: 30px;">
                        <b>شماره تلفن همراه</b> <a class="pull-left">{{$user->mobile}}</a>
                    </li>
{{--                    <li class="list-group-item" style="padding-bottom: 30px;">--}}
{{--                        <b class="">آدرس ایمیل</b> <a class="pull-left">{{$user->email}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item">--}}
{{--                        <b class="">تاریخ تولد</b> <a class="pull-left">{{$user->birthDate}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item" style="padding-bottom: 50px;">--}}
{{--                        <b class="">آدرس</b> <a class="pull-left">{{ str_limit($user->address , 100 , '...') }}</a>--}}
{{--                    </li>--}}
                </ul>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{route('admin.edit',$user->id)}}" class="form-control btn btn-primary"><span class="fa fa-edit">&nbsp;</span><b>ویرایش اطلاعات</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{action('BackEnd\Admin\UserController@changePasswordForm')}}" class="form-control btn btn-success"><span class="fa fa-key">&nbsp;</span><b>تغییر رمزعبور </b></a>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="clearfix"></div>

@endsection
