<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <div class="container-fluid"> <a class="navbar-brand" href="<?=$home_link?>"><img src="img/logo.svg" width="150"></a>
    <div class="mobhide ml-auto" id="">
      <form class="form-inline my-2 my-lg-0 homeselect mr-3">
        <div class="dropdown">
          <a id="btn_connect" href="#" class="btn btn-info my-2 my-sm-0 mr-3 border-radius pt-2 pb-2"    onclick="connect_wallet()">Connect a wallet</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#" onclick="disconnect_wallet();">Disconnect wallet</a></li>
          </ul>
        </div>
        <!-------------------------------------------------------------->
        <div class="select selectwal" tabindex="1">
          <input class="selectopt" name="test" type="radio" id="opt1" checked>
          <label for="opt1" class="option">Polygon</label>
        </div>
        <!-------------------------------------------------------------->
      </form>
    </div>
  </div>
</nav>
