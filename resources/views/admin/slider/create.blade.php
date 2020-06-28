@extends('layouts.admin')
@section('title', 'ایجاد اسلاید')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">  مدیریت اسلایدر</h4>
                        <form class="cmxform" id="commentForm" method="get" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <label for="description1">توضیح 1</label>
                                    <input id="description1" class="form-control" name="description1" minlength="2" type="text"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="description2">توضیح 2</label>
                                    <input id="description2" class="form-control" type="text" name="description2" required>
                                </div>

                                <div class="form-group">
                                    <label for="image">بارگذاری عکس</label>
                                    <input id="image" class="form-control" type="file" name="image" required>
                                </div>

                              <div class="form-group">
                                <label for="status">وضعیت اسلاید</label><br>
                                 وضعیت &nbsp;<input type="checkbox" name="status" id="status"> 
                            </div>
                                
                                <input class="btn btn-primary" type="submit" value="ذخیره">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
