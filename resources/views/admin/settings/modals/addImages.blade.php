<!-- Modal -->
<div class="modal right fade" id="add_imagesQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">How many illustrations you want to add?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control auth-form" type="text" id="member" name="member" placeholder="Iliustracijų skaičius:" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
        <a id="filldetails" onclick="addImgs()"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add</button></a>
      </div>
    </div>
  </div>
</div>
