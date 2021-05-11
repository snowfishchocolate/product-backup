@extends('template')

@section('css')
            
@endsection

@section('content')
            <form style="width: 70%;margin:0 auto;">
                <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Type</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Introduction</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>    

@endsection

@section('js')



 
@endsection