

@extends('admin.admin_master')

@section('admin')
<div class="page-content">
     <!--breadcrumb-->
     <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">SubCategories</div>
          <div class="ps-3">
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                         <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                         </li>
                         <li class="breadcrumb-item active" aria-current="page">SubCategory table</li>
                    </ol>
               </nav>
          </div>
         
     </div>
     <!--end breadcrumb-->
     <div class="row">
          <div class="col-xl-9 mx-auto">
          
               
              <div dir="rtl">
               <a href="{{ route('add.subcategory') }}"><i title="add" class="fadeIn animated bx bx-message-square-add" style="font-size:25px;color:rgb(55, 206, 18);"></i> 
               </a>  

          </div>
               <hr/>
               <div class="card">
                    <div class="card-body">
                         <table class="table mb-0">
                              <thead class="table-dark">
                                   <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">subCategory Name</th>
                                        <th scope="col">Action</th>
                                   </tr>
                              </thead>

                              <tbody>

                                   @php($i = 1)
                         @foreach ( $subCategory as $row)

                                   <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$row->category_name}}</td>
                                        <td>{{$row->subcategory_name}}</td>
                                        
                                        <td><a href="{{ route('category.edit',$row->id) }}"><i title="edit" class="fadeIn animated bx bx-message-square-edit" style="font-size:25px;color:rgb(47, 26, 165);"></i> </a>
                                             <a href="{{ route('subcategory.delete',$row->id) }}" id="delete" ><i title="delete"   class="fadeIn animated bx bx-trash" style="font-size:25px;color:rgb(233, 19, 30);"></i> </a>
                                        </td>
                                   </tr>
 
     
                         @endforeach  
                                                        
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
     <!--end row-->
</div>
@endsection
