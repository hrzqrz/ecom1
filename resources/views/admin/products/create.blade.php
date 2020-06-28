@extends('layouts.admin')
@section('title', 'ثبت محصول جدید')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ثبت کالای جدید</h4>
                        <form class="cmxform" id="commentForm" method="get" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <label for="name">نام کالا</label>
                                    <input id="name" class="form-control" name="name" minlength="2" type="text"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="price">قیمت</label>
                                    <input id="price" class="form-control" type="number" name="price" required>
                                </div>

                                <div class="form-group">
                                  <select class="form-control" name="category_id" id="category_id">
                                    <option value="">گروه کالا را انتخاب کنید</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="image">بارگذاری عکس</label>
                                  <input id="image" class="form-control" type="file" name="image" required>
                              </div>

                              <div class="form-group">
                                <label for="status">وضعیت محصول</label><br>
                                 وضعیت &nbsp;<input type="checkbox" name="status" id="status"> 
                            </div>
                                
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
