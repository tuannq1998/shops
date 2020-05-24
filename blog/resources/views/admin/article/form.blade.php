<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-8">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Thông tin cơ bản</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên bài viết
                        <en class="text-danger">*</en>
                    </label>
                    <input type="text" class="form-control" name="name"
                           value="{{old('name', isset($article->name)?$article->name:'')}}" placeholder="Tên bài viết">
                    @if($errors->has('name'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('name')}}</small>
                        </em>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả
                        <en class="text-danger">*</en>
                    </label>
                    <textarea name="description" id="" cols="5" class="form-control textarea" rows="2"
                              placeholder="Đang cập nhật">{{old('description', isset($article->description)?$article->description:'')}}</textarea>
                    @if($errors->has('description'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('description')}}</small>
                        </em>
                    @endif

                </div>
            </div>
        </div>
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Nội dung</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Meta Title
                        <en class="text-danger">*</en>
                    </label>
                    <textarea name="title_seo" id="" cols="5" class="form-control textarea" rows="2"
                              placeholder="Đang cập nhật">{{old('title_seo', isset($article->title_seo)?$article->title_seo:'')}}</textarea>
                    @if($errors->has('title_seo'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('title_seo')}}</small>
                        </em>
                    @endif

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Meta Description
                        <en class="text-danger">*</en>
                    </label>
                    <textarea name="description_seo" id="" cols="5" class="form-control textarea" rows="2"
                              placeholder="Đang cập nhật">{{old('description_seo', isset($article->description_seo)?$article->description_seo:'')}}</textarea>
                    @if($errors->has('description_seo'))
                        <em class="error-text text-danger">
                            <small>{{$errors->first('description_seo')}}</small>
                        </em>
                    @endif

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nội dung bài viết
                    </label>
                    <textarea name="contents" id="" cols="5" class="form-control textarea"
                              rows="2">{{old('contents', isset($article->description)?$article->description:'')}}</textarea>
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
                <h3 class="box-title">Ảnh</h3>
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
            <a href="{{route('admin.article.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Quay lại</a>
            <button type="submit" class="btn btn-success"><i
                    class="fa fa-save"></i>{{isset($article)?"Cập nhật":"Thêm mới"}}</button>
        </div>
    </div>
</form>
