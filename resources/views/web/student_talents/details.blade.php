@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT DETAILS
         </h1>
         <p class="font-18 fw-bold text-purple">GRADE 6 SCIENCE THEORY ENGLISH MEDIUM ABHIMAN SIR
         </p>
      </div>
      <div class="col-lg-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
     <div class="col-12">
        <div class="table-responsive">
            <table id="studentDetailsTable" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <tr>
                     <th>CREATED DATE</th>
                     <th>STUDENT ID</th>
                     <th>NAME</th>
                  
                     <th>Gender</th>
                     <th>PHOTO</th>
                     <th>SUBJECTS
                     </th>
                     <th>SCHOOL</th>
                     <th>ADDRESS</th>
                 
                     <th>DISTRICT</th>
                     <th>TOWN</th>
                     <th>PHONE NO</th>
                     <th>PARENT
                        PHONE
                        NO</th>
                     <th>PAYMENT
                        HISTORY
                        </th>
                     <th>ACCOUNT TYPE</th>



                     <th>EDIT
                        DELETE
                     </th>
                  </tr>
               </thead>
               <tbody class="font-14 align-items-center fw-500">
                  <tr   >
                    <td> </td>
                    <td> GNI 00001</td>
                    <td>LITHULI VIRUDINI <a   
                        class="  text-white  bg-success font-12 py-2 px-5 justify-content-around rounded-35"
                           >
                           Activated
                        </a>
                        <br>
                        <a href=" " 
                        class="hvr-shrink text-white  bg-primary font-12 py-2 px-2 justify-content-around rounded-35"
                           >
                           View
                           Analysis
                        </a>
                    </td>
                    <td> </td>
                   
                     <td><img class="d-block w-50 mx-auto rounded-circle" src="/themes/default/img/place-holder.png" alt="Guru Niwasa LMS"></td>
                    
                    
                    
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td> 
                        <a href=" " 
                        class="hvr-shrink text-white  bg-primary font-12 py-2 px-5 justify-content-around rounded-35"
                           >
                        View
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
     </div>
   </div>
</div>
</div>
@endsection