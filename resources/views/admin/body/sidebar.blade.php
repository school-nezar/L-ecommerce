<div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
          <div>
               <img src="{{ asset('admin/assets/images/ctp.png') }}" class="logo-icon" alt="logo icon">
          </div>
          <div>
               <h4 class="logo-text">Creative Team </h4>
          </div>
          <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
          </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
          <li>
               <a href="/dashboard" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Home</div>
               </a>
              
          </li>
          <li>
               <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Categories & products</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.categories') }}"><i class="bx bx-right-arrow-alt"></i>All Categories</a>
                    </li>
                    <li> <a href="{{ route('all.subcategories') }}"><i class="bx bx-right-arrow-alt"></i>All SubCategory</a>
                    </li>
                    <li> <a href="{{ route('all.products') }}"><i class="bx bx-right-arrow-alt"></i>Products list</a>
                    </li>
                    
               </ul>
          </li>
          <li class="menu-label">UI Elements</li>
          
          <li>
               <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">Orders</div>
               </a>
               <ul>
                    <li> <a href="{{ route('pending.order') }}"><i class="bx bx-right-arrow-alt"></i>Pending orders</a>
                    </li>
                    <li> <a href="{{ route('processing.order') }}"><i class="bx bx-right-arrow-alt"></i>Processing orders</a>
                    </li>
                    <li> <a href="{{ route('complete.order') }}"><i class="bx bx-right-arrow-alt"></i>complete orders</a>
                    </li>
                   
               </ul>
          </li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                    </div>
                    <div class="menu-title">Contact</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.message') }}"><i class="bx bx-right-arrow-alt"></i>Messages</a>
                    </li>
                    
               </ul>
          </li>



          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-repeat'></i>
                    </div>
                    <div class="menu-title">Notification</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.notification') }}"><i class="bx bx-right-arrow-alt"></i>All Notificaion</a>
                    </li>
                    
               </ul>
          </li>



          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-repeat'></i>
                    </div>
                    <div class="menu-title">Slider</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.sliders') }}"><i class="bx bx-right-arrow-alt"></i>View Sliders</a>
                    </li>
                    
               </ul>
          </li>


          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-repeat'></i>
                    </div>
                    <div class="menu-title">Site information</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.infos') }}"><i class="bx bx-right-arrow-alt"></i>View site info</a>
                    </li>
                    
               </ul>
          </li>

          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-repeat"></i>
                    </div>
                    <div class="menu-title">Reviews</div>
               </a>
               <ul>
                    <li> <a href="{{ route('all.reviews') }}"><i class="bx bx-right-arrow-alt"></i>All reviews</a>
                    </li>
                   
               </ul>
          </li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                    </div>
                    <div class="menu-title">Icons</div>
               </a>
               <ul>
                    <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
                    </li>
                    <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                    </li>
                    <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
                    </li>
               </ul>
          </li>
          <li class="menu-label">Forms & Tables</li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                    </div>
                    <div class="menu-title">Forms</div>
               </a>
               <ul>
                    <li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
                    </li>
                    <li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
                    </li>
                    <li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
                    </li>
                    <li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
                    </li>
                    <li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                    </li>
                    <li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
                    </li>
                    <li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
                    </li>
                    <li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
                    </li>
                    <li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
                    </li>
               </ul>
          </li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Tables</div>
               </a>
               <ul>
                    <li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
                    </li>
                    <li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
                    </li>
               </ul>
          </li>
          <li class="menu-label">Pages</li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-lock"></i>
                    </div>
                    <div class="menu-title">Authentication</div>
               </a>
               <ul>
                    <li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
                    </li>
                    <li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
                    </li>
                    <li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
                    </li>
                    <li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
                    </li>
                    <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                    </li>
                    <li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
                    </li>
                    <li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                    </li>
               </ul>
          </li>
          <li>
               <a href="user-profile.html">
                    <div class="parent-icon"><i class="bx bx-user-circle"></i>
                    </div>
                    <div class="menu-title">User Profile</div>
               </a>
          </li>
          <li>
               <a href="timeline.html">
                    <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                    </div>
                    <div class="menu-title">Timeline</div>
               </a>
          </li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-error"></i>
                    </div>
                    <div class="menu-title">Errors</div>
               </a>
               <ul>
                    <li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
                    </li>
                    <li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
                    </li>
                    <li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                    </li>
                    <li> <a href="error-blank-page.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Blank Page</a>
                    </li>
               </ul>
          </li>
          <li>
               <a href="faq.html">
                    <div class="parent-icon"><i class="bx bx-help-circle"></i>
                    </div>
                    <div class="menu-title">FAQ</div>
               </a>
          </li>
          <li>
               <a href="pricing-table.html">
                    <div class="parent-icon"><i class="bx bx-diamond"></i>
                    </div>
                    <div class="menu-title">Pricing</div>
               </a>
          </li>
          <li class="menu-label">Charts & Maps</li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-line-chart"></i>
                    </div>
                    <div class="menu-title">Charts</div>
               </a>
               <ul>
                    <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                    </li>
                    <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                    </li>
                    <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                    </li>
               </ul>
          </li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-map-alt"></i>
                    </div>
                    <div class="menu-title">Maps</div>
               </a>
               <ul>
                    <li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
                    </li>
                    <li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
                    </li>
               </ul>
          </li>
          <li class="menu-label">Others</li>
          <li>
               <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-menu"></i>
                    </div>
                    <div class="menu-title">Menu Levels</div>
               </a>
               <ul>
                    <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
                         <ul>
                              <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
                                   <ul>
                                        <li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
                                        </li>
                                   </ul>
                              </li>
                         </ul>
                    </li>
               </ul>
          </li>
          <li>
               <a href="https://codervent.com/rukada/documentation/index.html" target="_blank">
                    <div class="parent-icon"><i class="bx bx-folder"></i>
                    </div>
                    <div class="menu-title">Documentation</div>
               </a>
          </li>
          <li>
               <a href="https://themeforest.net/user/codervent" target="_blank">
                    <div class="parent-icon"><i class="bx bx-support"></i>
                    </div>
                    <div class="menu-title">Support</div>
               </a>
          </li>
     </ul>
     <!--end navigation-->
</div>