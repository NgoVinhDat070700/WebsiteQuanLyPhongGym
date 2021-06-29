@extends('layouts.layouts')
@section('content')
<h2 align="center">Sửa loại sản phẩm
</h2>
<form name="form1" action="/Admin/loaisanpham/{{$loaisanpham->id}}" method="POST" enctype="multipart/form-data" >
@csrf
@method("PUT")
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên loại sản phẩm:</td>
      <td width="322"><input type="text" name="tTen" id="tTen" value="{{$loaisanpham->tenloaisanpham}}"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="bSubmit" id="bSubmit" value="Đồng ý"> 
    </tr>
  </table>
</form>

@endsection