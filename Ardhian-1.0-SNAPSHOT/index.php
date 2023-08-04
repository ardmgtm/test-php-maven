<div class="container">
  <h1>Hello <span id="name"></span></h1>
  <hr>
    
  <label for="Name"><b>Enter Name</b></label>
  <input type="text" placeholder="Enter Full Name" name="name" id="nameForm" required>
  <br>
  <button id="btnSubmit" class="registerbtn">Submit</button>
</div>

<script>
  function setName(){
    
    const name = document.getElementById("nameForm").value;
    const element = document.getElementById("name");
    element.innerHTML = "New Heading";
  }

  const btn = document.getElementById("btnSubmit");
  btn.addEventListener("click", setName);
</script>