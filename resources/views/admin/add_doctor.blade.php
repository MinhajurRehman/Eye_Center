

<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('admin.css')


  
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




  </head>
  <body>
   
      <!-- partial -->
    

    @include('admin.sidebar')



    @include('admin.navbar')

  

    <div class="container-fluid page-body-wrapper">
       
      <div class="container" align="center">

      <h1 class="title" >Add Doctor</h1>

      
      @if(session()->has('message'))

       

       <div class="alert alert-success">

       <button type="button" class="close" data-dismiss="alert" >x</button>
       

       {{session()->get('message')}}


       </div>

      
      @endif

      <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
       
         @csrf



      

            

      <div style="padding:15px;">

          <label >Doctor Name</label>
          <input style="color: black;" type="text" name="name"  placeholder="Enter doctor name" required="" >

      </div>

      
      
      <div style="padding:15px;">

          <label >Phone</label>
          <input style="color: black;" type="number" name="phone"  placeholder="Enter number" required="" >

      </div>

      
      

      <div style="padding:15px;">

        <label >Speciality</label>
        <select style="color:black; width:200px;"name="speciality" >
            <option >--select--</option>
            <option value="cardiology">Cardiology</option>
            <option value="orthopaedics">Orthopaedics</option>
            <option value="nephrology">Nephrology</option>
            <option value="gynecologist">Gynecologist</option>
        </select>

      </div>



      
      <div style="padding:15px;">

         <label >Room No</label>
          <input style="color: black;" type="text" name="room"  placeholder="Enter room NO " required="" >

      </div> 

      
      
      



        
      <div style="padding:15px;">
        <label for="">Doctor Image</label>
        <input type="file" name="file">

      </div>


         
      <div style="padding:15px;">

        <input  class="btn btn-success" type="submit" n>

      </div>



    </form>





      </div>

    </div>
      
    



    @include('admin.script')






  </body>
</html>