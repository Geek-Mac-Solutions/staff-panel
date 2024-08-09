@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENT ANALYSING
         </h1>
         <p class="font-20 fw-500 text-purple">LITHULI VIRUDINI
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive">
            

                <table  id="analysingTbl" class="table table-striped table-hover table-bordered">
                    <thead class="text-white gradient-background text-uppercase fw-light font-14">
                        <tr>
                            <th class="table-header" rowspan="2">NAME</th>
                            <th class="table-header" rowspan="2">STUDENT DETAILS</th>
                            <th class="table-header" rowspan="2">Subject</th>
                            <th class="table-header" colspan="5">Attendance</th>
                            <th class="table-header" rowspan="2">MONTH
                                LY /
                                TERM
                                TEST</th>
                            <th class="table-header" rowspan="2">School Term Test</th>
                            <th class="table-header" rowspan="2">Note / Paper</th>
                            <th class="table-header" rowspan="2">FEES</th>
                        </tr>
                        <tr>
                            <th class="table-header">7</th>
                            <th class="table-header">14</th>
                            <th class="table-header">21</th>
                            <th class="table-header">28</th>
                            <th class="table-header">-</th>
                        </tr>
                    </thead>
                    <tbody class="font-13 align-items-center fw-500">
                   

                       
                        <tr>
                            <td>LITHULI VIRUDINI</td>
                            <td>SUBJECTSWISE TALENT VIDEOS</td>
                            <td>Science</td>
                            <td class="zoom">ZOOM</td>
                            <td class="physical">PHYSICAL</td>
                            <td class="zoom">ZOOM</td>
                            <td class="absent">ABSENT</td>
                            <td></td>
                            <td class="physical"> <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                95
                             </p> </td>
                            <td>
                                <p class="py-2 px-4 bg-success text-white font-13 text-center rounded-pill">
                                   70
                                 </p>
                            </td>
                            <td>

                                <div>Grade 7 - Unit 08 - The Nature of the earth <br><div class="text-white bg-danger font-11 fw-500 px-3 py-1 rounded-pill m-2  text-center">NOT UPLOADED</div></div>
                            </td>
                            <td>1200.00</td>
                        </tr>
                    </tbody>
                </table>


         </div>
      </div>
   </div>
</div>
@endsection
