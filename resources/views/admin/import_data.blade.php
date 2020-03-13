@extends('admin.base')
@section('content')

<div class="container">

    <form style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;margin-top: 5%;">
      <h3>Import Data from file (CSV, XLS, XLSX, XML, SQL)</h3>
      <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .sql, .xml">
        <br>
        <button type="submit" class="btn btn-primary">Import Data</button>
      </div>
    </form>
</div>
@endsection