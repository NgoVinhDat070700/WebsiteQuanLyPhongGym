<li>
                    <label for="btn-1" class="show">Features +</label>
                    <a href="">Dịch vụ</a>
                    <input class="btn-1"  type="checkbox" id="btn-1">
                    <ul>
                        @foreach($dichvu as $dv)
                        <li><a href="{{route('Client/DichVu',$dv->id)}}">{{$dv->tendichvu}}</a></li>
                        @endforeach
                    </ul>
                    <li><a href="/Client/HuanLuyenVien">Coach</a></li>
                     <li>
                    <label for="btn-2" class="show">Blog</label>
                    <a href="">Blog</a>
                    <input type="checkbox" id="btn-2" class="btn-1">
                    <ul>
                        @foreach($dichvu as $dv)
                        <li><a href="/Client/Blog/{{$dv->id}}">{{$dv->tendichvu}}</a></li>
                        @endforeach
                    </ul>
                    </li>
</li>