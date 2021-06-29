@extends('layouts.layouts')
@section('content')
<h2 align="center">Sửa huấn luyện viên
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
<form name="form1" action="/Admin/huanluyenvien/{{$huanluyenvien->id}}" method="POST" enctype="multipart/form-data" >
@csrf
@method("PUT")
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Tên huấn luyện viên:</td>
      <td width="322"><input type="text" name="tTen" id="tTen" value="{{$huanluyenvien->tenkhachhangmua}}"></td>
    </tr>
    <tr>
      <td>Giới tính:</td>
      <td>
      Nam
      <input type="radio" name="rGioitinh" id="rGioitinh" value="Nam" {{$huanluyenvien->gioitinh=="Nam"?"checked":""}}>
      Nữ
      <input type="radio" name="rGioitinh" id="rGioitinh" value="Nữ" {{$huanluyenvien->gioitinh=="Nữ"?"checked":""}}>
      </td>
    </tr>
    <tr>
      <td>Ảnh mô tả:</td>
      <td><input type="file" name="image" id="image" value="{{$huanluyenvien->image}}"></td>
    </tr>
    <tr>
      <td>Ngày sinh:</td>
      <td><input type="date" name="dNgaysinh" id="dNgaysinh" value="{{$huanluyenvien->ngaysinh}}"></td>
    </tr>
    <tr>
      <td>Lương:</td>
      <td><input type="text" name="tLuong" id="tLuong" value="{{$huanluyenvien->luong}}"></td>
    </tr>
    <tr>
      <td>Kinh Nghiệm:</td>
      <td><input type="text" name="tKinhnghiem" id="tKinhnghiem" value="{{$huanluyenvien->kinhnghiem}}"></td>
    </tr>
    <tr>
      <td>Mô tả:</td>
      <td><textarea name="tMota" id="tMota" rows="5" cols="50">{{$huanluyenvien->mota}}</textarea></td>
    </tr>
    <tr>
        <td for="">Id dịch vụ:</td>
        <td>
        <select id="iddichvu" name="iddichvu" style="width:200px;height:30px;"> <br> <br>
            @foreach($dichvu as $dv)     
            <option value="{{$dv->id}}"
            @if($huanluyenvien->dichvu_id==$dv->id)
                selected = "selected"
            @endif
            >{{$dv->tendichvu}}</option>
            @endforeach
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