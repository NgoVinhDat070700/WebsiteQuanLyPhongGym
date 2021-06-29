@extends('layouts.layouts')
@section('content')
<h2 align="center">Thêm dịch vụ
</h2>
@if($errors->any())
<div>
            <ul>
                @foreach($errors->all() as $error)
                <li></li>
                @endforeach
            </ul>
        </div>

    @endif
<form name="form1" action="/Admin/dichvu" method="POST" enctype="multipart/form-data" >
@csrf
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên dịch vụ:</td>
      <td width="322"><input type="text" name="tTen" id="tTen"></td>
    </tr>
    <tr>
      <td>Giá :</td>
      <td><input type="text" name="tGia" id="tGia"></td>
    </tr>
    <tr>
      <td>Mô tả:</td>
      <td><textarea name="tMota" id="tMota" rows="5" cols="50"></textarea></td>
    </tr>
    <tr>
      <td>Ảnh mô tả:</td>
      <td><input type="file" name="img" id="img"></td>
    </tr>
    <tr>
      <td>Trạng thái:</td>
      <td>
      Có 
      <input type="radio" name="rTrangthai" id="rTranghai1" value="Hoạt động">
      Không
      <input type="radio" name="rTrangthai" id="rTranghai2" value="Đóng">
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