@extends('web.layouts.app')
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-4 col-sm-4 pb-lg-0 pb-3">
         <a href="/" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-4 col-sm-4 text-center">
        <h1 class="font-36 fw-bold text-uppercase text-purple">ADD ORDER

        </h1>
        <p class="font-18 fw-500 text-purple">ITEM SHOP
        </p>
      </div>
      <div class="col-lg-4 col-sm-4 pt-lg-0 pt-3 text-end">
        <a href=" " class=" text-uppercase font-12 text-white
        rounded-pill py-2 px-3 bg-secondary fw-500 align-items-center ">SCAN BAR CODE

     </a>
     <a href="{{ route('web.item-shop') }}" class=" text-uppercase font-12 text-white
     rounded-pill py-2 px-3 bg-warning fw-500 align-items-center ms-3  hvr-shrink">Store
  </a>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="container">
      <div class="row middle-hight ">

        <div class="col-12 pb-3">
            <div class="card p-3">
                <div class="row align-items-center">
                   <div class="col-lg-3 col-sm-4 col-7 pb-lg-0 pb-2">
                      <p class="font-14 fw-500 text-white bg-info text-center rounded-pill">SUNALI PERERA</p>
                   </div>
                   <div class="col-lg-2 col-sm-3 col-5 pb-lg-0 pb-2">
                      <p class="font-14 fw-bolder text-dark ">GNI 2244</p>
                   </div>
                   <div class="col-lg-3 col-sm-4 col-7 pb-lg-0 pb-2">
                      <p class="font-14 fw-bolder text-dark ">GRADE 6 - ENGLISH MEDIUM</p>
                   </div>
                   <div class="col-lg-2 col-sm-3 col-5  pb-lg-0 pb-2">
                      <p class="font-14 fw-bolder text-dark ">077 287 9970 </p>
                   </div>
                   <div class="col-lg-2 col-sm-4  pb-lg-0 pb-2 text-center">
                      <a href=" " class=" w-100 text-uppercase font-12 text-white
                         rounded-pill py-2 px-3 bg-primary fw-500 align-items-center   hvr-shrink">STUDENT DETAILS
                      </a>
                   </div>
                </div>
             </div>
        </div>
         <div class="col-lg-6">
            <ul class="nav nav-tabs justify-content-center " id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                  <input class="form-check-input" type="radio" name="deliveryOption" id="pickup" value="pickup">
                  <label class="form-check-label font-17 fw-500 text-purple" for="pickup ">Pickup</label>
                  </button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <input class="form-check-input" type="radio" name="deliveryOption" id="delivery" value="delivery">
                  <label class="form-check-label font-17 fw-500 text-purple" for="delivery">Delivery</label></button>
               </li>
            </ul>
            <div class="tab-content mt-4" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දරුවාගේ නම</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Student Name</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="studentName" placeholder="Enter student name">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ශ්‍රේණිය</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Grade</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter grade">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ලිපිනය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Address</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter address">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දිස්ත්‍රික්කය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">District</label>
                           </div>
                           <div class="col-lg-9">
                              <select class="form-select  fw-500 rounded-0 border-dark text-dark" id="district">
                                 <option selected>Select district</option>
                                 <!-- Add district options here -->
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> නගරය </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 "> Town</label>
                           </div>
                           <div class="col-lg-9">
                              <select class="form-select  fw-500 rounded-0 border-dark text-dark" id="district">
                                 <option selected>Select nearest town</option>
                                 <!-- Add district options here -->
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 01 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  01</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 01">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 02 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  02</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 02">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



                  <form>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">දරුවාගේ නම</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Student Name</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="studentName" placeholder="Enter student name">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 ">ශ්‍රේණිය</label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Grade</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter grade">
                           </div>
                        </div>
                     </div>

                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 01 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  01</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 01">
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="row align-items-center">
                           <div class="col-lg-3">
                              <label for="studentName" class="form-label font-14 fw-500 text-purple mb-0 "> දුරකතන අංක 02 </label>
                              <p></p>
                              <label for="studentName" class="form-label font-14 fw-bold text-purple  mb-0 ">Phone  02</label>
                           </div>
                           <div class="col-lg-9">
                              <input type="text" class="form-control fw-500 rounded-3 border-dark text-dark" id="" placeholder="Enter phone numbers 02">
                           </div>
                        </div>
                     </div>
                  </form>

               </div>
            </div>
         </div>
         <div class="col-lg-1"></div>
         <div class="col-lg-5">
            <div class="item-list mb-3">
          <div class="row">
            <div class="col-lg-6">
                <p class="font-16 fw-bolder text-purple ">SUBJECT</p>
            </div>
            <div class="col-lg-6">
                <p class="font-16 text-end fw-bolder text-purple "> AMOUNT </p>
            </div>
          </div>
               <ul class="list-group fopnt-14 text-dark fw-500">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 1 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 2 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     Item 3 <span class="badge bg-primary rounded-pill">1200.00</span>
                  </li>
               </ul>
            </div>
            <div class="total-box text-end fopnt-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
               <p>Total: 3600.00</p>
               <p>Discount: -600.00</p>
               <p>Delivery Fee: +300.00</p>
               <p><strong>Grand Total: 3300.00</strong></p>
            </div>
            <form class="mt-3">
               <div class="mb-3">
                  <label for="dateTime" class="form-label font-14 fw-bold text-purple  ">Date and Time on the Slip</label>
                  <input type="text" class="form-control fw-500 rounded-3 border-dark" id="dateTime" placeholder="Enter date and time">
               </div>
               <div class="mb-3">
                  <label for="selectBank" class="form-label font-14 fw-bold text-purple  ">Select the Bank</label>
                  <select class="form-select fw-500 rounded-3 border-dark text-dark" id="selectBank">
                     <option selected>Choose the bank</option>
                     <!-- Add bank options here -->
                  </select>
               </div>
               <div class="mb-3">
                  <label for="transferSlip" class="form-label font-14 fw-bold text-purple  ">Choose the Transfer Slip</label>
                  <input type="file" class="form-control fw-500 rounded-3 border-dark" id="transferSlip">
               </div>
            </form>
            <div class="d-flex justify-content-between align-items-center">
               <button class="btn btn-primary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#accountBankView">View Bank Account Details</button>





               <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="accountBankView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="exampleModalLabel"> Bank Account View</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="d-block w-100  " src="{{asset('themes/default/img/account-bank.png')}}"
                        alt="Guru Niwasa LMS">
                    </div>

                  </div>
                </div>
              </div>















               <button class="btn btn-secondary fw-500 font-11 px-2 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#slipUpdate">Click to Update the Bank Slip</button>


               <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="slipUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center py-5">

                        <div class="success-checkmark">
                            <div class="check-icon">
                              <span class="icon-line line-tip"></span>
                              <span class="icon-line line-long"></span>
                              <div class="icon-circle"></div>
                              <div class="icon-fix"></div>
                            </div>
                          </div>

                        <h3 class="font-16 fw-bold  text-purple pt-4">
                              ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක් ලබා දෙනු ලබයි. !!
                        </h3>
                        <h3 class="font-16 fw-bold  text-purple pb-4">
                            ස්තුතියි !!!</h3>

                        <h3 class="font-16 fw-bold  text-purple">
                              Your order has been successfully placed in the LMS. You will receive a message once the order gets approved!

                                                    </h3>
                                                    <h3 class="font-16 fw-bold   text-purple">
                                                        Thank you !!!</h3>
                    </div>

                  </div>
                </div>
              </div>


            </div>
            <hr>


























            <div class="text-center">
               <p class="font-18 fw-bold   text-dark">Or</p>
               <button class="btn btn-warning fw-500 font-13 text-white" data-bs-toggle="modal" data-bs-target="#paymentView">Card Payment</button>
               <div class="mt-2">
                <img class="w-100 mx-auto" src="{{ asset('themes/default/img/credit-cards.png') }}"
                alt="Guru Niwasa LMS"  >
               </div>
            </div>
         </div>
      </div>





       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="paymentView" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title modal-title font-18 fw-bold   text-purple" id="exampleModalToggleLabel">Card Payment</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body py-2 text-center">
               <p class="font-14 fw-bolder  text-purple  ">
                  කාඩ්පතෙන් මුදල් ගෙවීම සාර්ථකව සිදු කිරීමට දෙවතා වක් ඔබ සාර්ථකව මුදල් ගෙවූ බවට තිරයේ දිස්වන තුරු රැදී සිටින්න. එනම්, payment gateway එකෙහි "Payment Approved" ලෙස දිස්වූ පසු ඉන් ඉවත් නොවී තවත් මද වේලාවක් රැදී සිටින්න. ඉන්පසු නැවත LMS ගිණුම විවෘත වන අතර එහි "කාඩ්පත් ගෙවීමක් මගින් ඔබ සාර්ථකව පන්ති ගාස්තු ගෙවා ඇත" ලෙස සටහන් වූ පසු ඔබගේ පන්ති ගාස්තු ගෙවීම සාර්ථක ලෙස සිදුවී ඇත. (මෙසේ දෙවතාවක් වැටෙනතෙක් අනිවාර්යයෙන්ම රැදී සිටින්න)

               </p>
               <p class="font-14 fw-bolder  text-purple pt-4">
                  To successfully pay through the card, you must wait until you see the "You have successfully paid the
                  total amount" message twice on the screen. This means you must wait until you see "Payment
                  Approved" message from the payment gateway and after waiting a bit the LMS will automatically pop up
                  and display "You have successfully conducted a card payment" message. Only after that the payment has
                  been recorded successfully so please be cautious until you see both these messages.
               </p>
             </div>
             <div class="modal-footer">
               <button class="btn btn-info fw-500 font-13 text-white" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                  Click to Continue</button>
             </div>
           </div>
         </div>
       </div>
       <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
         <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
             <div class="modal-header">

               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body text-center py-5">

               <div class="success-checkmark">
                   <div class="check-icon">
                     <span class="icon-line line-tip"></span>
                     <span class="icon-line line-long"></span>
                     <div class="icon-circle"></div>
                     <div class="icon-fix"></div>
                   </div>
                 </div>

               <h3 class="font-16 fw-bold  text-purple pt-4">
                     ඔබගේ ඇණවුම සාර්ථකව LMS පද්ධතියට ඇතුලත් කරන ලදී. එය අනුමත වූ වහාම ඔබ හට පණිවිඩයක් ලබා දෙනු ලබයි. !!
               </h3>
               <h3 class="font-16 fw-bold  text-purple pb-4">
                   ස්තුතියි !!!</h3>

               <h3 class="font-16 fw-bold  text-purple">
                     Your order has been successfully placed in the LMS. You will receive a message once the order gets approved!

                                           </h3>
                                           <h3 class="font-16 fw-bold   text-purple">
                                               Thank you !!!</h3>
           </div>

           </div>
         </div>
       </div>











      <div class="row justify-content-center pt-5">



















<div class="col-lg-8">
    <p class="font-14 fw-bolder text-purple text-center">
        ඔබගේ ඇණවුම ඔබ ඇණවුම් කල දිනයේ සිට සති දෙකක් ඇතුලත හෝ ඊට පෙර සූදානම් කර ඔබවෙත දැනුම් දේ . එවිට ආයතනය වෙත පැමිණ ඔබගේ ඇණවුම රැගෙනයා හැක. (ආයතනය දැනුම් දීමට පෙර ආයතනය වෙත නොපැමිණෙන්න.) ස්තූතියි !!!
    </p>
</div>

      </div>
   </div>
</div>
@endsection
