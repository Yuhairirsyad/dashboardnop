@extends('admin.main')
@section('nav')
    
@endsection

@section('konten')
<div class="card" style="background-color: grey" align="center">
    <div class="card-header">
        <h5 class="card-title mb-0">Input</h5>
    </div>
    <div class="card-body">
        <input type="text" class="form-control" placeholder="Input">
    </div>
</div>
<div class="card-body">
    <div>
        <label class="form-check">
<input class="form-check-input" type="radio" value="option1" name="radios-example" checked="">
<span class="form-check-label">
Option one is this and that—be sure to include why it's great
</span>
</label>
        <label class="form-check">
<input class="form-check-input" type="radio" value="option2" name="radios-example">
<span class="form-check-label">
Option two can be something else and selecting it will deselect option one
</span>
</label>
        <label class="form-check">
<input class="form-check-input" type="radio" value="option3" name="radios-example" disabled="">
<span class="form-check-label">
Option three is disabled
</span>
</label>
    </div>
    <div>
        <label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="option1">
<span class="form-check-label">
1
</span>
</label>
        <label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="option2">
<span class="form-check-label">
2
</span>
</label>
        <label class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inline-radios-example" value="option3" disabled="">
<span class="form-check-label">
3
</span>
</label>
    </div>
</div>
@endsection
