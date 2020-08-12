 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Dashboard Page</h1>

   <!-- Content Row -->
   <div class="row">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gallery</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_gallery() ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-camera fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Guru</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_guru() ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-users fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Siswa</div>
               <div class="row no-gutters align-items-center">
                 <div class="col-auto">
                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $this->fungsi->count_siswa() ?></div>
                 </div>
                 <div class="col">
                   <!-- <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div> -->
                 </div>
               </div>
             </div>
             <div class="col-auto">
               <i class="fas fa-users fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Users</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_user() ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-user-plus fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>


 </div>
 </div>