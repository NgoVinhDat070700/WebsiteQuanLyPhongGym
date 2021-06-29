@extends('layouts.layouts')
@section('content')
<h2 align="center">Thêm loại sản phẩm
</h2>
<form name="form1" action="/Admin/loaisanpham/" method="POST" enctype="multipart/form-data" >
@csrf
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên loại sản phẩm:</td>
      <td width="322"><input type="text" name="tTen" id="tTen"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="bSubmit" id="bSubmit" value="Đồng ý"> 
    </tr>
  </table>
</form>

@endsection