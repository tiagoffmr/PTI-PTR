@extends('admin.base')
@section('content')



  <div class="container" >

    <!-- Search form -->
    <div style="margin-left: 10%; margin-right:auto; margin-top: 5%;margin-bottom: 5%;">

      <h3>Students</h3>
      <br>
      <form class="form-inline my-2 my-lg-0">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control ml-3 w-50" type="search" placeholder="Example: João Silva" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0 ml-3" type="submit">Search</button>
      </form>
    </div>

    <div class="content" style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="float: left;display: inline-block;">Table</h4>
              <button class="btn btn-outline-primary" style="float: right;display: inline-block;" type="submit"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
              <div class="dropdown">
                <a class="btn btn-outline-primary dropdown-toggle" style="float: right;margin-right:1%;display: inline-block;" type="submit" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Create
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <button class="dropdown-item"  type="submit" data-toggle="modal" data-target="#modal-2"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
                  <button class="dropdown-item"  type="submit" data-toggle="modal" data-target="#modal-1"><i class="fa fa-upload" aria-hidden="true"></i> Import</button>
                </div>
              </div>

              <!-- Modal - 1 -->
              <div class="modal" id="modal-1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Import Students Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;margin-top: 5%;">
                        <p>File type accepted (CSV, XLS, XLSX, XML, SQL)</p>
                        <div class="form-group">
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .sql, .xml">
                          <br>

                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Import Data</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal - 2 -->
              <div class="modal" id="modal-2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Import Students Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form style="margin-left: 10%; margin-right:auto; margin-bottom: 5%;margin-top: 5%;">
                        <p>File type accepted (CSV, XLS, XLSX, XML, SQL)</p>
                        <div class="form-group">
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .sql, .xml">
                          <br>

                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Import Data</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th class="text-right">
                      Salary
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td class="text-right">
                        $36,738
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Minerva Hooper
                      </td>
                      <td>
                        Curaçao
                      </td>
                      <td>
                        Sinaai-Waas
                      </td>
                      <td class="text-right">
                        $23,789
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Sage Rodriguez
                      </td>
                      <td>
                        Netherlands
                      </td>
                      <td>
                        Baileux
                      </td>
                      <td class="text-right">
                        $56,142
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Philip Chaney
                      </td>
                      <td>
                        Korea, South
                      </td>
                      <td>
                        Overland Park
                      </td>
                      <td class="text-right">
                        $38,735
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Doris Greene
                      </td>
                      <td>
                        Malawi
                      </td>
                      <td>
                        Feldkirchen in Kärnten
                      </td>
                      <td class="text-right">
                        $63,542
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Mason Porter
                      </td>
                      <td>
                        Chile
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-right">
                        $78,615
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jon Porter
                      </td>
                      <td>
                        Portugal
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-right">
                        $98,615
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection