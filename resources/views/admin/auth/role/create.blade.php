@extends('layouts.admin')

@section('breadcrumb')
    <el-breadcrumb-item>
        <a class="custom-a" href="{{ url()->current() }}">
            <i class="fa fa-plus"></i>创建Role
        </a>
    </el-breadcrumb-item>
@endsection

@section('content')
    <role-form></role-form>
@endsection