<div class="row">
    <div class="col"></div>
    <div class="col">


    <form action="painel.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="inputPassword5" class="form-label">Password</label>
    <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
    <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </div>
  </div>
    <label for="exampleDataList" class="form-label">Cidade de Nascimento</label>
    <input class="form-select form-select-lg" name="city" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="São Bernardo">
        <option value="Diadema">
        <option value="Santo André">
    </datalist>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-secondary">Reset</button>
</form>


    </div>
    <div class="col"></div>
</div>

