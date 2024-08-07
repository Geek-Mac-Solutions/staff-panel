@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-2 col-sm-3">
         <a href="/"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-8 col-sm-8 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">
            REVIEW YOUR TEACHER
         </h1>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight align-items-center justify-content-center">
      <div class="col-lg-6">

        <div class="reviwe-teacher owl-carousel">

         <div class="text-center bg-white border-2 shadow  border-secondary py-4 px-2 rounded-3">
            <div class="row justify-content-center">
               <div class="col-lg-3  col-sm-4 col-5">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-16 fw-bolder text-purple pt-3 pb-1">ABHIMAN WITHAKSHANA
            </p>
            <p class="font-15 fw-500 text-dark pb-2">SCIENCE TEACHER
            </p>
            <p class="font-14 fw-500 text-dark fst-italic lh-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>

            <ul class="d-flex justify-content-center pt-3  pb-4">
                <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                <li><i class="fa-solid fa-star text-warning me-2 fs-5"></i></li>
                <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
                <li><i class="fa-solid fa-star text-warning me-2 fs-5 not-rating"></i></li>
            </ul>
         </div>

        </div>
      </div>
      <div class="col-lg-4 pt-lg-0 pt-4">
         <form action="">
            <div class="mb-2">
                <label class="form-label font-14 fw-bold text-purple  mb-0">Select Your Teacher
                </label>

                <select class="form-select font-13  fw-500 rounded-0 border-dark" aria-label="Default select example">
                    <option selected>Select Teacher</option>
                    <option value="1">Teacher 01- Subject</option>
                    <option value="2">Teacher 02- Subject</option>
                    <option value="3">Teacher 03- Subject</option>
                  </select>
             </div>
            <div class="mb-2">
               <label class="form-label font-14 fw-bold text-purple  mb-0">Select your rating
               </label>
               <div class="rating">
                <input type="radio" name="star" id="star5"><label for="star5"></label>
                <input type="radio" name="star" id="star4"><label for="star4"></label>
                <input type="radio" name="star" id="star3"><label for="star3"></label>
                <input type="radio" name="star" id="star2"><label for="star2"></label>
                <input type="radio" name="star" id="star1"><label for="star1"></label>
            </div>
            </div>
            <div class="mb-2">
               <label class="form-label font-14 fw-bold text-purple  mb-0">Enter your review here
               </label>
               <textarea class="form-control fw-500 rounded-3 border-dark" rows="7"></textarea>

            </div>
            <div class="pt-2">
               <button type="button" class="btn  font-15 text-white   gradient-background-1 py-2 px-5  ">SUBMIT</button>
            </div>
         </form>
      </div>

      <div class="col-12 pt-4">
<p class="font-15 fw-bold text-purple text-uppercase">
    EDITORS NOTE; A STUDENT CAN ONLY REVIEW THE TEACHERS THAT THEY ARE REGISTERED FOR
</p>
      </div>
   </div>
</div>
@endsection
