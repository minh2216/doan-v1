@extends('backend.layouts.master')
@section('content')
<div class="content">
    <form action="{!!route('admin.product.update', ['id' => $record->id])!!}" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Cập nhật</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Thông tin cơ bản</a></li>
                    <li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-stack2 mr-2"></i> Thuộc tính sản phẩm</a></li>
                    <li class="nav-item"><a href="#left-icon-tab3" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Thẻ meta</a></li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="left-icon-tab1">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <fieldset>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Tiêu đề <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" value="{!!is_null(old('title'))?$record->title:old('title')!!}" required="">
                                            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Url <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" name="alias" value="{!!is_null(old('alias'))?$record->alias:old('alias')!!}" required>
                                            {!! $errors->first('alias', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Danh mục <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <select class="select-search form-control" name="category_id[]"data-placeholder="Chọn danh mục" multiple="" required>
                                                {!!$category_html!!}
                                            </select>
                                            {!! $errors->first('category_id', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                            @foreach ($records as $re )
                                            <input type="hidden" class="form-control"  name="user_id" value="{{$re -> id}}" readonly >
                                            @endforeach
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Mô tả </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="description">{!!is_null(old('description'))?$record->description:old('description')!!}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Vị trí <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                              <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="js-example-basic-single2 myselect2 mr-2 option form-control" name="province_id" id="province" data-placeholder="{{ __('messages.chon-thanh-pho') }}" >
                                                        @foreach($city as $city)
                                                            <option value="{{$city->id}}" {{$city->id == $record->province_id ? 'selected' : ''}}>{{$city->title}} </option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                          
                                                    <div class="col-md-6">
                                                        <select class="js-example-basic-single2 myselect2 mr-2 form-control" id="district" name="district_id" data-placeholder="{{ __('messages.chon-quan-huyen') }}" >                           
                                                        @foreach($district as $district)
                                                        <option value="{{$district->id}}" {{$district->id == $record->district_id ? 'selected' : ''}}>{!!$district->title!!}</option>
                                                        @endforeach
                                                        </select> 
                                                    </div>
                                              </div>
                                        </div>
                                  </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Google Map</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="googlemap" value="{{$record->googlemap}}">
                                            {!! $errors->first('googlemap', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 required control-label text-right text-semibold" for="images">Hình ảnh:</label>
                                        <div class="col-lg-10 div-image">
                                            <div class="file-input file-input-ajax-new">
                                                <div class="file-preview ">
                                                    <div class=" file-drop-zone">
                                                    </div>
                                                </div>
                                                <div class="input-group file-caption-main">
                                                    <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                    </div>
                                                    <div class="input-group-btn input-group-append">
                                                        <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                            <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="images" class="image_data" value="{{$record->images}}">
                                            <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <!-- <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá </label>
                                    <div class="col-md-7">
                                        <input type="text" name="price" class="form-control touchspin text-center" value="{!!is_null(old('price'))?$record->price:old('price')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá khuyến mãi </label>
                                    <div class="col-md-7">
                                        <input type="text" name="sale_price" class="form-control touchspin text-center" value="{!!is_null(old('sale_price'))?$record->sale_price:old('sale_price')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="form-check-label col-md-4  text-left">Hẹn ngày đăng </label>
                                    <div class="input-group col-md-7">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-calendar5"></i></span>
                                        </span>
                                        <input type="text" class="form-control pickadate" placeholder="Ngày đăng" name="post_schedule" value="{!!is_null(old('post_schedule'))?$record->getPostSchedule():old('post_schedule')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-left">Từ khóa <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control tokenfield" name="keywords" data-fouc value="{!!is_null(old('keywords'))?$record->keywords:old('keywords')!!}" required="">
                                        {!! $errors->first('keywords', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Thứ tự </label>
                                    <div class="col-md-5">
                                        <input type="text" name="ordering" class="form-control touchspin text-center" value="{!!is_null(old('ordering'))?$record->ordering:old('ordering')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check col-md-5 form-check-right">
                                        <label class="form-check-label float-left ml-2">
                                            Hiển thị
                                            <input type="checkbox" class="form-check-input-styled" name="status" data-fouc="" @if($record->status) checked @endif>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Rating </label>
                                    <div class="col-md-8">
                                        <input type="text" name="rating" class="form-control touchspin text-center" value="{!!is_null(old('rating'))?$record->rating:old('rating')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá thấp nhất </label>
                                    <div class="col-md-8">
                                        <input type="text" name="min_price" class="form-control touchspin text-center" value="{!!is_null(old('min_price'))?$record->min_price:old('min_price')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá cao nhất </label>
                                    <div class="col-md-8">
                                        <input type="text" name="max_price" class="form-control touchspin text-center" value="{!!is_null(old('max_price'))?$record->max_price:old('max_price')!!}">
                                    </div>
                                </div>
<!--                                 <div class="form-group row">
                                    <div class="form-check col-md-6 form-check-right">
                                        <label class="form-check-label float-right">
                                            Sản phẩm nổi bật
                                            <input type="checkbox" class="form-check-input-styled" name="is_hot" data-fouc="" @if($record->is_hot) checked @endif>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check col-md-6 form-check-right">
                                        <label class="form-check-label float-right">
                                            Sản phẩm mới
                                            <input type="checkbox" class="form-check-input-styled" name="is_new" data-fouc="" @if($record->is_new) checked @endif>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Nội dung: </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="content" name="content">{!!is_null(old('content'))?$record->content:old('content')!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="left-icon-tab2">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                @foreach ($attributes as $key => $val)
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">{{$val->title}}</label>
                                    <div class="col-md-9">
                                        @if ($val->type == \App\Attribute::TYPE_SELECT)
                                        <select name="attribute_select[]" class="select-search" data-placeholder="Chọn">
                                            <option></option>
                                            @foreach ($val->children as $k => $v)
                                            <option value="{{$v->id}}" @if(in_array($v->id, $product_attribute_ids)) selected @endif>{{$v->title}}</option>
                                            @endforeach
                                        </select>
                                        @else
                                        <input type="text" class="form-control" name="attribute[{{$val->id}}]" value="{!!(in_array($val->id, $product_attribute_ids))?$product_attribute[$val->id]:''!!}">
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="left-icon-tab3">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ tiêu đề (SEO)</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="meta_title" value="{!!is_null(old('meta_title'))?$record->meta_title:old('meta_title')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ từ khóa (SEO) </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="meta_keywords">{!!is_null(old('meta_keywords'))?$record->meta_keywords:old('meta_keywords')!!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ mô tả (SEO) </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control maxlength-label-position" maxlength="255" name="meta_description">{!!is_null(old('meta_description'))?$record->meta_description:old('meta_description')!!}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a type="button" href="{{route('admin.product.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@section('script')
@parent
<script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tagsinput.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tokenfield.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/ui/prism.min.js') !!}"></script>

<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/ui/moment/moment.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/daterangepicker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/anytime.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.date.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.time.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/legacy.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/notifications/jgrowl.min.js') !!}"></script>
<script src="{!! asset('assets/backend/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('.option').on('change',function(){
              
            var action = $(this).attr('id');
         
            var ma_id = $(this).val();
            var _token = $('#token').val();
            var result = '';
            if(action=='city'){
                result = 'district';

            }
            $.ajax({
                url : '{{route('api.select_address')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                  
                    $("#district").html(data);
            
                }
            });
        }); 
    });
</script>
@stop
