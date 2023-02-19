
<div class="modal fade right" id="userMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-right modal-notify" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg_deep_blue">
        <p class="heading lead">{{ Auth::user()->name }}</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <p><i style="margin-right:10px;" class="fas fa-user-alt p-1"></i>Email: {{ Auth::user()->email }}</p>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a role="button" class="btn btn-outline-deep_blue waves-effect"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Log out</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
</div>
