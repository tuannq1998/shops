<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-8">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin cơ bản</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục
                        <en class="text-danger">*</en>
                    </label>
                    <input type="text" class="form-control" name="name"
                           value="{{old('name', isset($product->name)?$product->name:'')}}" placeholder="Tên danh mục">
                    @if($errors->has('name'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('name')}}</small>
                        </em>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm
                                <en class="text-danger">*</en>
                            </label>
                            <input type="text" class="form-control" name="price"
                                   value="{{old('price', isset($product->price)?$product->price:'')}}"
                                   placeholder="15.000.000">
                            @if($errors->has('price'))
                                <em class="error-text text-danger">
                                    <small>{{$errors->first('price')}}</small>
                                </em>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá
                            </label>
                            <input type="number" class="form-control" name="sale"
                                   value="{{old('sale', isset($product->sale)?$product->sale:0)}}" placeholder="5">
                        </div>
                    </div>
                    {{--                <div class="col-sm-9">--}}
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="exampleInputEmail1">Tag--}}
                    {{--                        </label>--}}
                    {{--                        <select name="keywords" class="form-control" id="">--}}
                    {{--                            <option value="">__Click__</option>--}}
                    {{--                            <option value="1">html</option>--}}
                    {{--                            <option value="2">css</option>--}}
                    {{--                            <option value="3">js</option>--}}
                    {{--                            <option value="4">php</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả
                        <en class="text-danger">*</en>
                    </label>
                    <textarea name="description" id="" cols="5" class="form-control textarea" rows="2"
                              placeholder="Đang cập nhật">{{old('description', isset($product->description)?$product->description:'')}}</textarea>
                    @if($errors->has('description'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('description')}}</small>
                        </em>
                    @endif

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Danh mục</label>
                    <select name="category_id" class="form-control" id="">
                        <option value="">__Click__</option>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" {{old('category_id', isset($product->category_id) ? $product->category_id : '') == $category->id ? "selected ='selected'" : ""}}>{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    @if($errors->has('category_id'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('category_id')}}</small>
                        </em>
                    @endif
                </div>
            </div>
        </div>
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin số khác</h3>
            </div>
            {{--        <div class="box-body">--}}
            {{--            <div class="form-group">--}}
            {{--                <div class="checkbox"><label><input type="checkbox" name="document_id" value="1"> Báo cáo</label></div>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Nội dung</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Content
                    </label>
                    <textarea name="contents" id="" cols="5" class="form-control textarea"
                              rows="2">{{old('contents', isset($product->description)?$product->description:'')}}</textarea>
                    @if($errors->has('contents'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('contents')}}</small>
                        </em>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Ảnh sản phẩm</h3>
            </div>
            <div class="box-body block-images">
                <div style="margin-bottom: 10px">
                    <img src="/images/no-image-box.png"
                         onerror="this.onerror=null; this.src='/images/no-image-box.png';" class="img-thumbnail"
                         style="width: 200px; height: 200px" alt="">
                </div>
                <div style="position: relative;"><a href="javascript:;" class="btn btn-primary">Choose File...
                        <input type="file"
                               style="position: absolute;z-index: 2;top: 0;left: 0;filter: alpha(opacity=0);-ms-filter:&quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity: 0;background-color: transparent;color: transparent"
                               size="40" class="js-upload" name="avatar"></a> &nbsp; <span class="label label-info"
                                                                                           id="upload-file-info"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box-footer text-center" style="margin-top: 20px">
            <a href="{{route('admin.product.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Quay lại</a>
            <button type="submit" class="btn btn-success"><i
                    class="fa fa-save"></i>{{isset($product)?"Cập nhật":"Thêm mới"}}</button>
        </div>
    </div>
</form>
