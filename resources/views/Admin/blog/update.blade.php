@extends('layouts.layouts')
@section('content')
<h2 align="center">Sửa Blog
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
<form name="form1" action="/Admin/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data" >
@csrf
@method("PUT")
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
      <td>Tiêu đề:</td>
      <td width="322"><input type="text" name="tTieude" id="tTieude" value="{{$blog->tieude}}"></td>
    </tr>
    <tr>
      <td>Video(Lấy id video Youtobe):</td>
      <td><input type="text" name="tVideo" id="tVideo" value="{{$blog->video}}"></td>
    </tr>
    <tr>
      <td>Nội dung:</td>
      <td><textarea name="tNoidung" id="tNoidung" rows="5" cols="50">{{$blog->noidung}}</textarea></td>
    </tr>
    <tr>
        <td for="">Id dịch vụ:</td>
        <td>
        <select id="iddichvu" name="iddichvu" style="width:200px;height:30px;"> <br> <br>
            @foreach($dichvu as $dv)     
            <option value="{{$dv->id}}"
            @if($blog->dichvu_id==$dv->id)
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