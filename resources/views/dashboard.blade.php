@extends('layouts.master')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-md-2">
            <label for="">Enter Task</label>
            <input type="text" placeholder="Enter task" class="form-control form-control-sm" name="task_name"  id="task_name" value="">
            <font style="color:red"> {{ $errors->has('task_name') ?  $errors->first('task_name') : '' }} </font>
        </div>
        <div class="col-md-2">
            <label for="">Enter Cost</label>
            <input type="number" placeholder="Enter task" class="form-control form-control-sm" name="cost"  id="cost" value="">
            <font style="color:red"> {{ $errors->has('cost') ?  $errors->first('cost') : '' }} </font>
        </div>
        <div class="col-md-2" style="margin-top:26px;">
            <button id="addMore" class="btn btn-success btn-sm">Add More </button>
        </div>
     </div>
     <div class="row" style="margin-top:26px;">
    <div class="col-md-5">


  <form action="{{ route('task') }}" method="post">
    @csrf
    
    <table class="table table-sm table-bordered" style="display: none;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody id="addRow" class="addRow">

    </tbody>
    <tbody>
      <tr>
        <td colspan="1" class="text-right">
            <strong>Total:</strong> 
        </td>
        <td>
            <input type="number" id="estimated_ammount" class="estimated_ammount" value="0" readonly>
        </td>
      </tr>
    </tbody>

    </table>
   <button type="submit" class="btn btn-success btn-sm">Submit</button>
  </form>

    </div>
  </div>
</div>
@endsection
