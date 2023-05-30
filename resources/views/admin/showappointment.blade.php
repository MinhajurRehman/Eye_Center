

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


                <table class="table table-striped"    id="datatable">
                <thead>
                    <tr>

                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Aprove</th>
                    <th>Cancel</th>
                    





                    </tr>

                </thead>



              @foreach($data as $appoint)

                <tbody>
                    <tr>

                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                            <a class="btn btn-success" href="{{url('approve_appointment',$appoint->id)}}">Approve</a>
                    </td>
                    <td>
                            <a class="btn btn-danger" href="{{url('cancel_appointment',$appoint->id)}}">Cancel</a>
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