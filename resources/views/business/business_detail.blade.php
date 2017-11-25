@extends('layouts.main')
@section('content')

<div class="card-body">
  <span style="color:#0285CC ; font-weight:bold ; font-size:large">Menu Usaha {{$menu->status}} Terdaftar</span><br>
  <span style="color:#27607F; font-size:small">Backind Administrator</span>
  <hr>
</div>
  <div class="container-fluid">
    <div class="col-lg">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>
          <span style="font-size:small">Data {{$menu->status}}</span>
        </div>
      <div class="card-body" style="font-size: small">
      <div class="table-responsive" style="font-size: small">

        <table class="table table-bordered" id="dataTable" cellspacing="0" style="font-size: small">
          <thead>
          <tr>
              <th>No</th>
              <th>Photo</th>
              <th>Nama Usaha</th>
              {{-- <th>Email Usaha</th> --}}
              <th>Alamat Usaha</th>
              <th>Telepon</th>
              <th>Status Usaha</th>
              <th><center>Aksi</center></th>
          </tr>
          </thead>
            <tbody>
              @foreach ($bus_list_page as $index=>$data)
            <tr>
              <td>{{++$index}}</td>
              <td><img src="{{url('storage/'.$data->business_details->business_profile_pict)}}" class="img-responsive img-circle" style="max-width:50px"></td>
              <td>{{$data->business_details->business_name}}</td>
              {{-- <td>{{$data->business_details->business_email}}</td> --}}
              <td>{{$data->business_details->business_address}}</td>
              <td>{{$data->business_details->business_phone}}</td>
              <td>@if ($data->business_status == 1)
                  <span style="font-size: small">Active</span>
                @elseif($data->business_status == 2)
                  <span style="font-size: small">Pending</span>
                  @elseif($data->business_status == 2)
                    <span style="font-size: small">Deactived</span>
              @endif
              </td>
              <td>
                  <table>
                      <tr>
                          <td>
                              <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-eye"></i></button>
                          </td>
                          <td>
                              <a href="/businessEdit/{{$data->id_business_details}}">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></button>
                              </a>
                          </td>
                          <td>
                              <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deletePopUp"><i class="fa fa-fw fa-trash"></i></button>
                          </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Delete Modal -->
            <div class="modal fade" id="deletePopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure to delete this item ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form action="{{url('delete')}}" method="POST">
                      <input type="hidden" name="id_business_detail" value="{{$data->id_business_details}}">
                      <input type="hidden" name="id_usaha" value="{{$id_usaha}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
            </tbody>
       </table>
       <br>
       <div class="float-right">
      <a href="{{ route ('addbusiness', ['id' => $menu]) }}"><button class="btn btn-primary" style=" font-size:small;">Tambah Usaha</button></a>
       </div>
     </div>
    </div>
  </div>
  </div>
  <br>
  <!-- /.container-fluid -->
@endsection
