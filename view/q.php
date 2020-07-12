<!DOCTYPE html>
<html
 lang="en">

 <?php include('header.php'); ?>

  <?php include('navbar.php'); ?>

  <div class="main-content">

 <div class="page-content">





                     <!-- start page title -->
                     <div class="row">
                         <div class="col-12">
                             <div class="page-title-box d-flex align-items-center justify-content-between">
                                 <h4 class="page-title mb-0 font-size-18">Schedule Exam</h4>

                                 <div class="page-title-right">
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                         <li class="breadcrumb-item active">Create Task</li>
                                     </ol>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <!-- end page title -->

                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card">
                                 <div class="card-body">
                                     <h4 class="card-title mb-4">Schedule New Exam</h4>
                                     <form class="outer-repeater">
                                         <div data-repeater-list="outer-group" class="outer">
                                             <div data-repeater-item class="outer">

                                                 <div class="inner-repeater mb-4">

                                                               <label class="col-form-label col-lg-2 " >Exam Title *</label>
                                                                 <div class="col-md-6 row align-items-center">
                                                                     <input type="text" class="inner form-control" placeholder="Enter Name..." />
                                                                 </div>



                                                                 <label class="col-form-label col-lg-4 " >Exam Date & Time</label>
                                                                   <div class="col-md-6 row align-items-center">
                                                                       <input type="datetime-local" class="inner form-control" placeholder="Enter Name..." />
                                                                   </div>

                                                                   <label class="col-form-label col-lg-4 " >Exam Duration </label>
                                                                     <div class="col-md-6 row align-items-center">
                                                                      <select class="inner form-control" placeholder="Select">
                                                                         <option value ="5">5 Minutes </option>
                                                                          <option value ="30">30 Minutes </option>
                                                                           <option value ="60">1 hour </option>
                                                                            <option value ="120">2 hours</option>
                                                                            <option value ="180">3 hours</option>

                                                                         </select>
                                                                     </div>

                                                                     <label class="col-form-label col-lg-4 " >Total Question</label>
                                                                       <div class="col-md-6 row align-items-center">
                                                                         <select class="inner form-control" placeholder="Select">
                                                                            <option value ="5">5 Questions </option>
                                                                             <option value ="10">10 Questions  </option>
                                                                              <option value ="25">25 Questions  </option>
                                                                               <option value ="50">50 Questions</option>
                                                                               <option value ="100">100 Questions</option>
                                                                               <option value ="200">200 Questions</option>
                                                                               <option value ="300">300 Questions</option>

                                                                            </select>
                                                                       </div>

                                                                       <label class="col-form-label col-lg-4 " >Mark for Rignt Answer</label>
                                                                         <div class="col-md-6 row align-items-center">
                                                                              <select class="inner form-control" placeholder="Select">
                                                                           <option value ="1">+1 Mark </option>
                                                                            <option value ="2">+2 marks </option>
                                                                             <option value ="3">+3 marks </option>
                                                                              <option value ="4">+4 marks </option>
                                                                              <option value ="5">+5 Marks</option>
                                                                                </select>
                                                                         </div>

                                                                         <label class="col-form-label col-lg-4 " >Mark for Wrong Answer</label>
                                                                           <div class="col-md-6 row align-items-center">
                                                                             <select class="inner form-control" placeholder="Select">
                                                                          <option value ="1">-1 Mark </option>
                                                                           <option value ="1.25">-1.25 marks </option>
                                                                            <option value ="1.50">-1.50 marks </option>
                                                                             <option value ="2">-2 marks </option>

                                                                               </select>
                                                                           </div>
                                                                           <br>

                                                                           <div class="row justify-content-end">
                                                                               <div class="col-lg-10">
                                                                                   <button type="submit" class="btn btn-primary">Create Task</button>
                                                                               </div>
                                                                           </div>
                                                 </div>

                                             </div>
                                         </div>
                                     </form>


                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- end row -->

                 </div>
                 <!-- End Page-content -->



  <?php include('footer.php'); ?>

</html>
