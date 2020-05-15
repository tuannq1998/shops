<form action="" method="POST">
    @csrf
    <div class="col-sm-8">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục
                <en class="text-danger">*</en>
            </label>
            <input type="text" class="form-control" name="name"
                   value="{{old('name', isset($keyword->name)?$keyword->name:'')}}" placeholder="Tên danh mục">
            @if($errors->has('name'))
                <em class="error-text text-danger">
                    <small>{{$errors->first('name')}}</small>
                </em>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <input type="text" class="form-control" name="desc"
                   value="{{old('desc', isset($keyword->desc)?$keyword->desc:'')}}" placeholder="Mô tả">
        </div>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-12">
        <div class="box-footer text-center" style="margin-top: 20px">
            <a href="{{route('admin.keyword.index')}}" class="btn btn-primary">Quay lại <i class="fa fa-undo"></i></a>
            <button type="submit" class="btn btn-success">Lưu <i class="fa fa-save"></i></button>
        </div>
    </div>
</form>
