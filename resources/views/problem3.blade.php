
<!DOCTYPE html>
<html>
<head>
  <title>From</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-3">
        <div class="card mt-5">
          <div class="card-header">
            <div class="row">
              <div class="col-md-9">
                  Validation ip Example
              </div>
              <div class="col-md-3 text-right">
                <a href="\" class="btn btn-sm btn-outline-primary">Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            @if (count($errors) > 0)
                  <div class="row">
                      <div class="col-md-12">
                          <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              @foreach($errors->all() as $error)
                              {{ $error }} <br>
                              @endforeach      
                          </div>
                      </div>
                  </div>
                @endif
             <form name="frm" id="frm">  
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Enter IP Address No:</label>

                        <input type="text" name="ip_txt" id="ip_txt" class="form-control"/>
                
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <input class="btn btn-block btn-success" type="button" name="check_btn" id="check_btn" value="validate" onclick="validate_ip()"/>
                   <!--  <button class="btn btn-block btn-success">Submit</button> -->
                  </div>
                </div>

                     <span id="result" style="color: green;" class="result_spn"></span>

                        <span id="error" style="color: red;" class="error_spn"> </span>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>


      <script language="javascript">
      function validate_ip()
      {
        var chkdate = document.getElementById("ip_txt").value;
        document.getElementById("error").innerHTML="";
        document.getElementById("result").innerHTML="";
        if(document.getElementById("ip_txt").value == "")
        {
          document.getElementById("error").innerHTML="Please enter the IP Address";
          document.getElementById("ip_txt").focus();
        }
        else if(!chkdate.match(/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/))
        {
          document.getElementById("error").innerHTML="False (invalid Ip Address)";
          document.getElementById("ip_txt").focus();
        }
        else
        {
          document.getElementById("result").innerHTML="True";
        }
      }
    </script>
</body>
</html>



