@extends('layouts.admin')
@section('title', 'گروه جدید')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ایجاد گروه جدید</h4>
                        <form class="cmxform" id="commentForm" method="get" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <label for="cname">نام گروه</label>
                                    <input id="cname" class="form-control" name="name" minlength="2" type="text"
                                        required>
                                </div>
                                <input class="btn btn-primary" type="submit" value="ایجاد گروه">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
