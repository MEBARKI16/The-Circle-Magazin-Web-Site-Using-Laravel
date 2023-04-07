@extends('./layouts/theCircleMagazin')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<style>
.form-group {
  height: 50px;
  border-radius: 20px;
  padding: 0 30px;
}
.form-select {
  height: 50px;
  border-radius: 20px;
  padding: 0 30px;
}
.mcem {
  height: 50px;
  border-radius: 20px;
  padding: 0 30px;
}
.mcem input{
  border-radius: 20px;
}
input.input1 + .shadow-input1 {
  border-radius: 25px;
}

</style>
<form> 
     <div class="row" >
         <div class="col-md-4"> <select class="form-select" style="background-color:#1b1464;color:white;width:80%" >
          
                    <option selected>Catégorie</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select></div>
           
                  <div class="form-group col-md-4" style="background-color:#1b1464;color:white;width:20%">
                        <div class="input-group date" id="datepicker" data-target-input="nearest" style="width:80%">
                          <input type="text" style="background-color:#1b1464;color:white;border:none;" class="form-control datetimepicker-input" data-target="#datepicker" name="birthdate" placeholder="date de publication" style="background-color:#1b1464">
                          <div class="input-group-append" data-target="#datepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mcem col-md-4" style="background-color:#1b1464;display:flex;justify-content:space-between;align-items:center;width:80%"> 
                    <label for="name" style="color:white">mot clé</label>
                    <input type="text" id="name" name="name" required style="width:60%">
                </div>
        
            </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  <script>
  $(function() {
  $('#datepicker').datepicker();
});
  </script>
@endsection