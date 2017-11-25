@extends('layouts.main')
@section('content')

  <div class="card-body">
    <span style="color:#0285CC ; font-weight:bold ; font-size:large">Menu Edit {{$menu->status}}</span><br>
    <span style="color:#27607F; font-size:small">Backind Administrator</span>
    <hr>
  </div>

  <div class="container-fluid">

    <div class="col-lg">
        <!--Form Register-->
        <form action="{{ route('userProfileEdit') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$business_details->id_business_details}}">
            <div class="form-group {{ $errors->has('Business name') ? ' has-error' : '' }}">
              <table>
                <tr>
                </tr>
                <tr>
                  <td>
                    <label style="font-size: small">Nama Usaha</label>
                  </td>
                  <td><label style="font-size: small"> : </label></td>
                  <td><input style="font-size:small" id="name" type="text" class="form-control" name="name" value="{{$business_details->business_name}}"></td>
                </tr>
                <tr>
                  <td>
                    <label style="font-size: small">Email Usaha</label>
                  </td>
                  <td><label style="font-size: small"> : </label></td>
                  <td><input style="font-size:small" id="email" type="text" class="form-control" name="email" value="{{$business_details->business_email}}"></td>
                </tr>
                <tr>
                  <td>
                    <label style="font-size: small">Alamat Usaha</label>
                  </td>
                  <td><label style="font-size: small"> : </label></td>
                  <td><input style="font-size:small" id="address" type="text" class="form-control" name="address" value="{{$business_details->business_address}}"></td>
                </tr>
                <tr>
                  <td>
                    <label style="font-size: small">No Telefon Usaha</label>
                  </td>
                  <td><label style="font-size: small"> : </label></td>
                  <td><input style="font-size:small" id="phone_number" type="text" class="form-control" name="phone_number" value="{{$business_details->business_phone}}"></td>
                </tr>
                <tr>
                  <td>
                    <label style="font-size: small">Tarif Tiket</label>
                  </td>
                  <td><label style="font-size: small"> : </label></td>
                  <td><input style="font-size:small" id="country" type="text" class="form-control" name="country" value="{{$business_details->business_price}}"></td>
                </tr>
                <tr >
                  <td></td>
                  <td></td>
                  <td class="float-right">
                    <br>
                    <button type="submit" class="btn btn-primary" style="font-size:small">
                        Simpan
                    </button>
                    <a href="{{ URL::to('/') }}" />
                    <button type="button" class="btn btn-danger" style="font-size:small">
                        Batal
                    </button>
                  </a>
                  </td>
                </tr>
              </table>
              <br>
              {{ csrf_field() }}
          </form>
        </div>

  </div>

  @endsection
