@extends('layouts.layouts')
@section('content')
<h2 align="center">Thêm khách hàng
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
<form name="form1" action="/Admin/khachhang" method="POST" enctype="multipart/form-data" >
@csrf
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên khách hàng:</td>
      <td width="322"><input type="text" name="tTenkhachhang" id="tTenkhachhang"></td>
    </tr>
    <tr>
      <td>Số điện thoại:</td>
      <td><input type="text" name="tSodienthoai" id="tSodienthoai"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="tEmail" id="tEmail"></td>
    </tr>
    <tr>
      <td>Nhu cầu:</td>
      <td><input type="text" name="tNhucau" id="tNhucau"></td>
    </tr>
    <tr>
        <td for="">Id dịch vụ:</td>
        <td>
        <select id="iddichvu" name="iddichvu" style="width:200px;height:30px;"> <br> <br>
            @foreach($dichvu as $dv)     
            <option value="{{$dv->id}}">{{$dv->tendichvu}}</option>
            @endforeach
        </select>
        </td>
    </tr>
    <tr>
        <td for="">Trạng thái:</td>
        <td>
        <select id="trangthai" name="trangthai" style="width:200px;height:30px;"> <br> <br>    
            <option value="Đã thanh toán">Đã thanh toán</option>
            <option value="Đã thanh toán">Chưa thanh toán</option>
        </select>
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