

@extends('admin.admin_master')
@section('admin')


  
        <div class="page-content">



            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">All Notivications </h5>
                        </div>
                        <div class="font-22 ms-auto">
                             <a href="{{ route('add.notification') }}"><i title="add" class="fa fa-plus-square-o" style="font-size:22px;color:green;"> add</i> </a>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Title </th>
                                    <th>Message </th>
                                    <th>Date </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($notifications as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td> {{ $item->title }}</td>
                                        <td>{{ Str::limit($item->message, 25, '..') }}</td>
                                        <td>{{ $item->date }}</td>
                                       
                                        <td><a href=""><i title="edit" class="fadeIn animated bx bx-message-square-edit" style="font-size:25px;color:rgb(47, 26, 165);"></i> </a>
                                             <a href="{{ route('notificcation.delete',$item->id) }}" id="delete" ><i title="delete"   class="fadeIn animated bx bx-trash" style="font-size:25px;color:rgb(233, 19, 30);"></i> </a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
         




        </div>
    </div>

@endsection
