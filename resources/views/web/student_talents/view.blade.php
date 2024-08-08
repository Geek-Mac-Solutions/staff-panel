@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">STUDENTS
         </h1>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 justify-content-end">
         <a class=href="{{ route('web.student.details') }}" data-bs-toggle="modal" data-bs-target="#englishMedium">
            <ul class="d-flex justify-content-center font-14 text-white
               my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
               <li><i class="fa fa-eye"></i></li>
               <li class="d-none tab-d-none d-sm-block ps-2"> ENGLISH MEDIUM </li>
            </ul>
         </a>
         <div class="modal fade" id="englishMedium" data-bs-backdrop="static"
            tabindex="-1" aria-labelledby="englishMedium" aria-hidden="true" >
            <div class="modal-dialog ">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title font-15 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                        ENGLISH MEDIUM
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="row justify-content-center">
                        <div class="col-lg-6 col-6">
                           <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                              <tbody>
                                 <tr>
                                    <td>
                                       <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                          align-items-center   hvr-shrink">GRADE 1
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                       align-items-center   hvr-shrink">GRADE 2
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                       align-items-center   hvr-shrink">GRADE 3
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                       align-items-center   hvr-shrink">GRADE 4
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                       align-items-center   hvr-shrink">GRADE5
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                       align-items-center   hvr-shrink">GRADE 6
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="col-lg-6 col-6">
                            <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                               <tbody>
                                  <tr>
                                     <td>
                                        <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                           align-items-center   hvr-shrink">GRADE 1
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                        align-items-center   hvr-shrink">GRADE 2
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                        align-items-center   hvr-shrink">GRADE 3
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                        align-items-center   hvr-shrink">GRADE 4
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                        align-items-center   hvr-shrink">GRADE5
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-primary fw-500
                                        align-items-center   hvr-shrink">GRADE 6
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <a class=href="{{ route('web.student.details') }}" data-bs-toggle="modal" data-bs-target="#sinhalaMedium">
            <ul class="d-flex justify-content-center font-14 text-white
               my-1 py-2 px-3 bg-warning fw-500 align-items-center  rounded-pill">
               <li><i class="fa fa-eye"></i></li>
               <li class="d-none tab-d-none d-sm-block ps-2"> SINHALA MEDIUM </li>
            </ul>
         </a>
         <div class="modal fade" id="sinhalaMedium" data-bs-backdrop="static"
            tabindex="-1" aria-labelledby="sinhalaMedium" aria-hidden="true" >
            <div class="modal-dialog ">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title font-15 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                        SINHALA MEDIUM
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="row justify-content-center">
                        <div class="col-lg-6 col-6">
                           <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                              <tbody>
                                 <tr>
                                    <td>
                                       <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                          align-items-center   hvr-shrink">GRADE 1
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                       align-items-center   hvr-shrink">GRADE 2
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                       align-items-center   hvr-shrink">GRADE 3
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                       align-items-center   hvr-shrink">GRADE 4
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                       align-items-center   hvr-shrink">GRADE5
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                                 <tr>
                                    <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                       align-items-center   hvr-shrink">GRADE 6
                                       </a>
                                    </td>
                                    <td>127</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="col-lg-6 col-6">
                            <table class="table font-14 fw-bolder text-dark table-bordered border-primary text-center">
                               <tbody>
                                  <tr>
                                     <td>
                                        <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                           align-items-center   hvr-shrink">GRADE 1
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                        align-items-center   hvr-shrink">GRADE 2
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                        align-items-center   hvr-shrink">GRADE 3
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                        align-items-center   hvr-shrink">GRADE 4
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                        align-items-center   hvr-shrink">GRADE5
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                                  <tr>
                                     <td> <a href="{{ route('web.student.details') }}" class=" w-100 text-uppercase font-12 text-white rounded-pill py-2 px-3 bg-success fw-500
                                        align-items-center   hvr-shrink">GRADE 6
                                        </a>
                                     </td>
                                     <td>127</td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>











      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight align-items-center">
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-17 text-uppercase fw-bold text-purple py-3 rounded-35  mh-6  ">
                  ACTIVE ACCOUNTS (Atleast for
                  1 week)
               </p>
               {{-- <div class="row justify-content-center ">
                  <div class="col-lg-10 text-white ">
                     <a href=" " class=" hvr-shrink">See More</a>
                  </div>
               </div> --}}
            </div>
         </div>
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-17 text-uppercase fw-bold py-3 rounded-35  mh-6  ">
                  <a href="{{ route('web.inactive.accounts') }}" class="text-purple  hvr-shrink">  ACTIVE ACCOUNTS (Atleast for
                  1 week)</a>
               </p>

            </div>
         </div>
         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-17 text-uppercase fw-bold py-3 rounded-35  mh-6  ">PAID ACCOUNTS

                  <span class="font-12"> (Payment done for current
                    month)</span>
               </p>

            </div>
         </div>


         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-17 text-uppercase fw-bold py-3 rounded-35   ">
                  <a href="{{ route('web.non_paid.accounts') }}" class="text-purple  hvr-shrink"> NON PAID ACCOUNTS
                   <span class="font-12"> (Payment not done for current
                    month)</span>
                    </a>
               </p>

            </div>
         </div>


         <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
            <div class="border-new pt-3 pb-5 px-3 mx-lg-0 mx-sm-0 mx-3  rounded-35 bg-white text-center">
               <p
                  class="font-17 text-uppercase fw-bold py-3 rounded-35   ">
                  <a href="{{ route('web.scholarship.details') }}" class="text-purple  hvr-shrink"> SCHOLARSHIP DETAILS

                    </a>
               </p>

            </div>
         </div>













      </div>
   </div>
</div>
@endsection
