@extends('layouts.layouts')
@section('content')
<h2 align="center">Sửa dịch vụ
</h2>
<form name="form1" action="/Admin/dichvu/edit/{{$dichvu->id}}" method="POST" enctype="multipart/form-data" >
@csrf
@method("PUT")
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên dịch vụ:</td>
      <td width="322"><input type="text" name="tTen" id="tTen" value="{{$dichvu->tendichvu}}"></td>
    </tr>
    <tr>
      <td>Giá :</td>
      <td><input type="text" name="tGia" id="tGia" value="{{$dichvu->gia}}"></td>
    </tr>
    <tr>
      <td>Mô tả:</td>
      <td><textarea name="tMota" id="tMota" rows="5" cols="50">{{$dichvu->mota}}</textarea></td>
    </tr>
    <tr>
      <td>Ảnh mô tả:</td>
      <td><input type="file" name="image" id="image" value="{{$dichvu->image}}"></td>
    </tr>
    <tr>
      <td>Trạng thái:</td>
      <td>
      <input type="radio" name="rTrangthai" id="rTranghai1" value="Hoạt động" 
      {{$dichvu->trangthai=="Hoạt động"?"checked":""}}
      >Hoạt động 
      <input type="radio" name="rTrangthai" id="rTranghai2" value="Đóng" 
      {{$dichvu->trangthai=="Đóng"?"checked":""}}
      >Đóng
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="bSubmit" id="bSubmit" value="Đồng ý"> 
           <input type="reset" name="Reset" id="button" value="Nhập lại"></td>
    </tr>
  </table>
</form>

@endsection