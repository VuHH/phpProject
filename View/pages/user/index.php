<script src="View/pages/user/js/addUser.js" type="text/javascript"></script>

<div class="row">
   <div class="col-md-6">
      <h3 class="my-4">Show All Users</h3>
   </div>
   <div class="col-md-6">
      <button type="button" class="btn btn-success my-4" data-toggle="modal" 
        data-target="#addUserModal" data-keyboard="true">
      Add User
      </button>
   </div>
</div>
<table class="table table-striped">
   <tr>
      <th>ID</th>
      <th>Name</th>
   </tr>
   <?php 
      foreach ($lstUsers as $user) {
          echo "<tr>";
          echo "<td>", $user->id, "</td>";
          echo "<td>", $user->name, "</td>";
          echo "</tr>";
      }
      ?>
</table>
<!-- Modal -->
<div class="modal fade" id="addUserModal" role="dialog" tabindex='-1'>
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title my-4 text-center">Add User</h4>
            <button type="button" class="close" data-dismiss="modal" 
               onClick="resetForm()">&times;</button>
         </div>
         <div class="modal-body">
            <form action="" method="">
               <div class="form-group">
                  <label for="usr">User Id:</label>
                  <input type="text" class="form-control" id="userId" name="userId">
               </div>
               <div class="form-group">
                  <label for="pwd">User Name:</label>
                  <input type="text" class="form-control" id="userName" name="userName">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-success" 
                    onClick="addUser()">Add</button>
            <button type="button" class="btn btn-default" 
                    data-dismiss="modal" onClick="resetForm()">Close</button>
         </div>
      </div>
   </div>
</div>