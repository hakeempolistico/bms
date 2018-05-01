<style>
    .dropdown-title:hover{
        background-color: none !important;
    }

</style>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Welcome <?php if(isset($_SESSION['first_name'])) echo $_SESSION['first_name']; ?>! </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Login/logout'); ?>" >
                        <i class="material-icons">arrow_back</i>
                        <p class="hidden-lg hidden-md">Log Out</p>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group  is-empty">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document"  style="max-width: 350px">
    <div class="card card-profile">
        <div class="card-avatar">
            <a href="#pablo">
                <img class="img" src="<?php echo base_url('assets/img/faces/marc.jpg'); ?>">
            </a>
        </div>
        <div class="content">
            <h6 class="category text-gray">Admin</h6>
            <h4 class="card-title"><?php if(isset($_SESSION['first_name'])) echo $this->session->first_name.' '.$this->session->last_name; ?></h4> 
            <div style="padding: 20px">
                <table class="table" style="font-size: 12px">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"> <font class="text-gray pull-left">USERNAME: </font></td>
                            <td><font class="pull-right text-primary"><?php if(isset($_SESSION['first_name'])) echo $this->session->username;?></font></td>
                        </tr>
                        <tr>
                            <td> <font class="text-gray pull-left">EMAIL: </font></td>
                            <td><font class="pull-right text-primary"><?php if(isset($_SESSION['first_name'])) echo $this->session->email;?></font></td>
                        </tr>
                        <tr>
                            <td> <font class="text-gray pull-left">DATE: </font></td>
                            <td><font class="pull-right text-primary"><?php if(isset($_SESSION['first_name'])) echo $this->session->date_added;?></font></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                        

            <a href="#pablo" class="btn btn-primary btn-round" data-dismiss="modal">Close</a>
        </div>
    </div>
  </div>
</div>