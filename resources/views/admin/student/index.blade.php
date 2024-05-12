@extends('layouts.admin.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>الأقــســـام</h3>
              </div>

              {{-- <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for..." value="{{ isset($search) ? $search : ''}}">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </div>
              </div> --}}
              <div class="title_right">
                <div class="form-group">
                    <form method="GET" action="/search">
                    <div class="input-group">
                        <input class="form-control" name="search" placeholder="search...." value="{{ isset($search) ? $search : ''}}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    </form>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                        <a href="{{ route('admin.student.create') }}"  type="button"><h2>إضـافـة طالب</h2></a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form action="{{url('/import')}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <input type="file" name="file">

                        <input type="submit" value="Import Data">


                        <a href="{{url('export')}}">Export Data</a>
                    </form>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">#</th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Sitting Number</th>
                            <th class="column-title">Arabic</th>
                            <th class="column-title">Math</th>
                            <th class="column-title">English</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $index=>$student )

                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td >{{ $index+1}}</td>
                                <td >{{ $student->name }}</td>
                                <td>{{ $student->sitting_number }}</td>
                                <td >{{ $student->arabic }}</td>
                                <td >{{ $student->math }}</td>
                                <td >{{ $student->english }}</td>
                                <td >
                                    <div class="row">
                                        {{-- <a href="{{route('admin.student.edit',$student->id) }}" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a> --}}

                                        {{-- <form action="{{ route('admin.student.destroy',$student->id) }}" method="POST" style="display: inline-block"> --}}
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-default"><i class="fa fa-trash"> Delete</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
