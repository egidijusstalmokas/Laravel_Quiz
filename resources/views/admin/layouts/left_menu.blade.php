    <!-- Sidebar -->
    <div style="overflow:scroll;" class="sidebar-fixed position-fixed">
      <a class="logo-wrapper waves-effect">
        <img style="width: 100px; margin-left: 15%;" src="{{ asset('logo/') }}/{{ $logo->value }}" class="img-fluid" alt="">
      </a> 
      <div class="list-group list-group-flush">
        <a href="{{ route('desk') }}" class="list-group-item {{ (request()->segment(2) == '') ? 'active' : '' }} waves-effect">
          <i class="mr-3"></i>Dashboard</a>
        <a href="{{ route('question.index') }}" class="list-group-item list-group-item-action {{ (request()->segment(2) == 'question') ? 'active' : '' }} waves-effect">
          <i class="fa-solid fa-question mr-3"></i>Question</a> 
        <a href="{{ route('settings.main') }}" class="list-group-item list-group-item-action {{ (request()->segment(2) == 'settings') ? 'active' : '' }} waves-effect">
          <i class="fa-solid fa-gear mr-3"></i>Settings</a> 
      </div>
    </div>
    <!-- Sidebar -->
