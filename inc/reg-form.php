<!-- Modal -->
<div class="modal fade " id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div style="height: 120px;"></div>
      <div class="modal-content">
          <div class="modal-header ">
              <h5 class="modal-title text-center" id="signupModalLabel">RASTRIYA VIDYARTHI SABHA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- form -->
              <form  action="memberreg.php" method="POST">
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">NAME</label>
                <input type="text" class="form-control" id="jname" name="jname" required>
              </div>
              <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">FATHER'S NAME</label>
                      <input type="text" class="form-control" id="jfname" name="jfname" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DOB</label>
                  <input type="date" class="form-control" id="jdob" name="jdob" required>
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >VILLAGE/MO.</label>
                  <input type="text" class="form-control" id="jvname" name="jvname" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >POST</label>
                  <input type="text" class="form-control" id="jpost" name="jpost" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >TEHSIL</label>
                  <input type="text" class="form-control" id="jtehsil" name="jtehsil" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >DISTRICT</label>
                  <input type="text" class="form-control" id="jdistrict" name="jdistrict" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >STATE</label>
                  <input type="text" class="form-control" id="jstate" name="jstate" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >MOBILE NO.</label>
                  <input type="text" class="form-control" id="jmobile" name="jmobile" required>
                </div>
              
              <button type="submit" class="btn btn-primary" name="saved" onclick="myFunction()" >SUBMIT</button>
            </form>
      </div>
    </div>
  </div>
</div>
