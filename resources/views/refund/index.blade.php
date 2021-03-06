@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="items" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Data do gasto</label>
              <input type="text" name="use_date" value="2019-04-19" class="form-control" id="exampleInputEmail1" placeholder="__/__/____">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tipo de despesa.</label>
               <select name="type_id[]" id="js-example-basic-single" class="form-control" multiple >
                <option value="--">--Selecione--</option>
                @foreach ($type as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                </select> 
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Valor do gasto</label>
              <input type="text" name="value" id="" value="45.50" class="form-control">
              
            </div>
            
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

@endsection