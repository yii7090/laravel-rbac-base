@extends('backend::layouts.master')

@section('content')
<div class="panel panel-yellow">
    <div class="panel-heading">添加用户</div>
    <div class="panel-body pan">
        <form action="{{ route('user.store') }}" method="POST" class="form-horizontal form-seperated">
        {!! csrf_field() !!}
            <div class="form-body">
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">登录名<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" name="name"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">真实姓名<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" name="truename"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">邮箱<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="email" placeholder="First Name" class="form-control" name="email"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">密码<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="password" placeholder="First Name" class="form-control" name="password"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">确认密码<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="password" placeholder="First Name" class="form-control" name="repassword"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="selCountry" class="col-md-3 control-label">角色</label>
                    <div class="col-md-4" defval="0" style="width:50%">
                        <select multiple='multiple' id='my-select' name='role[]'>
                            @foreach($roles as $role)
                            <option value='{{ $role->id }}'>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions text-right pal">
                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                <button type="button" class="btn btn-green">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#my-select').multiSelect();
});
</script>

@stop
