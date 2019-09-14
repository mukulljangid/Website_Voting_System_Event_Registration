<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black;}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso" >
 <div class="container-fluid" >
  <div class="row" style=">
   <div class="col-md-6 col-sm-6 col-xs-12" >
    <form method="post" action="vote.php">
     <div class="form-group " >
      <label class="control-label " for="pres">
        <h1 style="font-size: 30px;color: #19334d;font-family: Times New Roman">Vote Here Bitches</h1>
       Who do you want the next President to be?
      </label>
      <select class="select form-control" id="pres" name="pres" style="width: 300px">
       <option value="--select--">
        Not Selected
       </option>
       <option value="Mukul">
        Mukul
       </option>
       <option value="Jetso">
        Jetso
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label " for="lr">
       Who do you want the next Ladies Representative to be?
      </label>
      <select class="select form-control" id="lr" name="lr" style="width: 300px">
       <option value="--select--">
        Not Selected
       </option>
       <option value="Jessica">
        Jessica
       </option>
       <option value="Masira">
        Masira
       </option>
       <option value="Shweta">
        Shweta
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label " for="gs">
       Who do you want the next General Secretary to be?
      </label>
      <select class="select form-control" id="gs" name="gs" style="width: 300px">
       <option value="--select--">
        Not Selected
       </option>
       <option value="Kishan">
        Kishan
       </option>
       <option value="Mukul">
        Mukul
       </option>
      </select>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit" >
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>