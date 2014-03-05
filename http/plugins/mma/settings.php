<?php

include('../../inc/settings.inc.php');

if (isset($_POST['email'])) {

  $settings['plugin-mma-Email'] = $_POST['Email'];
  $settings['plugin-mma-AppKey'] = $_POST['AppKey'];
  $settings['plugin-mma-MName'] = $_POST['MNname'];
  $writeSettings=true;

}


include('../../head.php');
include('../../menu.php');

?>

<div class="container">
<form name="mma" action="/settings.php" method="post" class="form-horizontal">
    <fieldset>
      <legend>Mobile miner app settings</legend>
      <div class="form-group">
        <label class="control-label col-lg-3">Email Adress</label>
        <div class="col-lg-9">
          <input type="email" placeholder="Email adress" name="Email" class="form-control">
          <p class="help-block">
            Enter the email address registered with MobileMinerApp
          </p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Application Key</label>
        <div class="col-lg-9">
          <div class="input-group">
	<input type="text" placeholder="Application Key" name="AppKey" class="form-control">
          </div>
          <p class="help-block">
          Enter the Application Key received from MobileMinerApp
          </p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Machine Name</label>
        <div class="col-lg-9">
<input type="text" placeholder="Machine Name" name="MName" class="form-control">
          <p class="help-block">
            [OPTIONAL] Enter what you would like to name this machine (no spaces!)
          </p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-9 col-offset-3">
          <button type="submit" class="btn btn-default">Save</button>
        </div>
      </div>
    </fieldset>
			

        </div>
<?php

include('../../foot.php');
