<!--start sidebar -->
      <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            {{-- <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon"> --}}
          </div>
          <div>
            <span class="logo-text">Memesheetpost</span>
          </div>
          <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
              </div>
              <div class="menu-title">Main</div>
            </a>
            <!-- anak dashboard -->
            <ul>
              <li> <a href="{{ route('photo.index')}} ">
                  <ion-icon name="ellipse-outline"></ion-icon>Upload meme(photo)
                </a>
              </li>
              <li> <a href="{{ route('meme_kamu.index')}} ">
                  <ion-icon name="ellipse-outline"></ion-icon>Meme kamu
                </a>
              </li>
            </ul>
          </li>
          <li>
          </li>
          
          </li>
        </ul>
        <!--end navigation-->
      </aside>
      <!--end sidebar -->