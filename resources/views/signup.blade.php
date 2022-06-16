<link rel="stylesheet"  href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<form method="post" class="p-3 border border-primary col-6 m-auto"
  action="{{route('displayInfo')}}" > @csrf 
<div class="mb-3"> 
  <label>Họ tên</label><input value="{{old('hoten')}}" class="form-control" name="hoten">
</div>
<div class="mb-3">
  <label>Tuổi</label><input value="{{old('tuoi')}}" class="form-control" name="tuoi">
</div>
<div class="mb-3">
  <label>Ngàysinh</label><input value="{{old('ngaysinh')}}" class="form-control" name="ngaysinh">
</div>
<div class="mb-3">
  <label>CMND</label><input value="{{old('cmnd')}}" class="form-control" name="cmnd">
</div>
<div class="mb-3">
  <label>Email</label> <input value="{{old('email')}}" class="form-control" name="email">
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-primary w-25">Xử lý</button>
    
</div>
<div>
    @include('error')
</div>
<div>
            @if(isset($user))
            <p>Name: {{$user['hoten']}}</p>
            <p>Age: {{$user['tuoi']}}</p>
            <p>Birthday: {{$user['ngaysinh']}}</p>
            <p>Cmnd: {{$user['cmnd']}}</p>
            <p>Email: {{$user['email']}}</p>            
            @endif
        </div>
</form>