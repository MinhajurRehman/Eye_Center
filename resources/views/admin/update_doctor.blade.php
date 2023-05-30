

<!DOCTYPE html>
<html lang="en">
  <head>



  <base href="/public">



  
  <style type="text/css">
       
       
       .title{
        color:white;   
        padding-top:25px;  
        font-size:25px;  
        }  


        label{
          display: inline-block;
          width : 200px;
        }

       
        
    </style>

    
@include('admin.css')

  </head>
  <body>
   
      <!-- partial -->
    

    @include('admin.sidebar')



    @include('admin.navbar')




        <!-- partial -->
         
        <div class="container-fluid page-body-wrapper">
       
            <div class="container" align="center">

                   
         @if(session()->has('message'))

       

         <div class="alert alert-success">

           <button type="button" class="close" data-dismiss="alert" >x</button>


                 {{session()->get('message')}}


                </div>


        @endif


            <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
       
              
            @csrf



      

            

      <div style="padding:15px;">

          <label >Doctor Name</label>
          <input style="color: black;" type="text" name="name"  value="{{$data->name}}" required="" >

      </div>

      
      
      <div style="padding:15px;">

          <label >Phone</label>
          <input style="color: black;" type="number" name="phone" value="{{$data->phone}}"  required="" >

      </div>

      
      

      <div style="padding:15px;">

        <label >Speciality</label>
        <select style="color:black; width:200px;"name="speciality">
            <option >{{$data->speciality}}</option>
            <option value="cardiology">Cardiology</option>
            <option value="orthopaedics">Orthopaedics</option>
            <option value="nephrology">Nephrology</option>
            <option value="gynecologist">Gynecologist</option>
        </select>

      </div>



      
      <div style="padding:15px;">

         <label >Room No</label>
          <input style="color: black;" type="text" name="room"  value="{{$data->room}}" required="" >

      </div> 

      
      
      



        
      <div style="padding:15px;">
        <label for="">Old Image</label>
        <img height="150" width="150" src="doctor_image/{{$data->image}}" alt="">

      </div>



      <div  style="padding:15px;">
        <label >Change Image</label>
        <input type="file" name="file">
      </div>

      <div style="padding:15px;">

           <input  class="btn btn-primary" type="submit" n>

      </div>



    </form>






            </div>

        </div>
             
    



    @include('admin.script')






  </body>
</html>