<!-- Full Height Modal Right -->
<div class="modal fade right" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document">
    <div class="modal-content">
      <div class="modal-header modal-menu-header">
        <button type="button" class="menu_button modal-menu-button" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('imgs/icons/menu.png') }}" alt="">
        </button>
      </div>
      <div class="modal-body modal-menu-content">
        <ul class="list-styles-none menu-list">
            <li class="mb-5"><a href="{{ route('quiz') }}">Quiz</a></li>
            <li class="mb-5"><a href="">About app</a></li>
        </ul>
      </div>
      <div class="modal-footer modal-menu-footer">
        <ul class="list-styles-none">
            <li>
                <a href="https://github.com/egidijusstalmokas/Laravel_Quiz"><button class="d-inline lang_selectors_menu">GitHub <i class="fa-brands fa-github"></i></button></a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->
