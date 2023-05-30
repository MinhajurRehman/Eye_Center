

<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('admin.css')

  </head>
  <body>
   
      <!-- partial -->
    

    @include('admin.sidebar')



    @include('admin.navbar')




        <!-- partial -->
         
    
        <div class="container-fluid page-body-wrapper">
       
           <div class="container" align="center">


                 <table class="table table-striped"  id="datatable">
                    <thead>
                        <tr>
                        <th>Doctor Name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room</th>
                        <th>Doctor Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                       
                        </tr>
                    </thead>

                   
                  @foreach($data as $doctor)

                    
                    <tbody>
                        <tr>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->speciality}}</td>
                            <td>{{$doctor->room}}</td>
                            <td>
                                <img src="doctor_image/{{$doctor->image}}" >
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('update_doc',$doctor->id)}}">Update</a>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this data')" class="btn btn-danger" href="{{url('Delete_doc',$doctor->id)}}">Delete</a>
                            </td>
                            

                        </tr>
                    </tbody>

                    @endforeach
                 </table>




        

           </div>

        </div>
    



    @include('admin.script')






  </body>
</html>